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

   </head>
   <body>

      <header>
         <div class="container-fluid fullhotels white">
<center>
          @yield('body')
          </center>
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
                                   <li><a href="golf">Golf</a>

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

            </div>

            <div class="container col-xs-12 col-sm-4 col-md-3 ">

            </div>

      </header>

@yield('navbar')



      <div class="container-fluid full4">
         <div class="row">

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
@yield('footer')
