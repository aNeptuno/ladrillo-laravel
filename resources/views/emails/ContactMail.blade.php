<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de contacto</title>
    <!---Bootstrap css--->
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css"> 

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo asset('css/styles.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/mail.css')?>" type="text/css"> 
</head>
<body>
    <div class="text-center bg-img">
        <br><br>
        <h1>Nuevo mensaje de contacto</h1>
        <p>Asunto:  <span>  {{$details['subj']}}     <span></p>
        <p>Email:   <span>  {{$details['email']}}    <span></p>
        <p>Nombre:  <span>  {{$details['name']}}     <span></p>
        <p>Mensaje: <span>  {{$details['msg']}}      <span></p>  
    </div>
</body>
</html>
