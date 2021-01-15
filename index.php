<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width= device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>wesell</title>

    </head>
    <body>
        <?php include('header.php');?>
        <!--welcomephoto-->
        <section class="welcomephoto">
            <div class="shadewimg"></div>
        <div class="wphoto">
            <div class="center-text">
                    <h1>For Gamers , By Gamers</h1>
            </div>
        </div>
        </section>
        <!---Cardssector-->
        <div class="toptext">
            <h1>Produktet më të kerkuara.</h1>
        </div>
        <div class="row">
            <!--Card1-->
            <div class="card">
                <div class="card-head-first">
                </div>
                <div class="card-body">
                    <h1>Nvidia RTX 3080</h1>
                    <p>Kjo është një kartë grafike jashtëzakonisht e fuqishme, e cila përdor një slot PCIe 4.0 (e përputhshme PCIe 3.0) për t'u lidhur me pllakën amë. Përveç kësaj, procesori grafik përdor arkitekturën Ampere dhe siguron një frekuencë deri në 1740 MHz.</p>
                    <a href="products.php" class="btn">Lexo Meshume</a>
                </div>
            </div>
            <!--Card2-->
            <div class="card">
                <div class="card-head-second"> 
                </div>
                <div class="card-body">
                    <h1>Ryzen 5</h1>
                    <p>Ky procesor i gjeneratës së tretë Ryzen mbështet çipset AMD A520, AMD B450, AMD B550, AMD X470, AMD X570. Vepron në frekuencë 3600 MHz. Ka 6 bërthama dhe kapacitet 65 W TDP. Për memorie RAM ofron frekuencë 3200 MHz.</p>
                    <a href="products.php" class="btn">Lexo Meshume</a>
                </div>
            </div>
            <!--Card3-->
            <div class="card">
                <div class="card-head-third">
                </div>
                <div class="card-body">
                    <h1>Intel i9 9900K</h1>
                    <p>Është një procesor jashtëzakonisht i fuqishëm i gjeneratës së 9-të të Coffee Lee Refresh projektuar për LGA 1151 socket, i cili ofron 8 bërthama fizike (16 threads) dhe ka frekuencë prej 3.6 GHz dhe deri në 5.0 GHz në modalitetin Turbo.</p>
                    <a href="products.php" class="btn">Lexo Meshume</a>
                </div>
            </div>
        </div>
    
        <!--formsector-->
    <?php include('config.php');?>
    <!--footer-->
    <?php include('footer.php');?>