<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Welcome, {{ Auth::user()->username }}</h1>
<p>Role: {{ Auth::user()->role }}</p>
<a href="{{ route('logout') }}">Logout</a>
</body>
</html>
