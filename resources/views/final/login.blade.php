<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{asset('/css/login_register.css')}}">
</head>
<body>

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="login-form p-4 border rounded border-dark">
        <h1 class="text-center mb-4">Welcome</h1>
        <form action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
        </form>
        <p class="text-center mt-3">Don't have an account? <a href="/register">Register</a></p>
    </div>
</div>

</body>
</html>
