<html lang="en">
<head>
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="public/css/master.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="main navbar bs-primary-bg-subtle bg-primary pb-2">
        <div class="container-fluid">
            <a class="navbar-brand text-light">Sisfo Inventory</a>
            <form class="d-flex" action="#">
                <button class="btn btn-outline-dark" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <div class="main container ">
        @yield('view')
    </div>
</body>
</html>
