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
    <style>
        body{
        background-image: url('/img/optimizecode.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-color: rgb(0, 0, 0,.6);
        background-blend-mode: overlay;
    }


    ul li{
        display: inline-block;
        list-style: none;
        text-decoration:none;

    }

    li a{
        position: absolute;
        top: 16px;
        left: 60px;
        text-decoration: none;
        color: black;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 20px;
        padding: 10px 10px;
    }

    a{
        border:none;
        text-decoration: none;

    }

    a:hover{
        background-color: rgb(0, 0, 0,.1);
        text-decoration: none;
        color: black;
    }

    #arrow{
        position: absolute;
        left: -30px;
        color: black;
        font-size: 15px;
        background-color: white;
        padding: 5px 5px;
        border: 1px solid black;
        border-radius: 50%;
    }


    h1{
        margin-left: -30px;
        font-size: 34px;
        font-family:Arial, Helvetica, sans-serif;
        color: white;
    }

    .form-body{
        position: absolute;
        top: 110px;
        left: 450px;

    }

    label{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .Name_input{
        border-radius: 5px;
        border: 1px solid grey;
        padding: 10px 10px;
        width: 420px;

    }

    .Name_input:focus{
        outline: none;
    }


    .email_input{
        border-radius: 5px;
        border: 1px solid grey;
        padding: 10px 10px;
        width: 420px;
    }

    .email_input:focus{
        outline: none;
    }

    .msg_input{
        border-radius: 5px;
        border: 1px solid grey;
        padding: 10px 10px;
        width: 420px;
    }

    .msg_input:focus{
        outline: none;
    }


    .btn-submit{
        position: absolute;
        position:absolute;
        width: 240px;
        top: 450px;
        left: 100px;
        padding: 8px 8px;
        border-radius: 20px;
        font-size: 14px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-transform: capitalize;
        border: 2px solid #fb6542;
        background-color: #fb6542;
        cursor: pointer;
        color: white;
    }

    .btn-submit:hover{
        background-color: rgb(0, 0, 0,.6);
        background-blend-mode: overlay;
    }

    .btn-submit:focus{
        outline: none;

    }

    </style>
</body>
</html>
