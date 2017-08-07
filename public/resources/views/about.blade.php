@extends('master')
@section('body')


                  <h3><center>About PV Guide</center>
               </h3>
               <div>
               	<p class="text-justify">After many years of working in the tourism industry, in Puerto Vallarta, we realized that tourists needed one main source of information 
That could help and guide them to find anything they needed relating to their vacation visit. A survey was commissioned to find out the main requirement for an information guide to PV and the results came back conclusive, as we predicted. </p>
<p class="text-justify">The needs were simple, a guide that is easy to use and  meets all the basic needs of a tourist visiting PV. How to get around, what to see and do, where to stay, what to eat and drink , safety, flight information, how to get to PV, things to avoid, medical needs, how to rent, how to buy a home, retiring in PV, golf, basic tips on local customs. </p>
<p class="text-justify">It was a challenge as there are many websites that cover this information but none that were simple to navigate or had everything in one place. Most covered a few topics or had fragmented information that was unrelated or of very little use. The biggest frustration for tourists was spending  a very long time surfing many sites just trying to find one piece of information. Hopefully we have done what we set out to do which was create the COMPLETE GUIDE TO PUERTO VALLARTA.

We appreciate your feedback please help us make it more user friendly. If you have any suggestions please send them below.</p>


               </div> 
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
                            Send Message</button>
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

