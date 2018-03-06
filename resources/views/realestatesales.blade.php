@extends('master')


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
              <br>
              <div>

 <div class="col-md-8">
            <div class="well well-sm">
                <form enctype="multipart/form-data"  method="POST" action="realestatesales" >
                    {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">

                      <div class="form-group">
                        <label for="sel1">To buy / For Rent</label>
                        <select class="form-control" id="type"  name="type">
                          <option>To Buy</option>
                          <option>For Rent</option>
                        </select>
                      </div>

                        <div class="form-group">
                            <label for="name">
                                Seller Name *</label>
                            <input type="text" class="form-control" id="sellername" name="sellername" placeholder="Enter name" required="required" />
                        </div>

                        <div class="form-group">
                            <label for="email">
                                Seller Email *</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>


                        <div class="form-group">
                            <label for="name">
                                Seller phone *</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone"/>
                        </div>


                        <div class="form-group">
<label for="sel1">Category</label>
<div class="checkbox">
<label><input type="checkbox" name="category[]" value="Businesses">Businesses</label>
</div>
<div class="checkbox">
<label><input type="checkbox" name="category[]" value="Commercial">Commercial</label>
</div>
<div class="checkbox">
<label><input type="checkbox" name="category[]" value="Condominiums">Condominiums</label>
</div>
<div class="checkbox">
<label><input type="checkbox" name="category[]" value="Developments">Developments</label>
</div>
<div class="checkbox">
<label><input type="checkbox" name="category[]" value="Houses">Houses</label>
</div>
<div class="checkbox">
<label><input type="checkbox" name="category[]" value="Land">Land</label>
</div>
<div class="checkbox">
<label><input type="checkbox" name="category[]" value="Super Villas">Super Villas</label>
</div>
<div class="checkbox">
<label><input type="checkbox" name="category[]" value="Surrounding areas">Surrounding areas</label>
</div>
</div>


<div class="form-group">
<label for="sel1">Bedrooms</label>
<select class="form-control" id="bedrooms"  name="bedrooms">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>

</select>
</div>


<div class="form-group">
<label for="sel1">Bathrooms</label>
<select class="form-control" id="sel1"   name="bathrooms">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>


</select>
</div>

<div class="form-group">
    <label for="name">
        Asking price (USD):</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Asking price " required="required" />
</div>

<div class="form-group">
    <label for="name">
        House SF</label>
    <input type="text" class="form-control" id="house" name="house" placeholder="House SF" />
</div>

<div class="form-group">
    <label for="name">
        Land SF</label>
    <input type="text" class="form-control" id="land" name="land" placeholder="Land SF" />
</div>

<div class="form-group">
    <label for="name">
        Age:</label>
    <input type="text" class="form-control" id="age" name="age" placeholder="Age"  />
</div>

<div class="form-group">
    <label for="name">
        View:</label>
    <input type="text" class="form-control" id="view" name="view" placeholder="View" />
</div>

<div class="form-group">
    <label for="name">
        Parking:</label>
    <input type="text" class="form-control" id="parking" name="parking" placeholder="Parking"  />
</div>

<div class="form-group">
    <label for="name">
        Description</label>
    <textarea name="description" id="message" class="form-control" rows="9" cols="25" required="required"
        placeholder="Description"></textarea>
</div>



<div class="form-group">
  <label for="sel1">Photos</label>
<input id="input-b1" name="photos[]" type="file" class="file">
</div>
<div class="form-group">
<input id="input-b1" name="photos[]" type="file" class="file">
</div>
<div class="form-group">
<input id="input-b1" name="photos[]" type="file" class="file">
</div>
<div class="form-group">
<input id="input-b1" name="photos[]" type="file" class="file">
</div>
<div class="form-group">
<input id="input-b1" name="photos[]" type="file" class="file">
</div>


<div class="form-group">
    <label for="name">
        Features</label>
    <input type="text" class="form-control" id="name" name="feature1" placeholder="1." />
</div>
<div class="form-group">
    <input type="text" class="form-control" id="name" name="feature2" placeholder="2."  />
</div>
<div class="form-group">
    <input type="text" class="form-control" id="name" name="feature3" placeholder="3."  />
</div>
<div class="form-group">
    <input type="text" class="form-control" id="name" name="feature4" placeholder="4." />
</div>
<div class="form-group">
    <input type="text" class="form-control" id="name" name="feature5" placeholder="5."  />
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
