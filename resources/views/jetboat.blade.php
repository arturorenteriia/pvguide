@extends('master')

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_GET["name"])) {

require 'core/lib/PHPMailer/src/Exception.php';
require 'core/lib/PHPMailer/src/PHPMailer.php';
require 'core/lib/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {


  $mail->isSMTP();

  $mail->SMTPOptions = array(
  'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
  )
  );

  $mail->Host = 'smtp.gmail.com';
  $mail->Mailer = "smtp";
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Username = 'pvguideinfo@gmail.com';
  $mail->Password = 'Ibiza211';
  $mail->Port = 465;

  $mail->setFrom('pvguideinfo@gmail.com', 'PVGUIDE');

  $mail->addAddress('mizar.itc@gmail.com', 'PVGUIDE');
  $mail->addAddress('arturorb91@gmail.com', 'PVGUIDE');
  $mail->isHTML(true);


  $mail->Subject = 'PVGUIDE Jet Boat TSUNAMI';

  $BodyBuffer  = "<br><strong>Jet Boat TSUNAMI</strong><br><br>";

  $BodyBuffer .= "<strong>Name: </strong>".$_GET["name"]."<br>";
  $BodyBuffer .= "<strong>Email: </strong>".$_GET["email"]."<br>";
  $BodyBuffer .= "<strong>Phone: </strong>".$_GET["phone"]."<br>";
  $BodyBuffer .= "<strong>Date: </strong>".$_GET["datetimepicker1"]."<br>";
  $BodyBuffer .= "<strong>Time: </strong>".$_GET["time"]."<br>";
  $BodyBuffer .= "<strong>People: </strong>".$_GET["people"]."<br>";


  $mail->Body    = $BodyBuffer;


} catch (\Exception $e) {

}



if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    ?>
    <script type="text/javascript">

          window.onload = function() {
  document.getElementById("messageTitle").innerHTML = "Thank you for your enquiry. We will contact you shortly";
};
    </script>

    <?php
}

}

?>
@section('body')


                  <h3><center>Jet Boat TSUNAMI</center>
               </h3>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/jetboat2.jpeg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/jetboat1.jpeg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> <br>
         <div class="col-sm-12 col-lg-12 col-md-12" >
            <hr>
          <p>
          Enjoy a one hour thrill on the extreme jet boat called the “Tsunami”. Capable of extreme manoeuvres in the ocean  aboard the roller coaster of the sea - a 1200 hp jet boat powered by water turbines that allow it to do 180 to 360 degree turns and submerge and dive into the sea suddenly after hitting speeds of upto  90 kilometres per hour or 50 knots, ! creating a massive wave called the “TSUNAMI “ Water completely enters the boat leaving her partially flooded. This boat literally flys through the sea and air reaching hair-raising speeds.</p>

  <hr>
  <div class="visible-xs">
  <div class="embed-responsive embed-responsive-4by3">
  <iframe width="640" height="360" src="https://www.youtube.com/embed/YluNdS5KWwc"></iframe>
</div>
</div>
<div class="hidden-xs">
 <iframe width="640" height="360" src="https://www.youtube.com/embed/YluNdS5KWwc"></iframe>
</div>
   <hr>
   <div class="panel panel-default">
   <div class="panel-body">

   <p>
<b>Runs:</b><br>
<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Monday through Saturday, every hour from 9:00 AM to 2:00 PM.
</p>
<p>
<b>Duration:</b> <br>
<span class="glyphicon glyphicon-star" aria-hidden="true"></span> 1 hour
</p>
<p>
<b>Departs From:</b> <br>
<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Tour office in Marina Vallarta.  Exact meeting directions will be provided with your confirmation.
</p>
<p>
<b>Includes:</b><br>
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Professional Bilingual Guide<br>
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 1 Hour of Pure Adreline Boat Ride<br>
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Bottled Water<br>
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lockers<br>
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lifevest<br>
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> All Taxes<br>
</p>

<b>You'll Need:</b><br>
<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Biodegradable Sunscreen<br>
<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Swimsuit<br>
<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Towel<br>
<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Extra Change of Clothes<br>
<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Extra Cash for Tips, Pictures and Videos, etc.<br>
<b>Kids:</b><br>
<span class="glyphicon glyphicon-star" aria-hidden="true"></span>  Kids must be at least 6 years old to ride the jet boat.  Kids same price as adults.

  </div>

</div>
  <hr>
  <div class="panel panel-default">
   <div class="panel-body">


<h5><b>EXTREME JET BOAT - PER PERSON</b></h5><br>

<b>Ship Price</b> <br>
$ 89.00  US<br> <br>

<b>Hotel Price </b> <br>
$ 72.00 US<br><br>

<h5><b>Our Price </b> </h5>
Save 35%  <b> $ 59.00</b>

  </div>

</div>
<hr>






<div class="container">
 <div class="row block-center">
        <div class="col-sm-4" id="form-box">

                <div class="panel panel-primary">
                    <div class="panel-heading" id="panel-heading">
                        <h2 class="titre">Book Now And Save!</h2>
                    </div>
                    <div class="panel-body">
                        <form>
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
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                    <label for="people" class="sr-only"></label>
                                    <select name="people" class="form-control">
  <option>People</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
   <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
</select>


                                    </div>

                            </div>
                                      <div class="form-group has-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                    <label for="time" class="sr-only"></label>
                                    <select name="time" class="form-control">
  <option>Time</option>
  <option>9:00 AM</option>
  <option>10:00 AM</option>
  <option>11:00 AM</option>
  <option>12:00 PM</option>
  <option>1:00 PM</option>
   <option>2:00 PM</option>

</select>


                                    </div>

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

 </div>
</div>

</div>


@stop

@section('sidebar')
Aqui va el texto o codigo que quieras debajo esta imagen
@stop
@section('sidebar2')
Aqui va el texto o codigo que quieras debajo esta segunda imagen
@stop
