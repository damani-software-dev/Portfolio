<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="/mail.css">
    <title>Contact</title>
</head>
<body>
    <div class="nav-bar1">
        <ul>
            <li><a href="/"><i id="arrow" class="fas fa-arrow-left"></i>Back</li></a>
        </ul>
    </div>
        <center><h1>Consultant</h1></center>
        <div class="form-body">
            <form action="{{route('mail')}}" method="POST">
                <label>Full Name:</label>
                <br>
                <br>
                {{@csrf_field()}}
                <input class="Name_input" type="text" name="Username" placeholder="Username" required autocomplete="off"></input>
                <!--@error('name')
                <div style="color: red;">{{$message}}</div>
                @enderror-->
                <br>
                <br>
                <label>Email:</label>
                <br>
                <br>
                <input class="email_input" type="email" name="UserEmail" placeholder="Email" required autocomplete="off"></input>
                <!--@error('email')
                <div style="color: red;">{{$message}}</div>
                @enderror-->
                <br>
                <br>
                <label>Message:</label>
                <br>
                <br>
                <textarea class="msg_input" type="text" name="msg" rows="8" required autocomplete="off"></textarea>
                <!--@error('body')
                <div style="color: red;">{{$message}}</div>
                @enderror-->
                <center><button class="btn-submit" type="submit">Submit</button></center>
            </form>
       </div>
    
</body>
</html>
