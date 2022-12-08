<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!---Bootstrap css--->
        <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css"> 
        <!---VideoJS css--->
        <link rel="stylesheet" href="<?php echo asset('css/video-js.min.css')?>" type="text/css"> 

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="<?php echo asset('css/styles.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/reel_style.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/nav_foot_style.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/contact_style.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/home_style.css')?>" type="text/css"> 

        <link rel="stylesheet" href="<?php echo asset('css/anim.css')?>" type="text/css"> 

        <title>Ladrillo Coop</title>
    </head>
    <body class="antialiased">   

        <!-- NAVBAR -->
        @include('navbar')   

        <!-- HEADER -->
        @include('header')
       
        <!-- CONTENT -->
        @include('contentHome')

        <!-- CONTACT -->
        @include('contact')

        <!-- FOOTER -->
        @include('footer')

        <!---Font awesome--->
        <script src="https://kit.fontawesome.com/cc72c2879b.js" crossorigin="anonymous"></script>
        <!---Bootstrap js--->
        <script src="<?php echo asset('js/bootstrap.bundle.min.js')?>"></script>
        
        <!--Video JS script, video player script-->
        <script src="<?php echo asset('js/video.min.js')?>"></script>
        <script src="<?php echo asset('js/video-player.js')?>"></script>
        <!--Animations-->
        <script src="<?php echo asset('js/anim.js')?>"></script>

        <!--SweetAlert-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    </body>
</html>
