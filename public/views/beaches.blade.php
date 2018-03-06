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

                  <h3><center>Map of Puerto Vallarta Beaches</center>
               </h3>
           <div class="col-sm-6 col-lg-12 col-md-12 ">
               <div  class="col-sm-6 col-lg-8 col-md-8 photography graphicdesign ">
                     <div class="gal-detail thumb box-shadow">
                        <img height="10%" width= "10%"src="images/beachesmap.jpg" class="thumb-img" alt="work-thumbnail">
                        </a></div>
                        <br>
                   
                  </div>
                  </div>

 <div class=" col-sm-12 col-md-12">
   <div class=" col-sm-6 col-md-6">
              <br>
                     <div class="form-group">
  <label for="sel1">Complete List of all Beaches In Puerto Vallarta:</label>
  <select class="form-control" onchange="location = this.value;"id="sel1">
    <option>La Caleta</option>
    <option>Chacala</option>
    <option>Hermosa</option>
    <option>Rincon de Guayabitos</option>
    <option>Los Ayala</option>
    <option>Los Venados</option>
    <option>El Atracadero</option>
    <option>Lo de Marcos</option>
    <option>San Pancho</option>
    <option>Sayulita</option>
    <option>Litibu</option>
    <option>MArieta Island</option>
      <option>El Anclote</option>
    <option>Burros</option>
    <option>Destiladeras</option>
    <option>La Manzanilla</option>
    <option>Bucerias</option>
    <option>Flamingos</option>
    <option>Nuevo Vallarta</option>
    <option >Boca de Tomates</option>
    <option>Marina Vallarta</option>
    <option>Playa de Oro</option>
    <option>Los Tules</option>
    <option>Las Glorias</option>
      <option>Tranquila</option>
    <option>Camarones</option>
    <option>Olas Altas</option>
    <option>Los Muertos (Romantic Zone)</option>
    <option>Los Amapas</option>
    <option value="conchaschinas">Conchas Chinas</option>
    <option>Las Estacas</option>
    <option>Los Venados</option>
    <option>El Carrizo</option>
    <option>Punta Negra</option>
    <option>Palmares</option>
    <option>Garza Blanca</option>
      <option>Las Gemelas</option>
    <option>Los Arcos</option>
    <option>Mismaloya</option>
    <option value="Bocadetomatlan">Boca de Tomatlan</option>
    <option>Colomitos</option>
    <option>Las Animas</option>
    <option>Quimixto</option>
    <option>Las Caletas</option>
    <option>Majahuitas</option>
    <option value="ziplining">Yelapa</option>
    <option>Pizota</option>
    <option>Cabo Corrientes</option>
    <option>Mayto</option>
    <option>Tehuamixtle</option>
    <option>Villa del Mar</option>
 
    

  </select>
  <br>
<br>
</div>
</div>

</div>


                  <p class="text-"> 

The main attraction of Vallarta are the beaches which come in all shapes and sizes. From beaches with “activities” to beaches for surfing or hiding away from the world. Amazing Yoga retreats dot the shoreline  south of “Puerto Vallarta downtown”
where the views allow you on occasion to see  and enjoy the frolicking humpback whales and dolphins in the bay, or just watch one of the many beautiful and romantic sunsets we have in Vallarta.

Here is a list of the best beaches in the area, you decide which is best suited to your interests.</p>
               




<div class="fb-comments" data-href="http://pvguide.info/home/beaches" data-numposts="5"></div>
@stop

@section('sidebar')
Aqui va el texto o codigo que quieras debajo esta imagen
@stop
@section('sidebar2')
Aqui va el texto o codigo que quieras debajo esta segunda imagen
@stop

