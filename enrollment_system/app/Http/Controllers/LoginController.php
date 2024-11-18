<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $this->validate(request(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = Login::where('username', $credentials['username'])->first();

        if ($user) {
            if ($user->password == $credentials['password']) {
                return redirect()->route('subject.index');
            } else {
                return back()->withErrors(['password' => 'Incorrect password'])->withInput(request(['username']));
            }
        } else {
            return back()->withErrors(['username' => 'User not found'])->withInput(request(['username']));
        }
    }

    public function showRegister()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:255',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'birth_date' => 'required',
            'password' => 'required',
        ]);

        $login = new Login();
        $login->username = $request->username;
        $login->first_name = $request->first_name;
        $login->last_name = $request->last_name;
        $login->phone = $request->phone;
        $login->birth_date = $request->birth_date;
        $login->password = $request->password;

        $login->save();

        return redirect()->route('login.login')->with('success', 'User successfully registered');
    }
}
