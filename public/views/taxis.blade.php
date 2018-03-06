@extends('master')
<?php

if (isset($_GET["name"])) {

require_once 'core/lib/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Mailer = "smtp";
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Username = 'pvguideinfo@gmail.com';
$mail->Password = 'Pinponpapas@123';
$mail->Port = 465;

$mail->setFrom('pvguideinfo@gmail.com', 'PVGUIDE');

$mail->addAddress('pvguideinfo@gmail.com', 'PVGUIDE');

$mail->isHTML(true);


$mail->Subject = 'PVGUIDE RealeState';

$BodyBuffer  = "<br><strong>TAXI</strong><br><br>";
$BodyBuffer .= "<strong>Name: </strong>".$_GET["name"]."<br>";
$BodyBuffer .= "<strong>Email: </strong>".$_GET["email"]."<br>";
$BodyBuffer .= "<strong>Phone: </strong>".$_GET["phone"]."<br>";
$BodyBuffer .= "<strong>Type: </strong>".$_GET["datetimepicker1"]."<br>";


$mail->Body    = $BodyBuffer;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    ?>
    <script type="text/javascript">

          window.onload = function() {
  document.getElementById("messageTitle").innerHTML = "Thanks for booking, we will send you an email to confirm it.";
};
    </script>

    <?php
}

}

?>
@section('body')


                  <h3><center>Puerto Vallarta Airport Transfer Service (Taxis)</center>
               </h3>
               <p class="text-"> 


Arrive at Puerto Vallarta International Airport and be picked up with one of our comfortable, air-conditioned airport taxi transfers

All our transfers are private, you won't share the vehicle with anyone else.
 <div class="col-sm-6 col-lg-4 col-md-4 photography graphicdesign "style="float: left;">
                     <div class="gal-detail thumb box-shadow">
                        <img src="images/taxi1.jpeg" class="thumb-img" alt="work-thumbnail">
                        </a></div>
                        <br>
                     <br>
                  </div>

<ul class="glyphicon glyphicon-ok" aria-hidden="true"> Prompt </ul><br>
<ul class="glyphicon glyphicon-ok" aria-hidden="true"> Efficient</ul> <br>
<ul class="glyphicon glyphicon-ok" aria-hidden="true"> Friendly</ul> <br>
<ul class="glyphicon glyphicon-ok" aria-hidden="true"> Reliable</ul> <br>
<ul class="glyphicon glyphicon-ok" aria-hidden="true"> Professional</ul> 	<br>	
    
    </p>
    <p class="text-"> We believe in providing a service that  “we would expect” from a  professional transport company. Wherever your travels may take you, hotel, condo, private residence, let us get you there safely.
</p>
 <div class="col-sm-6 col-lg-4 col-md-4 photography graphicdesign "style="float: right;">
                     <div class="gal-detail thumb box-shadow">
                        <img src="images/taxi2.jpeg" class="thumb-img" alt="work-thumbnail">
                        </a></div>
                        <br>
                     <br>
                  </div>
<p class="text-"> SUVs ,Sedans or Mini Vans will transfer you 
 to and from Puerto Vallarta Airport (PVR) quickly and efficiently with our chauffeur driven services. If you plan on traveling with a medium or large group, we highly recommend hiring one of our SUVs or Mini Vans. This option is perfect for wedding parties, large groups or families. 
    </p> <p class="text-">Remove the hassle and stress of navigating on your own in Puerto Vallarta. All drivers are flexible and will work with you to meet your itinerary needs. To help be efficient with your stay, our drivers will stop at a large grocery store to pick up groceries, snacks, wine,water,spirits, but be sure to inform your driver upon booking. 
Transport also available for short or long term rental with drivers. 
<br>
<br>
<b id="messageTitle">PLEASE FILL OUT A BOOKING FORM BELOW. WE WILL SEND YOU AN EMAIL TO CONFIRM YOUR BOOKING</b>
<br>

<div class="container">
	<div class="row block-center">
        <div class="col-sm-4" id="form-box">
            <form action="#" method="#">
                <div class="panel panel-primary">
                    <div class="panel-heading" id="panel-heading">
                        <h2 class="titre">Book a taxi</h2>
                    </div>
                    <div class="panel-body">
                        <form class="form" method="post">
                            <div class="form-group has-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <label for="name" class="sr-only"></label>
                                    <input type="name" class="form-control" id="name" name="name" placeholder="Name" required/><br/></div>
                            
                            </div>
                          <div class="form-group has-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                    <label for="email" class="sr-only"></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/><br/></div>
                            
                            </div>
                                
                                <div class="form-group has-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <label for="tel" class="sr-only"></label>
                                    <input type="tel" class="form-control" id="tel" name="phone" placeholder="Phone"/><br/></div>
                               </div>

                             
                                <div class="form-group has-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <label for="datetimepicker1" class="sr-only"></label>
                                    <input type="date" class="form-control" id="datetimepicker1" name="datetimepicker1" placeholder="Date"/><br/></div>

                                </div>
                    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
                            <span id="clear"></span>
                            <button type="submit" class="btn btn-primary btn-lg " >Book</button><br/>
                            
                        </form>
                    </div>
                    <div class="panel-footer">
                        Copyright © All right reserved. <a href="http://pvgui.info">pvguide.info</a>™
                    </div>
                </div>
            </div>
        </form>    
	</div>
</div>




@stop

@section('sidebar')
Aqui va el texto o codigo que quieras debajo esta imagen
@stop
@section('sidebar2')
Aqui va el texto o codigo que quieras debajo esta segunda imagen
@stop

