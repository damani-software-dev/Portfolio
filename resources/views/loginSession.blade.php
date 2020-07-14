<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/main.css">
    <title>Login</title>
</head>
<body>
    <div class="form-container">
        <img src="/img/profile pic.jpg" class="form-image">
        <form action="sign in" method="POST">
            <label>Username:</label>
            <br>
            <br>
            @csrf
            <input type="text" name="username" class="user" placeholder="Username" autocomplete="off">
            @error('username')
                <span style="font-family: arial; font-size:9px;color:red;">{{$message}}</span>
            @enderror
            <br>
            <br>
            <label>Password:</label>
            <br>
            <br>
            <input type="password" name="password" class="password" autocomplete="off">
            @error('password')
                <span style="font-family: arial; font-size:9px; color:red;">{{$message}}</span>
            @enderror
            <br>
            <br>
            <button type="submit" name="submit" class="btn-sub">Login</button>
        </form>
    </div>
</body>
</html>
