<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/registered" method="POST">
        @csrf
        <small>Nama Lengkap</small> <br>
        <input type="text" name="name" id="" value="{{old('name')}}"> <br>
        @error('name')
            <small>{{$message}}</small><br>
        @enderror
        <small>Email</small> <br>
        <input type="text" name="email" id="" value="{{old('email')}}"> <br>
        @error('email')
            <small>{{$message}}</small><br>
        @enderror
        <small>Password</small> <br>
        <input type="password" name="password" id=""> <br>
        @error('password')
            <small>{{$message}}</small><br>
        @enderror <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
