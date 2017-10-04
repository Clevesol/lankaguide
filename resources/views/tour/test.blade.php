@extends('layouts.main')


@section('content')

<div class="col-md-12 container">
<div class="row">
  <div class="col-md-3">
    <p>Select Your Route Path and the Distance</p>
    <p>Distance &nbsp  &nbsp <input type="text" id="distance" value="30" size="2"> km</p>

    <p>Starting from  &nbsp  &nbsp <input type="text" id="from" value="my"/></p>
    <p>Destination  &nbsp  &nbsp <input type="text" id="to" value="kandy"/></p>

    <input type="submit" onclick="route()"/>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-9 pull-right" id="googlemap" style="min-height:1000px;"> </div> 
</dir>
</div>









<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9Ai-zyevHDadqsbSaltmA-Sy4HhUmU0&signed_in=true&libraries=places"></script>{{-- &callback=initialize --}}

<script src="js/routeBoxer.js" type="text/javascript"></script>
<script src="js/route_config.js" type="text/javascript"></script>
<script> google.maps.event.addDomListener(window, 'load', initialize); </script>
<script type="text/javascript" src="assets/custom/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script> 

@endsection

 
