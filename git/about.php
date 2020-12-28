<?php
include './dbconfigur.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Us - Airline Reservation System</title>
        <?php include 'title.php'; ?>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <header id="head" class="secondary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>About us</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- container -->
        <section class="container">
            <div class="row">
                <!-- main content -->
                <section class="col-sm-12 maincontent">
                    <div class="col-sm-6">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>
                            <img src="images/about.jpg" alt="" class="img-rounded pull-left" />
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>

                            Airline ticket booking system software projects main aim is to provide a secure and easy way to book flight tickets. This project is developed in PHP language and MySql Database. This Airline Reservation System should be able to manage all the reservation related functions.
                        </p>
                        <p> 
                            The purpose of Airline Reservation System is a software application which provides the flight timing details, reservation,billing and cancellation.<br/><br/>

                            Using these systems Ticket Counter person can perform operations like finding out the flight timings and to know information about flight status, seats availability and costs of each ticket,etc.
                        </p>
                    </div>



                </section>
            </div>
        </section> 
        <section class="container">
            <div class="row">
                <p>&nbsp;</p>
                <p>&nbsp;</p>                             
            </div>
        </section> 

        <?php
        include 'footer.php';
        ?>        
    </body>
</html>
