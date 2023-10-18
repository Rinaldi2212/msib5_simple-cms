<!DOCTYPE html>
<html>
<head>
    <title>Simple CMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Selamat datang di Simple CMS</h1>
                <p class="text-center">Silakan login atau register untuk melanjutkan.</p>
                <a class="btn btn-primary btn-block" href="{{ route('login') }}">Login</a>
                <a class="btn btn-secondary btn-block" href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
