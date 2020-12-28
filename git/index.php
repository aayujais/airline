<?php
include './dbconfigur.php';
?>
<html>
    <head>
        <title>Welcome to Airline Reservation System</title>
        <?php include 'title.php'; ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <!-- Header -->
        <header id="head">
            <div class="container">
                <div class="banner-content">
                    <div id="da-slider" class="da-slider">

                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <section class="container">
            <div class="heading">
                <!-- Heading -->
                <h2>About the project</h2>
            </div>
            <div class="row">                
                <div class="col-md-7">
                    <p>
                        Airline ticket booking system software projects main aim is to provide a secure and easy way to book flight tickets. This project is developed in PHP language and MySql Database. This AIRLINE RESERVATION MANAGEMENT SYSTEM should be able to manage all the reservation related functions.
                    </p>     
                </div>
                <div class="col-md-5">
                        <img src="images/about.jpg" alt="">
                    </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Our Goals</h2></div> 
                    <p>
                        <span>
                            The purpose of Airline Reservation System is a software application which provides the flight timing details, reservation,billing and cancellation.<br/><br/>

                            Using these systems Ticket Counter person can perform operations like finding out the flight timings and to know information about flight status, seats availability and costs of each ticket,etc.
                        </span>
                    </p>                   
                </div>                                
        </section>
        <?php include './footer.php'; ?> 
    </body>
</html>
