<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/userhome.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Welcome Pro</title>
</head>
<body>
    <div class="nav-container">
        <div class="nav-bar">
            <ul>
                <li><img src="img/logo.jpg" class="logo"></li>
                <li><a class="admin" href="Sign in">Admin</li></a>
                <li><a href="Aboutpage">About Us</li></a>
            </ul>
        </div>
    </div>
    <div class="intro">
        <h1 class="stock">Full Stack-Web<br>Developer</h1>
        <h4 class="bio">Hi, I'm Damani Beckford, Check out my Websites.<br>
        Please Ensure to Subscribe and stay tune for more Amazing websites.</h4>
        <a href="list_of_websites"><button class="btn-web">Go to Website</button></a>
        <a href="mail"><button id="Click_contact" class="btn-contact">Contact Us</button></a>
    </div>
        <div class="white-layout">
            <div class="grid-wrapper">
                <div class="grey-layout">
                    <div class="plus">
                        <h2>1+</h2>
                        <p class="grid1-header">Website Completed</p>
                        <div class="grid-body">Hosted and can be seen by clicking <br>the button below</div>
                        <a href="list_of_websites"><button class="btn-complete"> Websites</button></a>
                    </div>
                </div>
                <div class="grey-layout1">
                    <div class="plus+">
                        <img id="laptop" src="/img/laptop.png">
                        <p class="grid2-header">Website Design</p>
                        <div class="grid2-body">This include css, html, javascript, php laravel etc.<br>
                        The different areas of web design include web graphic design;
                        interface design; authoring, including standardised code and proprietary software; <br>
                        user experience design; and search engine optimization. </div>
                        <button id="click_btn"class="btn-website"> Learn More</button>
                    </div>
                </div>
                <div class="model2container">
                    <div class="model2">
                        <div class="">
                        <div class="close-model2"><i class="fas fa-times"></i></div>
                    </div>
                </div>
                </div>
                <script>
                    document.getElementById('click_btn').addEventListener('click', function(){
                        document.querySelector('.model2container').style.display = 'flex';

                    });

                    document.querySelector('.close-model2').addEventListener('click', function(){
                        document.querySelector('.model2container').style.display ='none';
                    });
                </script>
                <div class="grey-layout2">
                    <div class="tool">
                        <img id="tool" src="/img/tool.png">
                        <p class="grid3-header">Maintenance</p>
                        <div class="grid3-body"></div>
                        <button id="click_btn_main"class="btn-maintenance">Maintenance & More</button>
                    </div>
                </div>
                <div class="model3container">
                    <div class="model3">
                        <div class="model3-body">
                            <h2 class="payment-header"><i id="pay"class="fab fa-paypal"></i>ackages</h2>
                            <div class="payment-line"></div>
                            <div class="business-packages">
                                <i id="suitcase" class="fas fa-briefcase"></i>
                                <h3 class="business-pack-name">Business packages</h3>
                                <h4 class="price-tag">$500 usd</h4>
                                <div class="offer-container">
                                    <p class="offer1-bus"><i class="fas fa-circle"></i>E-commerce/Business</p>
                                    <p class="offer2-bus"><i class="fas fa-circle"></i>php laravel</p>
                                    <p class="offer3-bus"><i class="fas fa-circle"></i>High Quality Design</p>
                                    <p class="offer4-bus"><i class="fas fa-circle"></i>User Friendly</p>
                                </div>
                                <div class="offer-container2">
                                    <p class="offer5-bus"><i class="fas fa-circle"></i>Meaningfull Graphics</p>
                                    <p class="offer6-bus"><i class="fas fa-circle"></i>Easily Readability</p>
                                    <p class="offer7-bus"><i class="fas fa-circle"></i>Good Color Balance</p>
                                    <p class="offer8-bus"><i class="fas fa-circle"></i>Easy Navigability</p>
                                </div>
                               <a href="claim buspack" ><button class="purch-btn">Purchase</button></a>
                            </div>
                            <div class="Regular-packages">
                                <i id="box" class="fas fa-box-open"></i>
                                <h3 class="regular-pack-name">Ultimate packages</h3>
                                <h4 class="price2-tag">$800 usd</h4>
                                <div class="offer-container3">
                                    <p class="offer1-bus"><i class="fas fa-circle"></i>E-commerce/Business</p>
                                    <p class="offer2-bus"><i class="fas fa-circle"></i>html,css and php laravel</p>
                                    <p class="offer3-bus"><i class="fas fa-circle"></i>Super High Quality Design</p>
                                    <p class="offer4-bus"><i class="fas fa-circle"></i>User Friendly</p>
                                </div>
                                <div class="offer-container4">
                                    <p class="offer5-bus"><i class="fas fa-circle"></i>Svg Background</p>
                                    <p class="offer6-bus"><i class="fas fa-circle"></i>Animated Effects</p>
                                    <p class="offer7-bus"><i class="fas fa-circle"></i>Great Color Theme</p>
                                    <p class="offer8-bus"><i class="fas fa-circle"></i>Good Navigation</p>
                                </div>

                                <a href="claim limitpack" ><button class="purch2-btn">Purchase</button></a>
                            </div>
                            <div class="Maintenance-packages">
                                <i id="box" class="fas fa-archive"></i>
                                <h3 class="regular-pack-name"> Regular packages</h3>
                                <h4 class="price3-tag">$200 usd</h4>
                                <div class="offer-container5">
                                    <p class="offer1-bus"><i class="fas fa-circle"></i>Static Website</p>
                                    <p class="offer2-bus"><i class="fas fa-circle"></i>html,css and javascript</p>
                                    <p class="offer3-bus"><i class="fas fa-circle"></i>Good Quality Design</p>
                                    <p class="offer4-bus"><i class="fas fa-circle"></i>User Friendly</p>
                                </div>
                                <div class="offer-container6">
                                    <p class="offer5-bus"><i class="fas fa-circle"></i>Non-Server side</p>
                                    <p class="offer6-bus"><i class="fas fa-circle"></i>No Animation</p>
                                    <p class="offer7-bus"><i class="fas fa-circle"></i>Cool Color Theme</p>
                                    <p class="offer8-bus"><i class="fas fa-circle"></i>Moderate Navigation</p>
                                </div>


                                <a href="claim regpack" ><button class="purch3-btn">Purchase</button></a>
                            </div>
                        </div>
                        <div class="close-model3"><i class="fas fa-times"></i></div>
                    </div>
                </div>
                <script>
                    document.getElementById('click_btn_main').addEventListener('click', function(){
                        document.querySelector('.model3container').style.display = 'flex';

                    });

                    document.querySelector('.close-model3').addEventListener('click', function(){
                        document.querySelector('.model3container').style.display ='none';
                    });
                </script>
            </div>
            <div class="grid-container2">
                <div class="grid-wrapper2">
                    <h2 class="service-header">What makes my Design Unique ?</h2>
                    <div class="service-line"></div>
                    <p class="body-para">I specialized in making unique websites, mostly html, css are being used and also php laravel.<br>
                    Am willing to help my clients to achieve a great websites for there business, i dedicate my self to provide my client with good work quality,
                    <br>Custom Designs, high quality graphic design and mostly being user friendly so that persons who go on your business page will able <br>to navigate through out the website.</p>
                    <img id="fullstack" src="img/fullstack.png">
                    <footer>
                        <div class="contact-info">
                            <label>Contact Us</label>
                            <div class="contact-line"></div>
                            <img id="fb" src="img/facebook.png.png">
                            <img id="insta" src="img/instagram.png">
                            <img id="youtube" src="img/youtube.png">
                        </div>
                            <p>Copyright © 2020 MyPortfolio. All rights reserved.</p>
                    </footer>

                </div>
            </div>
        </div>
</body>
<style>







</style>
</html>
