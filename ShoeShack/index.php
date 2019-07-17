<?php
include 'header.php';
include "config.php";
session_start();

if(!isset($_SESSION['email'])){
    header('location:signup.php');
}
?>
<div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="./shoes/th.jpeg" alt="Nikeys" style="width:100%;height: initial;">
            </div>
            <div class="item">
                <img src="./shoes/th%20(1).jpeg" alt="Jordans" style="width:100%;height: initial;">
            </div>
            <div class="item">
                <img src="./shoes/th%20(2).jpeg" alt="Filas" style="width:100%; height: initial">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<?php include 'footer.php'; ?>