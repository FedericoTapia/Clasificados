<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/cars.style.css">

</head>
    <header>
        <div id="logoDiv">
            <img src="libs/images/Logo.png" alt="logo" id="logoBajitos">
        </div>
        <div class="navegacion">
        
            <li><a href="home"><button class="btn btn-warning btn-lg">Index</button></a></li>

        </div>
        <div class="col-sm-4 text-center" style="padding-top:55px" >
            <a href="showAgregarAuto"><button class="btn btn-success btn-lg"> Agregar Auto</button></a>
            <a href="logout"><button class="btn btn-warning btn-lg"> log Out</button></a>
            
        </div>
        {include file="templates/delete.tpl"}

    </header>
<body>
    <div class="container-fluid">
