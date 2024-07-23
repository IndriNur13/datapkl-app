<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: indigo">
    <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="width: 30rem;">
        <div class="card-body m-5">
    <form action="/ceklogin" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="text" name="email" id="" class="form-control">
            @error('email')
                <small>{{$message}}</small><br>
            @enderror
            <div class="form-text"></div>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" id="" class="form-control">
            @error('password')
                <small>{{$message}}</small><br>
            @enderror
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary mt-2">Login</button>
        </div>
        <br>
        <small>Jika belum mempunyai account silahkan click<a href="/registerpage">disini</a></small>
    </form>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
