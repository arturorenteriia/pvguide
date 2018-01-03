@extends('master')
@section('body')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=220203214708588";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

   
               <center> <h3>Conchas Chinas    Beach - For Romantics</h3></center>
               <div class="col-sm-6 col-lg-12 col-md-12 photography graphicdesign "style="float: left;">
                     <div class="gal-detail thumb box-shadow">
                        <img src="images/bocadetomatlan.jpg" class="thumb-img" alt="work-thumbnail">
                        </a></div>
                        <br>
                     <br>
                  </div>

                  <p class="text-justify"> 
Conchas Chinas Beach is sometimes where people have their dream weddings. The golden sand, clear blue waters and amazing rock formations of Playa Conchas Chinas creates the ideal backdrop for a romantic day or important occasion at the beach.
</p><p class="text-justify"> 
Soaking in the natural pools made of rock formations or strolling hand in hand at sunset you get to explore the many facets of the beach, or simply lounge and soak up the warmth of the Puerto Vallarta sun. Certainly one of the best beaches in Puerto Vallarta for romantics.         <br>
</p>
 <a href="beaches"> <label >Clic here to see the complete list of all beaches in Puerto Vallarta</label></a>
<br>
<br>
             <div class="fb-comments" data-href="http://pvguide.info/home/beaches" data-numposts="5"></div>
@stop

@section('sidebar')
Aqui va el texto o codigo que quieras debajo esta imagen
@stop
@section('sidebar2')
Aqui va el texto o codigo que quieras debajo esta segunda imagen
@stop