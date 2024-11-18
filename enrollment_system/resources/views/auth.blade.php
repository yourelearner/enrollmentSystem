<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <div class="logo-title-container">
                    <img src="{{ asset('assets/cvsu.png') }}" alt="Cavite State University Logo" class="logo">
                    <h1>Welcome to Cavite State University <br> - Bacoor Campus</h1>
                </div>
                <span>Please fill out the fields below to register </span>
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <input type="password" placeholder="Confirm Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <div class="logo-title-container">
                    <img src="{{ asset('assets/cvsu.png') }}" alt="Cavite State University Logo" class="logo">
                    <h1>Welcome to Cavite State University <br> - Bacoor Campus</h1>
                </div>
                <span>Please fill out the fields below to register</span>
                
                <!-- Dropdown Menu -->
                <select>
                    <option value="" disabled selected>Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="student">Student</option>
                    <option value="registrar">Registrar</option>
                    <option value="department">Department</option>
                </select>
                
                <input type="email" placeholder="Username">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button>Sign In</button>
                <div class="circle"></div>
            </form>
        </div>
        
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Create Your Account</h1>
                    <p>Register today to begin your journey with us.</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Login</h1>
                    <p>Don't Have An Account?</p>
                    <button class="hidden" id="register">Sign up</button>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="circle-right"></div>
    <div class="circle-left"></div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
