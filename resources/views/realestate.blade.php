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


                  <h3><center>Contact Us For Your Puerto Vallarta Real Estate Services</center>
               </h3>
              <br>
              <br>
              <div>

 <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="Phone">
                                Phone</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter Phone" required="required" />
                        </div>
                          <div class="form-group">
                            <label for="Buy ">
                                Type</label><br>
                          <input type="radio" name="gender" value="male" checked> Buy
  <input type="radio" name="gender" value="female"> Rent<br>

                        </div>
                        <div class="form-group">
  <label for="sel1">For Buy:</label>
  <select class="form-control" id="sel1">
    <option>Starting 50,000</option>
    <option>100,000</option>
    <option>200,000</option>
    <option>300,000</option>
    <option>Up to 500,000</option>
 
  </select>
</div>
                        <div class="form-group">
  <label for="sel1"> For Rent
Starting at:</label>
  <select class="form-control" id="sel1">
    <option>500</option>
    <option>1,000</option>
    <option>1,500</option>
    <option>2,000</option>
    <option>2,500</option>
    <option>3,000</option>
    <option>3,500</option>
    <option>4,000</option>
    <option>4,500</option>
    <option>5,000</option>
    <option>5,500</option>
    <option>6,000</option>
    <option>6,500</option>
    <option>7,000</option>
     <option>7,500</option>


 
  </select>
</div>
                        <div class="form-group">
  <label for="sel1"> Location:</label>
  <select class="form-control" id="sel1">
    <option>Puerto Vallarta</option>
    <option>Conchas Chinas</option>
    <option>Nuevo Vallarta</option>
    <option>Bucerias</option>
    <option>La Cruz </option>
    <option>Punta de Mita </option>
    <option>Sayulita</option>
    <option>San Pancho</option>
 


 
  </select>
</div>
                    </div>
                    <div class="col-md-6">
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

