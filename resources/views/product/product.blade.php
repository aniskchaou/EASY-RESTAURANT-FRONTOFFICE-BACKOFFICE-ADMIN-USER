@extends('layouts.default')  
@section('content')  


<style type="text/css">
.productitem{
 background: #ff5a0b;
 padding: 5px;
 border-radius: 10px;
 border: 0px;
 border-bottom-color: currentcolor;
 border-bottom-style: none;
 border-bottom-width: 0px;
 margin: 5px;
 font-family: OSWALD-BOLD;
 font-size: 17px;
 color: white;
 cursor: pointer;
}
</style>

@foreach($cats as $cat) 
<div class="bestdisheswrapper">
  <div id="bestdishes" class="container">
   <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{$cat->name}}</h2>
  @php
$i = 0;
$openslide = false
@endphp
   <div class="slider">
    <ul class="slides">
      @foreach($pds as $pd)
      @if($cat->id==$pd->category_id)
        @php
        $i = $i+1
       @endphp
        
       @if($i==1 || $i==4)
       @php  $openslide=true;@endphp
       <li class="slide">
       @endif

      <div class="item">
        <img src="{{asset('images/').'/'.$pd->image}}" width="216" height="215" alt="sliderimg" class="wow flipInX"
        data-wow-delay=".8s"> 
        <h3>{{$pd->name}}</h3>
          <br><br>
        </div> 
        
       @if($openslide==false)
       </li>
       @endif

       
       @endif
       @endforeach
      </ul>
    </div> 
  </div>
  

  <br><br>
</div>
@endforeach 
<br><br><br>



@endsection 