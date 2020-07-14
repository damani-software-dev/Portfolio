<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="main.css"/>
    <title>Admin</title>
</head>
<body>
    <div class="nav-container1">
        <div class="nav-bar1">
            <ul>
                <li><a href="Sign in"><i id="arrow" class="fas fa-arrow-left"></i>logout</li></a>
            <li class="greetings">Welcome <span>{{session('data')['user-name']}}</span><img src="img/profile pic.jpg" class="pro-pic"></li>
            </ul>
        </div>
    </div>
    <h2 class="header">Project Management</h2>
    <a href="#schedule"><button class="btn1">Schedule</button></a>
    <a href="#"><button class="btn2">Upload Project</button></a>
    <div id="vuesdash" class="schedule">
        <div class="background-white"></div>
        <div class="hr"></div>
        <h1 id="schedule">Schedule</h1>
        <ul class="headers">
            <li v-on:click='DisplayUpcoming = !DisplayUpcoming'  class="header1">On&nbsp;-&nbsp;Going&nbsp;Activity</li>
            <li class="header2">Activity(ommit)</li>
            <li class="header3">Finished(ommit)</li>
        </ul>

        <button v-on:click='displayactivity =!displayactivity ' class="btn-activ">Add Activity</button>
        <form v-if='displayactivity'>
            <label >New Activity</label>
            <br>
            <br>
            <input class="activ-input" type="text" placeholder="Activity"></input>
            <br>
            <br>
            <button class="btn-add">Add</button>
        </form>
        <div v-if='DisplayUpcoming' class="activity-container">
            <h1>Project&nbsp;&nbsp;1</h1>
            <input type="checkbox" name="done" id="checkbox" >
            <img src="img/profile pic.jpg" class="img-2"/>
            <p class="topic">Laravel&nbsp;and&nbsp;Php</p>
            <div class="underline-project"></div>
            <p class="Laravel-para">
                Since the runtime-only builds are roughly 30% lighter-weight than thei
                <br>full-build counterparts, you should use it whenever you can.
                <br>If you still wish to use the full build instead,
                <br>you need to configure an alias in your bundler:
            </p>
            <div class="">

        </div>
    </div>

    <!--<div class="dashboard">
        <div class="dashboard-header">

        </div>
    </div>
    <div class="dash-layout">
        <h2>Project Management</h2>
        <div class="layout_line"></div>
    </div>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
    <script>
        var app = new Vue({
            el: '#vuesdash',
            data: {
            message: 'Hello Vue!',
            header1: 'Upcoming',
            DisplayUpcoming: true,
            Work:'Project 1',
            displayactivity: true

        }
    })
    </script>
</body>
</html>
