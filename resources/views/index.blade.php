<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldGen Academy</title>

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">

    <script src='main.js'></script>

    <style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>

    <script>
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollBtn").style.display = "block";
        } else {
            document.getElementById("scrollBtn").style.display = "none";
        }
    }

    function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Hide the dropdown when clicking outside of it
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.dropdown').length) {
                $('.dropdown-content').hide();
            }
        });

        // Show/hide the dropdown when clicking on the username button
        $('.dropdown-btn').on('click', function() {
            $('.dropdown-content').toggle();
        });
    });
    </script>

</head>

<body style="background: #FFFFFF;">
    <div id="scrollBtn" onclick="scrollToTop()">
        &uarr;
    </div>
    @extends('layout.master')

    @section('content')
    <section class="tengah">
        <style>
            .btn-rec {
                display: flex;
                justify-content: center;
            }

            .btn-rec button {
                display: inline-block;
                display: flex;
                background-color: black;
                color:white;
                border: none;
                border-radius: 8px;
                cursor: pointer;
            }

            .btn-rec button:hover {
                background-color: grey;
            }

        </style>

        <div class="dwu">
            Join Us !
        </div>

        <div class="desc">
            6666 People Have Gotten Jobs From Here
        </div>

        <div class="desc2">
            With Us Get More Opportunities to Get Jobs in Technology
        </div>

        <div class="btn-rec">
            <button class="sap" onclick=" window.location.href ='{{url('recommendation')}}';">
                Click to Get Course Recommendation
            </button>
        </div>

        <div class="socialMedia">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
        </div>


    </section>

    <section class="partner">
        <div class="tp">
            Trusted Partner
        </div>

        <div class="logoPartner">
            <img src="Assets/images/Microsoft.png" alt="">
            <img src="Assets/images/gmeet.png" alt="">
            <img src="Assets/images/zoom.png" alt="">
        </div>
    </section>

    <div class="ellipse2"></div>

    <!-- <section class="courses">
        <div class="tulisan">

            <div class="successP">
                Popular Courses
            </div>
        </div>

        <div class="gambarP">
            <div class="frameKiri">
                <img src="Assets/images/projectimage1.png" alt="">
                <h1>Website Design</h1>
                <p>Lörem ipsum astrobel sar direlig. Kronde est konfoni med kelig. Terabel pov astrobel sar</p>
            </div>

            <div class="frameKanan">
                <div class="fkAtas">
                    <img src="Assets/images/projectimage1.png" alt="">
                    <h1>Website Design</h1>
                    <p>Lörem ipsum astrobel sar direlig. Kronde est konfoni med kelig. Terabel pov astrobel sar</p>
                </div>
                <div class="fkAtas">
                    <img src="Assets/images/projectimage1.png" alt="">
                    <h1>Website Design</h1>
                    <p>Lörem ipsum astrobel sar direlig. Kronde est konfoni med kelig. Terabel pov astrobel sar</p>
                </div>
            </div>
        </div>
    </section> -->

    <section class="bawah">

        <div class="bgBawah">
            <style>
            .button-reg button {
                display: flex;
                background-color: white;
                padding: 15px;
                color: black;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                margin-right: 50px;

            }

            .button-reg button:hover {
                background-color: gold;
            }
            </style>
            <div class="content">
                <h1>Join Now With Us</h1>
                <p>Our company is a very professional company, with friendly service, modern homes and interest course
                </p>
            </div>
            <div class="button-reg">
                <button onclick="window.location.href ='{{url('register')}}';">Sign Up Here</button>
            </div>
        </div>
    </section>

    @endsection