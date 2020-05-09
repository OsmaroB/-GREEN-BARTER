<?php
 function navbarIndex(){
    print('
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../web/css/style.css">
    <link rel="stylesheet" href="../web/css/animate.css">
    <title>Document</title>
</head>
<body>
    <div class="background-jumbotron ">
    <nav class="navbar navbar-expand-lg navbar-dark background-navbar ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-cards white" href="registrar.php"  data-toggle="modal" data-target="#modalLogin">Iniciar Sesión</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-cards" href="shop.php">Compra ahora</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-cards" href="registrar.php" data-toggle="modal" data-target="#exampleModal">Quiero vender</a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link  text-cards"  href="registrar.php"data-toggle="modal" data-target="#modalDonar">Quiero donar</a>
            </li>
            
            </ul>
        </div>
    </nav>
    
    ');
 }
 function navbarPublic(){
    print('<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="../web/css/bootstrap.min.css">
        <link rel="stylesheet" href="../web/css/style.css">
        <link rel="stylesheet" href="../web/css/animate.css">
        <title>Document</title>
    </head>
    <body>
        <div class="background-jumbotron ">
        <nav class="navbar navbar-expand-lg navbar-dark background-navbar ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                
                <li class="nav-item ">
                    <a class="nav-link text-cards" href="index.php">Atrás</a>
                </li>
                
                </ul>
            </div>
        </nav>
        ');
 }
 function navbarProduct($dato){
    print('<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="../web/css/bootstrap.min.css">
        <link rel="stylesheet" href="../web/css/style.css">
        <link rel="stylesheet" href="../web/css/animate.css">
        <title>Document</title>
    </head>
    <body>');
    if($dato == 1){
        print('<div class="background-jumbotron-product ">');
    }else if($dato ==2){
        print('<div class="background-jumbotron-shop ">');
    }else if($dato ==3){
        print('<div class="background-jumbotron-detalle ">');
    }
    $clase="producto";
    if($dato ==2){
        $clase ="";
    }
    print("
        <nav class='navbar navbar-expand-lg navbar-dark background-navbar '>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label=''>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                
                <li class='nav-item '>
                    <a class='nav-link text-cards $clase' href='index.php'>Inicio</a>
                </li>
                <li class='nav-item '>
                    <a class='nav-link text-cards $clase' href='index.php'>Inicio</a>
                </li>
                <li class='nav-item '>
                    <a class='nav-link text-cards $clase' href='index.php'>Inicio</a>
                </li>
                
                </ul>
            </div>
        </nav>
        ");
 }
?>
