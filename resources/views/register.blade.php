<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Register</h1>


    <form action="{{route('signupUser')}}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter Name"><br>
        <span>@error('name') {{$message}} @enderror </span><br>
        <input type="email" name="email" id="" placeholder="Enter Email"><br>
        <span>@error('email') {{$message}} @enderror </span><br>
        <input type="password" name="password" id="" placeholder="Enter Password"><br>
        <span>@error('password') {{$message}} @enderror </span><br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>