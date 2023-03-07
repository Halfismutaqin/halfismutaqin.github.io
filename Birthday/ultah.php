<?php
    include 'cek_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Happy Birthday!!! </title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="assets/styles/main.css" />
</head>

<body>

    <audio class="song" loop autoplay>
        <source src="assets/music/ultah.mp4">
        </source>
        Cek Browsermu, untuk memutar audio/video ini!
    </audio>

    <div class="container">
        <div class="one">
            <h1 class="one">
                HELLO 
                "<span id="yourname"><?= $nama ?>"</span>
            </h1>
            <h4 class="two" id="greetingText">
            WE WISH YOU HAPPY BIRTHDAY ON <strong><?= date("d-M-Y")?></strong>
            </h4>
        </div>

        <div class="three">
            <p>It's your birthday!! :D</p>
        </div>

        <div class="four">
            <div class="">
                <p class="hbd-chatbox">
                    <h2>I want to tell you</h2>
                </p>
                <p class="fake-btn"></p>
            </div>
        </div>

        <div class="five">
            <!-- <p class="idea-1">That's what I was going to do.</p>
            <p class="idea-2">But then I stopped.</p>
            <p class="idea-3">
                I realised, I wanted to do something<br>
                <strong>special</strong>
                .
            </p>
            <p class="idea-4">Because,</p> -->
            <p class="idea-5">
                You are Special
                <span>:)</span>
            </p>
            <p class="idea-6">
                <span>S</span>
                <span>O</span>
            </p>
        </div>

        <div class="six">
            <img src="img/birthday.jpg" alt="profile" class="profile-picture" id="imagePath" />
            <!-- <img src="img/hat.svg" alt="hat" class="hat" /> -->
            <div class="wish">
                <h3 class="wish-hbd">Happy Birthday!</h3>
                <h5 id="wishText">Hopefully, what you hope can be realized! ;)<h5>
            </div>
        </div>

        <div class="seven">
            <div class="baloons">
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon1.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon1.svg" alt="" />
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon1.svg" alt="" />
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon1.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon1.svg" alt="" />
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon1.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon1.svg" alt="" />
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon3.svg" alt="" />
                <img src="img/ballon2.svg" alt="" />
                <img src="img/ballon1.svg" alt="" />
            </div>
        </div>

        <div class="eight">
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" />
            </svg>
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" />
            </svg>
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" />
            </svg>
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" />
            </svg>
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" />
            </svg>
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" />
            </svg>
            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" />
            </svg>
        </div>

        <div class="nine">
            <p><a class="button" href="spin.php?nama=<?=$nama;?>">Get a gift...</a></p>
            <p id="replay">Or click, if you want to watch it again.</p>
            <p class="last-smile">:)</p>
        </div>
    </div>


</body>
<!-- Greensock -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<!-- Sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="application/javascript" src="assets/script/main.js"></script>

</html>