<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/limit.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title> Purchase Purchase Package</title>
</head>
<body>
    <div class="nav-bar1">
        <ul>
            <li><a href="/"><i id="arrow" class="fas fa-arrow-left"></i>Back</li></a>
        </ul>
    </div>
    <div class="form-background-limited-pack">
        <i id="pay"class="fab fa-paypal"></i>
        <form action="{{route('limited')}}" method="POST">
            <input type="text" name="customerName" class="cust-Name" placeholder="Customer Name" autocomplete="off">
            <br>
            <br>
            @csrf
            <input type="email" name= "email" class="email" placeholder="Email" autocomplete="off">
            <br>
            <br>
            <input type="text/number" name="package" class="package-type" placeholder="Package" autocomplete="off">
            <br>
            <br>
            <input class="package-price" value="$500 usd">
            <br>
            <br>
            <textarea type="text" class="package-msg" name="descrip" autocomplete="off"></textarea>
            <br>
            <br>
            <button type="submit" class="btn-business">Claim Package</button>
            <label>Contact Us...</label>
                <div class="contact-line"></div>
                <img id="fb" src="img/facebook.png.png">
                <img id="insta" src="img/instagram.png">
                <img id="youtube" src="img/youtube.png">
        </form>
    </div>
</body>
</html>
