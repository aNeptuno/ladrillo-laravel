<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo asset('css/styles.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/nav_foot_style.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/contact_style.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/home_style.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/header_style.css')?>" type="text/css"> 

    <link rel="stylesheet" href="<?php echo asset('css/anim.css')?>" type="text/css"> 

    <!-- CONTENT -->
    <link rel="stylesheet" href="<?php echo asset('css/content_style.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/home_style.css')?>" type="text/css">
    
    <!---Bootstrap css--->
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css"> 
    <!---VideoJS css--->
    <link rel="stylesheet" href="<?php echo asset('css/video-js.min.css')?>" type="text/css"> 
    <!---Legacy VideoJS for compatibility--->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

    <title>Homepage Ladrillo</title>
</head>
<body>
    

    <!-- NAVBAR -->
    @include('navbar')   

    <!-- CONTENT -->
    @include('contentAboutUs') 

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