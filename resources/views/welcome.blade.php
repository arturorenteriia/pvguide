
<!DOCTYPE html>

<html class="" lang="en">
   <head>
      <title>PV Guide</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--/<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
      <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700,inherit,400" rel="stylesheet" type="text/css">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/mycss.css?2">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/myjs.js"></script>
      <style type="text/css">

         body {
         padding-top: 100px;
         }
      </style>
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
  document.getElementById("messageTitle").innerHTML = "Thank you for your enquiry. We will contact you shortly.";
};
    </script>

    <?php
}

}

?>
   </head>

   <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=220203214708588";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      <header>
         <div class="container-fluid full white">

           <div class="col-sm-12" id="nav">
               <div class=" navbar navbar-inverse navbar-fixed-top " data-spy="affix" data-offset-top="100">
                  <div class="container-fluid search">
                     <div class="navbar-header ">
                        <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="" href="welcome"><img class="img-responsive logo" src="pvguide.png" alt="">

                        </a>
                     </div>
                     <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right " aria-labelledby="dropdownMenuDivider">

  <li class=" visible-xs dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
                               <ul class="dropdown-menu">

                                 <li><a href="#"><img src="images/spain.png" >   Español</a>
                                     </li>
                                  <li><a href="#"><img src="images/usa.png" >  English</a>
                                 </li>
                                 <li><a href="#"><img src="images/france.png" >  French</a>
                                 </li>



                              </ul>
                           </li>


                           <li class=" dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                               <ul class="dropdown-menu">

                                 <li><a href="contact">Contact Us</a>
                                  <li><a href="advertise">Advertise With Us</a>
                                 </li>
                                 <li><a href="about">About Us</a>
                                 </li>
                                 <li><a href="recommended">Recommended By Us</a>
                                 </li>
                                 <li><a href="history">History of PV</a>
                                 </li>
                                 <li><a href="safety">Safety</a>
                                 </li>
                                 <li><a href="beaches">Beaches To Visit </a>
                                 </li>
                                 <li><a href="retire">Retire in PV</a>
                                 </li>
                                  <li><a href="whypv">Why PV</a>
                                 </li>
                                  <li><a href="tipping">Tipping</a>
                                 </li>
                                  <li><a href="taxis">Taxis</a>
                                 </li>
                                  <li><a href="drinking">Drinking Water</a>
                                 </li>
                                  <li><a href="speak">Speaking English</a>
                                 </li>
                                  <li><a href="temperature">Temperature Guide</a>
                                 </li>
                                  <li><a href="weddings">Weddings</a>
                                 </li>
                                  <li><a href="driving">Driving In PV </a>
                                 </li>
                                          <li><a href="golf">Golf </a>
                                 </li>

                              </ul>
                           </li>
                           <li class=" hidden-sm dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Top 10 Things <br> To Do <span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                 <li><a href="rentjeep">Rent An Open Top Jeep</a>
                                 </li>
                                 <li><a href="surfing">Surfing</a>
                                 </li>
                                 <li><a href="tequilatours">Tequila Tours</a>
                                 </li>
                                 <li><a href="cookingclass">Cooking Class</a>
                                 </li>
                                 <li><a href="boattours">Boat Tours </a>
                                 </li>
                                 <li><a href="ziplining">Zip Lining  </a>
                                 </li>
                                 <li><a href="pirateship">Pirate Ship</a>
                                 </li>
                                  <li><a href="fishing">Deep Sea Fishing </a>
                                 </li>
                                  <li  class="divider"><a href="#"></a>
                                 </li>
                                 <li  class=""><a href="alltours">More...</a>
                                 </li>

                              </ul>
                           </li>
                            <li class="dropdown bold">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restaurants <br> NightLife <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="restaurants">Restaurants</a>
                                 </li>
                                 <li><a href="sportsbars">Sports Bars</a>
                                 </li>
                                 <li><a href="clubs">NightLife - Clubs</a>
                                 </li>
                                 <li><a href="stripclubs">Strip Clubs</a>
                                 </li>
                                  <li><a href="gaypv">Gay Travel Guide</a>
                                 </li>


                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tours <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="discount">Discount Tours</a>
                                 </li>
                                 <li><a href="rentjeep">Open Top Jeep Rental</a>
                                 </li>
                                 <li><a href="personaldriver">Airport Transfers/ Personal Driver Tours</a>
                                 </li>
                                 <li><a href="tequilatours">Tequila Tours</a>
                                 </li>
                                 <li><a href="surfing">Surfing</a>
                                 </li>
                                 <li><a href="ziplining">Canopy Tours / zip lining</a>
                                 </li>
                                 <li><a href="jetboat">Jet Boat ( Tsunami )</a>
                                 </li>
                                 <li><a href="yachtcharter">Yacht Charter</a>
                                 </li>
                                 <li><a href="sunsetcruises">Sunset Cruises</a>
                                 </li>
                                 <li><a href="pirateship">Pirate Boat</a>
                                 </li>
                                 <li  class="divider"><a href="#"></a>
                                 </li>
                                 <li><a href="alltours">More Tours...</a>
                                 </li>


                              </ul>
                           </li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotels and <br> Flights <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="hotels">Hotels</a>
                                 </li>
                                 <li><a href="flights">Flights</a>
                                 </li>

                              </ul>
                           </li>

                           </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Real <br> Estate <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="realestate">Buy A Home</a>
                                 </li>
                                 <li><a href="realestate">Rent A Home</a>
                                 </li>
                                 <li><a href="realestate">Property Management</a>
                                 </li>
                                 <li><a href="realestate">Property Maintenance</a>
                                 </li>
                                 <li><a href="realestate">Property Lawyers</a>
                                 </li>
                                 <li><a href="realestate">List Property For Sale</a>
                                 </li>
                                 <li><a href="realestate">List Property For Rent</a>
                                 </li>

                                 </li>

                              </ul>
                                       <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Medical <br>Tourism <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="cosmeticsurgeon">Cosmetic Surgeon</a>
                                 </li>
                                 <li><a href="facelift">Facelift</a>
                                 </li>
                                 <li><a href="breastimplants">Breast Implants</a>
                                 </li>
                                 <li><a href="liposuction">Liposuction</a>
                                 </li>
                                 <li><a href="facialfillers">Facial Fillers</a>
                                 </li>
                                 <li><a href="nosejob">Nose Job</a>
                                 </li>
                                 <li><a href="jointreplacement">Joint Replacement</a>
                                 </li>
                                 <li><a href="fullmedical">Full Medical Check Up</a>
                                 </li>
                                 <li><a href="obgyn">Ob-Gyn </a>
                                 </li>
                                 <li  class="divider"><a href="#"></a>
                                 </li>
                                 <li><a href="medicaltourism">More...</a>
                                 </li>

                                 </li>



                              </ul>
                           </li>
                           <li class="visible-lg visible-md"><a href="golf">Golf</a>
                           </li>



                        </ul>
                     </div>
                     <!--/.nav-collapse -->
                  </div>
                  <!--/.contatiner -->
               </div>
            </div>
            <div class="container col-xs-12 col-sm-8 col-md-9 ">
               <h2 style="color: white">
                  <center><b>THE COMPLETE GUIDE TO PUERTO VALLARTA</b></center>
               </h2>
               <div class="hidden-xs col-sm-6 col-lg-4 col-md-4 photography graphicdesign">
                     <div class="gal-detail thumb box-shadow">
                        <a href="winatrip" class="image-popup" title="Screenshot-10">
                        <img src="images/couple.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                         <h4 class="text-center " style="color: black">Win a 7 day vacation<br>for 2 to mexico </h4><br><p class="text-center text" >In order to qualify please verify your email</p>
                        <div class="ga-border"></div>
                       <CENTER><a href="winatrip" class="btn btn-primary" role="button">ENTER</a>   </CENTER></div>
                  </div>

           <div class="hidden-xs row pad">

<img src="images/lg1.png"  WIDTH=80 HEIGHT=80  >
<img src="images/lg2.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg3.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg4.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg5.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg6.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg7.png"   WIDTH=80 HEIGHT=80 >
</div>

            </div>




            <div class="container col-xs-12 col-sm-4 col-md-3 ">
               <br>
               <center>


                     <div class="hidden-xs gal-detail">



                       <a href=""><p class=" white text-muted text-center"><small><img src="images/spain.png" >  Español</small></p></a>
                        <div class="ga-border"></div>
                        <a href=""><p class="white text-muted text-center"><small><img src="images/usa.png" >  English</small></p></a>
                        <div class="ga-border"></div>
                        <a href=""><p class="white text-muted text-center"><small><img src="images/france.png" >  French</small></p></a>
                     </div>

                  <br>
                  <div  class="hidden-xs" id="cont_a728905c01e19813f6f161e49b150de3">
                     <script type="text/javascript" async src="https://www.theweather.com/wid_loader/a728905c01e19813f6f161e49b150de3"></script>

                  </div>
                  <br>


          
                  <!-- Currency Converter Script - EXCHANGERATEWIDGET.COM -->
<div class="hidden-xs" style="width:198px;border:1px solid #55A516;"><div style="text-align:center;background-color:#0560E8;width:100%;font-size:13px;font-weight:bold;height:18px;padding-top:2px;"><a href="https://www.exchangeratewidget.com/" style="color:#FFFFFF;text-decoration:none;" rel="nofollow">Currency Converter</a></div><script type="text/javascript" src="//www.exchangeratewidget.com/converter.php?l=en&f=USD&t=MXN&a=1&d=F0F0F0&n=FFFFFF&o=000000&v=1"></script></div>
<!-- End of Currency Converter Script -->
                  </div>
               </center>
            </div>

         </div>
         </div>
      </header>

      <div class="container ">

         <div class="row">

            <div class=" col-sm-9 col-md-9">
              <br>
                     <div class="form-group">
  <label for="sel1">Search For:</label>
  <select class="form-control" id="sel1">
    <option>When to go</option>
    <option>Where to go</option>
    <option>Events</option>
    <option>History</option>
    <option>Nightlife</option>
    <option>Dining</option>
    <option>Puerto Vallarta Hotels</option>
    <option>Airport Hotels</option>
    <option>Cheap Hotels</option>
    <option>Luxury Hotels</option>
    <option>Downtown Hotels</option>
    <option>Nuevo Vallarta Hotels</option>
      <option>Sayulita Hotels</option>
    <option>Yelapa Hotels</option>
    <option>Melia Hotel</option>
    <option>Holiday Inn</option>
    <option>Fiesta Americana</option>
    <option>Westin</option>
    <option>Villa del Palmar</option>
    <option>Palladium</option>
    <option>Royal Decameron</option>
    <option>Banderas Bay</option>
    <option>Beaches</option>
    <option>Caletas</option>
      <option>Marina</option>
    <option>Mismaloya</option>
    <option>Malecon</option>
    <option>Nuevo Vallarta</option>
    <option>Hyatt Ziva</option>
    <option>Old Town</option>
    <option>Punta de Mita</option>
    <option>Sayulita</option>
    <option>Conchas Chinas</option>
    <option>Riviera Nayarit</option>
    <option>Airport</option>
    <option>Airport Shuttle</option>
      <option>Condos</option>
    <option>Cruises</option>
    <option>Fishing</option>
    <option>Spring Break</option>
    <option>Tours</option>
    <option>Vacation Rentals</option>
    <option>Villas</option>
    <option>Weddings & Honeymoons</option>
    <option>Horse Riding</option>
    <option>Zip Lining</option>
    <option>Boat Tours</option>
    <option>Yoga Retreats</option>
    <option>Maps Of Vallarta</option>
    <option>Romantic Zone</option>
    <option>Safety</option>
    <option>Work In Vallarta</option>
    <option>Real Estate</option>
    <option>Vidanta</option>
    <option>Cirque du Soleil</option>
    <option>Skydiving</option>
    

  </select>
</div>
               <div class="visible-xs">
                  <br>
                  <center>

                   <div class="visible-xs col-sm-6 col-lg-4 col-md-4 photography graphicdesign">
                     <div class="gal-detail thumb box-shadow">
                        <a href="winatrip" class="image-popup" title="Screenshot-10">
                        <img src="images/couple.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                         <h4 class="text-center "style="color: black">Win a 7 Day Vacation <br> For 2 To Mexico </h4><br><p class="text-center text" >In order to qualify please verify your email</p>
                        <div class="ga-border"></div>
                       <CENTER><a href="winatrip" class="btn btn-primary" role="button">ENTER</a>   </CENTER></div>
                  </div>
                <div class="visible-xs container-fluid  full4">
      <p class="white " style=" font-size: 25px;">Reasons To Visit <br>Puerto Vallarta</p>
<img src="images/lg1.png"  WIDTH=80 HEIGHT=80  >
<img src="images/lg2.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg3.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg4.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg5.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg6.png"   WIDTH=80 HEIGHT=80 >
<img src="images/lg7.png"   WIDTH=80 HEIGHT=80 >
</div>
                    <br>
                    <br>
<!-- Currency Converter Script - EXCHANGERATEWIDGET.COM -->
<div style="width:198px;border:1px solid #55A516;"><div style="text-align:center;background-color:#0560E8;width:100%;font-size:13px;font-weight:bold;height:18px;padding-top:2px;"><a href="https://www.exchangeratewidget.com/" style="color:#FFFFFF;text-decoration:none;" rel="nofollow">Currency Converter</a></div><script type="text/javascript" src="//www.exchangeratewidget.com/converter.php?l=en&f=USD&t=MXN&a=1&d=F0F0F0&n=FFFFFF&o=000000&v=1"></script></div>
<!-- End of Currency Converter Script -->
                  </center>
                  <br>
                  <div id="cont_70a5eb3cfe7a4ee39d93026d4d8db74d">
                     <script type="text/javascript" async src="https://www.theweather.com/wid_loader/70a5eb3cfe7a4ee39d93026d4d8db74d"></script>
                  </div>
               </div>

               <h1>
                  <center>Puerto Vallarta</center>
               </h1>
               <div class="fb-share-button" aling="left" data-href="http://pvguide.info/home/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpvguide.info%2Fhome%2F&amp;src=sdkpreparse">Compartir</a></div>
               <br>
               <br>
               <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-hashtags="Pvguide">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
               <h3>
                  <center>Welcome to Paradise</center>
               </h3>
               <p class="text-justify">Puerto Vallarta has been a top tourist destination for decades. It's popularity grew with Hollywood stars using Vallarta as a way to escape the limelight and made popular by Richard Burton and Elizabeth Taylor, who after filming here decided to build vacation homes in PV. Banderas Bay has  100 kilometers of beautiful coastline and beaches that are surrounded by the Sierra Madre Mountains with Puerto Vallarta nestled on its shores. PV has everything on offer for someone seeking adventure and fun including amazing beaches, luxurious hotels and exciting nightlife which continues to draw over 1.5 million visitors every year.</p>
               <p class="text-justify">The anticipated opening of the first Cirque du Soleil  interactive experience entertainment park in the world which is estimated to cost
 $ 1.3 billion dollars in Nuevo Vallarta, fifteen minutes north of the airport, will increase tourism to over two and a half million visitors within a few years.</p>
               <p class="text-justify">Take some time to do some sightseeing in this vibrant city, it is perfectly safe and was voted by readers of Conde Naste travel magazine as one of the friendliest and safest cities  in the world. Bahía de Banderas (Banderas Bay) is also an important breeding and birthing ground for the humpback whale which typically starts around November till around March, with babies born around January being the highlight of the humpback whale watching season. </p>
               <p class="text-justify">Some popular activities for the adventurous are visiting a tequila distillery , whale watching , deep sea fishing, diving , snorkeling, canopy zip lining in the Sierra Madre Mountains, riding ATVs through rivers and forests, horseback riding, boat cruises, swimming with dolphins, and hiking.There is something for every member of the family to do if you tire of sitting on a beach.
The mountains, rivers and coastlines of Puerto Vallarta offer travelers the opportunity to observe and interact with an amazing variety of wildlife. At least five species of sea turtles can be found here.</p>
               <p class="text-justify">If you are just looking for relaxing fun in the sun, the sandy beaches of Puerto Vallarta are the ideal spot to relax and enjoy spending time in a tropical paradise.
The residents of Puerto Vallarta  are famous for their friendly attitude towards visitors.</p>
               <hr>


                  <div class="embed-responsive embed-responsive-4by3">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Us_QWh3mUtA"></iframe>
</div>
<div class="hidden-xs">
<br>
<br>
<ins class="bookingaff" data-aid="1308147" data-target_aid="1304705" data-prod="dfl2" data-width="100%" data-height="auto" data-lang="es" data-dest_id="-1690444" data-dest_type="city" data-df_num_properties="5">
    <!-- Anything inside will go away once widget is loaded. -->
    <a href="//www.booking.com?aid=1304705">Booking.com</a>
</ins>
<script type="text/javascript">
    (function(d, sc, u) {
      var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];
      s.type = 'text/javascript';
      s.async = true;
      s.src = u + '?v=' + (+new Date());
      p.parentNode.insertBefore(s,p);
      })(document, 'script', '//aff.bstatic.com/static/affiliate_base/js/flexiproduct.js');
</script>
</div>
<br>
                  <br>
<ins class="visible-xs bookingaff" data-aid="1308147" data-target_aid="1304705" data-prod="dfl2" data-width="100%" data-height="auto" data-dest_id="-1690444" data-dest_type="city" data-df_num_properties="5">
    <!-- Anything inside will go away once widget is loaded. -->
    <a href="//www.booking.com?aid=1304705">Booking.com</a>
</ins>
<script type="text/javascript">
    (function(d, sc, u) {
      var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];
      s.type = 'text/javascript';
      s.async = true;
      s.src = u + '?v=' + (+new Date());
      p.parentNode.insertBefore(s,p);
      })(document, 'script', '//aff.bstatic.com/static/affiliate_base/js/flexiproduct.js');
</script>
            <div class="visible-xs">
                <br>
  <br>
            <center><a class="" href="#"><img class="img-responsive logo" src="images/ad1.png" alt=""></a></center>
         </div>

               <h2>
                  <center>Our recommended tours</center>
               </h2>
               <hr>
               <div class="visible-xs panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                           Rythms Of The Night
                           </a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body"><center>
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <div class="thumbnail">
                                 <img src="images/ritmos2.jpg" alt="...">
                                 <div class="caption">
                                    <h3>Rythms Of The Night</h3>
                                    <p><a href="rythms" class="btn btn-primary" role="button">See More</a>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Las Caletas
                           </a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <center>
                              <div class="thumbnail">
                                 <img src="images/caletas.jpg" alt="...">
                                 <div class="caption">
                                    <h3>Las Caletas</h3>
                                    <p><a href="caletas" class="btn btn-primary" role="button">See More</a>
                                 </div>
                              </div>
                              </center>
                           </div>
                     </div>
                  </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           San Sebastian
                           </a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <center>
                              <div class="thumbnail">
                                 <img src="images/sansebastian.jpg" alt="...">
                                 <div class="caption">
                                    <h3>San Sebastian</h3>
                                    <p><a href="sansebastian" class="btn btn-primary" role="button">See More</a>
                                 </div>
                              </div>
                              </center>
                           </div>
                     </div>
                     </div>
                  </div>
                   <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                           Canopy River
                           </a>
                        </h4>
                     </div>
                     <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                           <div class="col-xs-12 col-sm-3 col-md-3">
                              <center>
                              <div class="thumbnail">
                                 <img src="images/zipline.jpg" alt="...">
                                 <div class="caption">
                                    <h3>Zip Line</h3>
                                    <p><a href="ziplining" class="btn btn-primary" role="button">See More</a>
                                 </div>
                              </div>
                              </center>
                           </div>
                     </div>
                     </div>
                  </div>
               </div>



               <div class="hidden-xs  ">
                  <div class="row">
                     <center>
                     <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="thumbnail">
                           <img src="images/ritmos.jpg" alt="...">
                           <div class="caption">
                              <h5>Rythms Of The Night</h5>
                              <p><a href="rythms" class="btn btn-primary" role="button">See More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="thumbnail">
                           <img src="images/caletas.jpg" alt="...">
                           <div class="caption">
                              <h5>Las Caletas</h5>
                              <p><a href="caletas" class="btn btn-primary" role="button">See More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="thumbnail">
                           <img src="images/sansebastian.jpg" alt="...">
                           <div class="caption">
                              <h5>San Sebastian</h5>
                              <p><a href="sansebastian" class="btn btn-primary" role="button">See More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="thumbnail">
                           <img src="images/zipline.jpg" alt="...">
                           <div class="caption">
                              <h5>Zip Line</h5>
                              <p><a href="ziplining" class="btn btn-primary" role="button">See More</a>
                           </div>
                        </div>
                     </div>
                        </center>
                  </div>
               </div>
               <div class="visible-xs red">
               <center><h3>Book Your Airline Ticket Now</h3></center>
                <br>
<script charset="utf-8" src="//www.travelpayouts.com/widgets/6725147d1e32d2dbc0c20030fcdd44bf.js?v=1063" async></script>
               </div>
               <hr>
               <h2>
                  <center>Amazing Things To Do</center>
               </h2>
               <hr>
               <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                     <div class="item active">
                        <img src="images/snorkel.jpg" alt="..." class="img-responsive">
                        <div class="carousel-caption">
                           ...
                        </div>
                     </div>
                     <div class="item">
                        <img src="images/pier2.jpg" alt="...">
                        <div class="carousel-caption">
                           ...
                        </div>
                     </div>
                          <div class="item">
                        <img src="images/casasayulita.jpg" alt="...">
                        <div class="carousel-caption">
                           ...
                        </div>
                     </div>
                     <div class="item">
                        <img src="images/playaescondida.jpg" alt="...">
                        <div class="carousel-caption">
                           ...
                        </div>

                     </div>
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class=" icon-prev" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class=" icon-next" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
               <div class="page-header">
                  <h3> Find lots of activities, restaurants, beaches and much more...</h3>
               </div>

               <div class="row grid-divider">
                  <div class="col-sm-4">
                     <div class="col-padding">
                        <h3>Beaches</h3>
                        <p class="text-justify">art of the beauty and fun of traveling to a new place is having the opportunity to enjoy what the local culture has to offer.
Vallarta is unique in that one of the main attractions are the beaches, which are different all around the bay. Crystal blue calm waters and soft powdery sand, to beaches where you can learn to surf as the waves are perfect for surfing with an english speaking surf coach or trek through the forest to a hidden beach. Most have activities from Jet Skiing, Parasailing, Snorkeling to a relaxing massage on the beach. If you are lucky, you may have a ringside view of frolicking humpback whales and dolphins in the bay, from the beach, during the winter months which are November through to March. Take a late night beach stroll where you might be pleasantly surprised to see sea turtles burying their eggs. Meditate at an amazing yoga retreat tucked away in the Sierra Madre Mountains like a hidden gem or listen to the soothing, relaxing sound of the waves. Just enjoy one of the many beautiful and romantic sunsets that will take your breath away. Take a few minutes to just soak it all up and enjoy the peace, tranquility and beauty of this truly magical place and see for yourself why Puerto Vallarta has been voted as one of the top travel destination in the world by travel and leisure magazine.</p>

<a href="beaches" class="btn btn-primary" role="button">See More Beaches</a>
<br>
<br>
  <a href="tours" class="btn btn-primary" role="button">See More Tours and Activities</a>



                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="col-padding">
                        <h3>Gastronomy</h3>
                        <p class="text-justify">Puerto Vallarta has an excellent variety of restaurants with uniquely innovative chefs.There are restaurants that cater to every taste from  Mexican, Chinese, Italian, German, Fast Food, Street Food, to Gourmet Dining. Every day of the year Puerto Vallarta seduces people with the smell of  cooked mexican food on street stalls.
November is the highlight for all the restaurants in PV as they get to showcase their creations during the International Gourmet Festival. For more information check out our selection of handpicked restaurants in every category chosen for their quality and service.</p>

<a href="restaurants" class="btn btn-primary" role="button">See More Restaurants</a>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="col-padding">
                        <h3>Nightlife</h3>
                        <p class="text-justify">The nightlife in Puerto Vallarta is varied, providing you
with everything from nightclubs,live music,cuban dance clubs to strip bars. Sip a margarita at one of cliffside terrace restaurants while listening to live music and watch the spectacular sunsets Vallarta is famous for. Share a twilight sailboat cruise with cocktails around the bay, or a few cold beers at a boisterous bars. Puerto Vallarta offers a great variety of options that will impress you, day or night.
There are many clubs, bars and restaurants that you can enjoy! Check them out!</p>

 <a href="nightlife" class="btn btn-primary" role="button">See More Nightlife</a>
                     </div>
                  </div>
               </div>
               <br>
            <div class="visible-xs">
            <a class="" href="#"><img class="img-responsive logo" src="images/ad2.jpg" alt=""></a>
         </div>

               <div class="portfolioContainer">
                  <div class="row">
                  <div class="col-sm-6 col-lg-4 col-md-4 photography graphicdesign">
                     <div class="gal-detail thumb box-shadow">
                        <a href="colomitos" class="image-popup" title="Screenshot-10">
                        <img src="images/colomitos.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4 class="text-center">Colomitos Beach</h4>
                        <div class="ga-border"></div>
                        <a href="colomitos"><p class="text-muted text-center"><small>See more</small></p></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 col-md-4 photography graphicdesign">
                     <div class="gal-detail thumb box-shadow">
                        <a href="cafedesartistes" class="image-popup" title="Screenshot-10">
                        <img src="images/cafedesartistes.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4 class="text-center">Cafe Des Artistes</h4>
                        <div class="ga-border"></div>
                        <a href="cafedesartistes"><p class="text-muted text-center"><small>See more</small></p></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 col-md-4 photography graphicdesign">
                     <div class="gal-detail thumb box-shadow">
                        <a href="lasanta" class="image-popup" title="Screenshot-10">
                        <img src="images/lasanta.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4 class="text-center">La Santa</h4>
                        <div class="ga-border"></div>
                        <a href="lasanta"><p class="text-muted text-center"><small>See more</small></p></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 col-md-4 photography graphicdesign">
                     <div class="gal-detail thumb box-shadow">
                        <a href="laleche" class="image-popup" title="Screenshot-10">
                        <img src="images/laleche.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4 class="text-center">La Leche</h4>
                        <div class="ga-border"></div>
                        <a href="laleche"><p class="text-muted text-center"><small>See more</small></p></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 col-md-4 graphicdesign photography">
                     <div class="gal-detail thumb box-shadow">
                        <a href="fishing" class="image-popup" title="Screenshot-11">
                        <img src="images/pesca.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4 class="text-center">Go to Fish</h4>
                        <div class="ga-border"></div>
                       <a href="fishing"> <p class="text-muted text-center"><small>See more</small></p></a>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 col-md-4 webdesign graphicdesign illustrator">
                     <div class="gal-detail thumb box-shadow">
                        <a href="marietas" class="image-popup" title="Screenshot-12">
                        <img src="images/islasmarietas.jpg" class="thumb-img" alt="work-thumbnail">
                        </a>
                        <h4 class="text-center">Las Marietas</h4>
                        <div class="ga-border"></div>
                        <a href="marietas"><p class="text-muted text-center"><small>See more</small></p></a>
                     </div>
                  </div>
               </div>
            </div>


            <div style="padding-top: 50px">
               <div class"container">
                <div class="row">
        <div class="col-md-12 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <a href="hotels"><img class="lib-img-show" src="images/playa.jpg"></a>
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                Hotels in Puerto Vallarta
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc ">
                               <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita incidunt
                                 rerum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita
                                 incidunt rerum..</p>
                                  <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita incidunt
                                 rerum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita
                                 incidunt rerum..</p> </div>
                                 <br>
                                 <a href="hotels"><div align="center"> <p> See More </p> </div></a>


                        </div>

                    </div>
                </div>
            </div>
        </div>

</div>



<div class="page-header">
       <center> <h1 id="timeline">Some More Things To Do</h1></center>
    </div>
    <ul class="timeline">
        <li>
          <div class="timeline-badge warning"><i class="glyphicon "></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
             <a href="golf"><center><h2 class="timeline-title">Golf</h2></a>

            </div>
            <div class="timeline-body">
              <p class="text-justify" > Experience golf in Puerto Vallarta among lush tropical greens, sprawling palm trees, meandering fairways and an epic view of the Sierra Madre Mountains and Pacific Ocean. The experts agree that you can find the best championship golf courses in Vallarta, one of the most beautiful places in the world.</P>
               <br>
            <a href="golf"><img class="media-object img-rounded img-responsive" src="images/golf.jpg"></a>
             </center>
            </div>

          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon "></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
               <center>
              <a href="medicaltourism"><h2 class="timeline-title">Medical Tourism</h2></a>
            </div>
            <div class="timeline-body">
              <p class="text-justify" >In Mexico, Puerto Vallarta is the tourist destination which is best positioned on a national level for medical tourism. The cornerstone and San Javier Hospital are having at its disposal hospitals with advanced infrastructure for high level procedures.</p>
            <br>
            <a href="medicaltourism"><img class="media-object img-rounded img-responsive" src="images/doctor.jpg"></a>
             </center></div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon "></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <a href="realestate"><center><h2 class="timeline-title">Real Estate</h2></a>
            </div>
            <div class="timeline-body">
               <p class="text-justify" > Have you ever thought about living in paradise or retiring to Puerto Vallarta. There are great opportunities for investors or retirees to
own or rent vacation homes in areas like Puerto Vallarta, Nuevo Vallarta, Conchas Chinas, Bucerias, La Cruz or Punta de Mita.
It is the perfect time to invest with major tourism projects underway investing billions of dollars in the region, making it an ideal time to buy, before prices go up.
You can buy a house from $ 50,000 U.S Dollars to $ 6,000,000 U.S Dollars. Our brokers will get back to you promptly with option to suit your budget and needs. We are a one stop shop that will connect you through our network of brokers to save you time and trouble. PVguide works only with the most established and trustworthy brokers in every town around the bay, who are recognised for their customer service and english speaking skills. Please fill out our form below for more information.  </p>
            <br>
             <a href="realestate"><img class="media-object img-rounded img-responsive" src="images/forsale2.jpg"></a>
             </center></div>
          </div>
        </li>




    </ul>


<div>




</div>
<h3><center id="messageTitle" >Contact Us For Any Puerto Vallarta Real Estate Services</center>
               </h3>
              <br>
              <br>

            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-9">
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

                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Info</button>
                    </div>
                </div>
                </form>
            </div>
     
        <br>
       <div class="visible-xs">
            <a class="" href="#"><img class="img-responsive logo" src="images/ad3.png" alt=""></a>
         </div>

<div class="row">
               <h2>
                  <center>News around the world</center>
               </h2>
               <hr>
               <a href="#" class="list-group-item">
                  <div class="media col-sm-3 col-md-3">
                     <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive" src="images/rusia.jpg">
                     </figure>
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <h4 class="list-group-item-heading spacer-10"> Russia </h4>
                     <p class="list-group-item-text"> Russia says it may have killed ISIS leader Abu Bakr al-Baghdadi</p>
                  </div>
                  <div class="col-sm-3 col-md-3 text-center">
                     <br>
                     <br>
                     <button type="button" class="btn btn-primary">See more</button>
                  </div>
               </a>
               <hr>
               <a href="#" class="list-group-item">
                  <div class="media col-sm-3 col-md-3">
                     <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive" src="images/china.jpg">
                     </figure>
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <h4 class="list-group-item-heading spacer-10"> China </h4>
                     <p class="list-group-item-text"> China hits milestone in race to create hack-proof communications </p>
                  </div>
                  <div class="col-sm-3 col-md-3 text-center">
                     <br>
                     <br>
                     <button type="button" class="btn btn-primary">See more</button>
                  </div>
                  
               </a>
               <hr>
               <a href="uber" class="list-group-item">
                  <div class="media  col-sm-3 col-md-3">
                     <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive" src="images/uber1.jpeg">
                     </figure>
                  </div>
                  <div class=" col-sm-6 col-md-6">
                     <h4 class="list-group-item-heading spacer-10">Uber</h4>
                     <p class="list-group-item-text">Uber Finally Comes To  Puerto Vallarta.</div>
                  <div class="col-sm-3 col-md-3 text-center">
                     <br>
                     <br>
                     <button type="button" class="btn btn-primary">See more</button>
                  </div>
               </a>
               <hr>
               <center>Use of this site indicates your consent to the terms of use.</center>
               <hr>
            </div>

         </div>
</div>
             <div class=" hidden-xs col-sx-6 col-sm-3 col-md-3 ">
               <hr>
               <ins class="bookingaff" data-aid="1308147" data-target_aid="1304705" data-prod="dfl2" data-width="100%" data-height="auto" data-dest_id="-1690444" data-dest_type="city" data-df_num_properties="5">
    <!-- Anything inside will go away once widget is loaded. -->
    <a href="//www.booking.com?aid=1304705">Booking.com</a>
</ins>
<script type="text/javascript">
    (function(d, sc, u) {
      var s = d.createElement(sc), p = d.getElementsByTagName(sc)[0];
      s.type = 'text/javascript';
      s.async = true;
      s.src = u + '?v=' + (+new Date());
      p.parentNode.insertBefore(s,p);
      })(document, 'script', '//aff.bstatic.com/static/affiliate_base/js/flexiproduct.js');
</script>
<br>
<br>
<script charset="utf-8" src="//www.travelpayouts.com/widgets/6725147d1e32d2dbc0c20030fcdd44bf.js?v=1008" async></script>
               <script src="https://www.jscache.com/wejs?wtype=tcdestre&amp;uniq=145&amp;locationId=150793&amp;lang=es_MX&amp;year=2017&amp;display_version=2"></script>
               <hr>
               <a class="" href="advertise"><img class="img-responsive logo" src="images/ad1.png" alt=""></a>
                <br>
               <br>
               <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
               <a class="" href="advertise"><img class="img-responsive logo" src="images/ad2.jpg" alt=""></a>
               <br>
               <br>

               <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
            </div>

      </div>
      </div>
      <div class="container-fluid full4">
         <div class="row">
            <br>
            <!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


            <div class="col-xs-3 col-md-3 ">
                        <a  class="links" href="">Español </a>
                    <br>
                    <a  class="links" href="">English</a>
                    <br>
                    <a  class="links" href="">French </a>
                    <br>
            </div>

            <div class="col-xs-3 col-md-3 ">
                   <a  class="links" href="welcome">Home </a>
                    <br>
                    <a class="links" href="tours">Tours</a>
                    <br>
                    <a class="links" href="alltours">Activities</a>
                    <br>
                    <a class="links" href="realestate">Real Estate</a>
                    <br>
                    <a class="links" href="gaypv">Gay PV</a>
                    <br>
                    <a class="links" href="golf">Golf</a>
                    <br>
                    <a class="links" href="clubs">Clubs</a>
                    <br>
                    <br>

            </div>
            <div class="col-xs-3 col-md-3 ">
                    <a  class="links" href="about">About us</a>
                    <br>
                    <a class="links" href="terms">Terms Of Use</a>
                    <br>
                    <a class="links" href="privacy">Privacy Policy</a>
                    <br>
                    <a class="links" href="map">Map</a>

            </div>
           <div class="col-xs-3 col-md-3 ">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss " title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>

            </div>
         </div>
      </div>
   </body>
</html>
