<!doctype html>
<html lang="en">

<!-- *******************************
Page: Main page constructor!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->

<!-- This page is used to create a framework for all pages on the website! -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>

    <title>Josh's DND Tavern!</title>
    <style type="text/css">

        /* navigation stuff! */
        .nav-item {
        width: 135px;  
        display: inline-block;
        line-height: 64px;
        text-align: center;
        }
        .nav-item a {
            border-bottom: 5px solid #eee;
            
        }
        .nav-item a:hover {
            border-bottom: 5px solid #ddd;
        }
        .navbar-nav li.active a {
            color: #000!important;
            border-bottom: 5px solid #ccc;
            border-color: #94baf7;
        }

        .nav-item:hover {
            background: #eee;
        }
        .navbar {
            padding-bottom:0;
        }

        a:active,
        a:hover,
        a:link {
            text-decoration: none;
            padding:0;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    @include('partials.nav')
    <div class="container">
        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>