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

   
               <center> <h3>Boca de tomatlan Beach</h3></center>
               <div class="col-sm-6 col-lg-12 col-md-12 photography graphicdesign "style="float: left;">
                     <div class="gal-detail thumb box-shadow">
                        <img src="images/bocadetomatlan.jpg" class="thumb-img" alt="work-thumbnail">
                        </a></div>
                        <br>
                     <br>
                  </div>

                  <p class="text-"> 
At the southern end of the bay are a variety of beaches. One of them is Boca de Tomatlan,  
the last ocean inlet on the highway heading out of town  (15 mins on the coastal road ), 
where you can relax and enjoy the seafood restaurants or catch water taxis which will take you to Yelapa Beach, Quimixto Beach & Beach Club , Las Animas which are all a ten minutes ride by water taxi from Boca Beach. The cost should be no more than 60 Pesos although it is over 250 Pesos to the same beaches from downtown PV. 
</p><p class="text-"> 
When you put them all together you have a great opportunity to sample different beaches all in a days hike or boat ride for the day visitor. Adventurous visitors can spend the day hiking alongside the shoreline and through the jungle from Boca de Tomatlan Beach all the way to Las Animas Beach ( one hour-hike) or Yelapa (two hour hike). Along the way you will encounter a further two smaller secluded beaches, Colomitos Beach, 
having the well known restaurant called “Ocean Grill” on the cliffs edge, where you can enjoy the very best of Puerto Vallarta’s natural beauty and food. If you do not feel like using up all your energy hiking, you can ask the boats to drop you to Colomitos Beach and Ocean Grill Restaurant, a five minute boat ride from Boca De Tomatlan Beach. Further along you will come to Las Animas Beach</p>
            <br>
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

