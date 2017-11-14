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

$BodyBuffer  = "<br><strong>Real State</strong><br><br>";
$BodyBuffer .= "<strong>Message: </strong>".$_GET["message"]."<br>";
$BodyBuffer .= "<strong>Name: </strong>".$_GET["name"]."<br>";
$BodyBuffer .= "<strong>Email: </strong>".$_GET["email"]."<br>";
$BodyBuffer .= "<strong>Phone: </strong>".$_GET["phone"]."<br>";
$BodyBuffer .= "<strong>Type: </strong>".$_GET["forbuyrent"]."<br>";
$BodyBuffer .= "<strong>For Buy: </strong>".$_GET["forbuy"]."<br>";
$BodyBuffer .= "<strong>For Rent: </strong>".$_GET["forrent"]."<br>";
$BodyBuffer .= "<strong>Location: </strong>".$_GET["location"]."<br>";
$BodyBuffer .= "<strong>Location: </strong>".$_GET["Type"]."<br>";
$BodyBuffer .= "<strong>Location: </strong>".$_GET["Bedrooms"]."<br>";
$BodyBuffer .= "<strong>Location: </strong>".$_GET["country"]."<br>";

$mail->Body    = $BodyBuffer;


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

<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
@section('body')


                  <h3><center id="messageTitle" >Contact Us For Any Puerto Vallarta Real Estate Services</center>
               </h3>
              <br>
              <br>
              <p class="text-justify" > Have you ever thought about living in paradise or retiring to Puerto Vallarta. There are great opportunities for investors or retirees to
own or rent vacation homes in areas like Puerto Vallarta, Nuevo Vallarta, Conchas Chinas, Bucerias, La Cruz or Punta de Mita.
It is the perfect time to invest with major tourism projects underway investing billions of dollars in the region, making it an ideal time to buy, before prices go up.
You can buy a house from $ 50,000 U.S Dollars to $ 6,000,000 U.S Dollars. Our brokers will get back to you promptly with option to suit your budget and needs. We are a one stop shop that will connect you through our network of brokers to save you time and trouble. PVguide works only with the most established and trustworthy brokers in every town around the bay, who are recognised for their customer service and english speaking skills. Please fill out our form below for more information.  </p>
            <br>
              <div>

 <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="Phone">
                                Phone</label>
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone"/>
                        </div>
                          <div class="form-group">
  <label for="sel1">Select your country</label>
  <select class="form-control" id="sel1"  name="country">
    <option>United States</option>
    <option>Canada</option>
    <option>England</option>
    <option>France</option>
    <option>Germany</option>

  </select>
</div>
                                                <div class="form-group">
  <label for="sel1">To buy / For Rent</label>
  <select class="form-control" id="sel1"  name="forbuyrent">
    <option>To Buy</option>
    <option>For Rent</option>
 

  </select>
</div>
                        <div class="form-group">
  <label for="sel1">To Buy:</label>
  <select class="form-control" id="sel1"  name="forbuy">
    <option>$ 50,000 U.S</option>
    <option>$ 100,000 U.S</option>
    <option>$ 200,000 U.S</option>
    <option>$ 300,000 U.S</option>
    <option>$ 400,000 U.S</option>
    <option>$ 500,000 U.S</option>
    <option>$ 600,000 U.S</option>
    <option>$ 700,000 U.S</option>
    <option>$ 800,000 U.S</option>
    <option>$ 900,000 U.S</option>
    <option>$ 1,000,000 U.S + </option>

  </select>
</div>
                        <div class="form-group">
  <label for="sel1"> For Rent Per-Month Starting:</label>
  <select class="form-control" id="sel1" name="forrent">
    <option>$ 500 U.S </option>
    <option>$ 1,000 U.S </option>
    <option>$ 1,500 U.S </option>
    <option>$ 2,000 U.S </option>
    <option>$ 2,500 U.S </option>
    <option>$ 3,000 U.S </option>
    <option>$ 3,500 U.S </option>
    <option>$ 4,000 U.S </option>
    <option>$ 4,500 U.S </option>
    <option>$ 5,000 U.S </option>
    <option>$ 5,500 U.S </option>
    <option>$ 6,000 U.S </option>
    <option>$ 6,500 U.S </option>
    <option>$ 7,000 U.S </option>
     <option>$ 7,500 U.S </option>



  </select>
</div>
                        <div class="form-group">
  <label for="sel1"> Location:</label>
  <select class="form-control" id="sel1" name="location">
    <option>Los Muertos Beach</option>
    <option>Romantic Zone</option>
    <option>La Cruz de Huanacaxle</option>
    <option>Hotel Zone</option>
    <option>Gring Gultch</option>
    <option>Garza Blanca</option>
    <option>Fluvial Vallarta</option>
    <option>Flamingos</option>
   <option> Emiliano Zapata</option>
    <option>El Centro</option>
    <option>Conchas Chinas</option>
    <option>Amapas</option>
    <option>Altavista</option>
    <option>5 de Diciembre</option>
    <option>Marina Vallarta</option>
    <option>Mismaloya</option>
    <option>North Shore</option>
    <option>Nuevo Vallarta</option>
   <option>Old Town Vallarta</option>
   <option> Punta de Mita</option>
   <option> Old Town Vallarta</option>
   <option> Nuevo Vallarta</option>
   <option> Sayulita </option>
    <option>Sierra Del Mar</option>
    <option>South Shore</option>




  </select>
</div>
                        <div class="form-group">
  <label for="sel1">Type</label>
  <select class="form-control" id="sel1"  name="Type">
    <option>Condo/ Penthouse</option>
    <option>Villa/ Casa</option>
    <option>Long Term Rental</option>


  </select>
</div>
                        <div class="form-group">
  <label for="sel1">Bedrooms</label>
  <select class="form-control" id="sel1"  name="Bedrooms">
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



                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>



                   
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Info</button>
                    </div>
                </div>
                </form>
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
