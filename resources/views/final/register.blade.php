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
        <h1 class="text-center mb-4">Register</h1>
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" class="form-control" id="username" name="nama" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="Alamat">Address</label>
                <input type="text" class="form-control" id="Alamat" name="alamat" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="tel" class="form-control" id="no_telepon" name="no_telepon" placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Register</button>
        </form>
    </div>
</div>

</body>
</html>
