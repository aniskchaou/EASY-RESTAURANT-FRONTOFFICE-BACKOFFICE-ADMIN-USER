@extends('layouts.default')  

@section('content')  

<!-============ Slider ================->
<div class="sliderwrapper">
  <div id="slider" class="container">
   <div class="slider">
    <ul class="slides">
      @foreach($sls as $sl)
        @foreach($pds as $pd)
          @if($pd->id==$sl->product_id)
          <li class="slide">
              <h5 class="wow fadeInDown" data-wow-delay="0.8s">{{$pd->name}}</h5>
              <p class="wow fadeInUp" data-wow-delay="0.8s">{{$pd->description}}</p>
              <img src="{{asset('images/').'/'.$pd->image}}" width="317" height="256" class="wow fadeInRight" 
              data-wow-delay="0.8s" alt="slide1img"> 
          </li>
          @endif
        @endforeach
      @endforeach
     </ul>
   </div>
 </div> 
</div> 

<!--============ Best Dishes ============-->
<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
     <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
        <div class="slider">
            <ul class="slides">
            <li class="slide">
              @foreach($pds as $pd)
              <div class="item">
                <img src="{{asset('images/').'/'.$pd->image}}" width="216" height="215" alt="sliderimg" class="wow flipInX"
                data-wow-delay=".8s"> 
                <h3>{{$pd->name}}</h3>
                <h3>{{$pd->price}} $</h3>
                <p><button onclick="location.href='{{route('book.finish',$pd->id)}}'"  class="productitem"> BOOK NOW </button><p>
                  <br><br>
                </div> 
                @endforeach
              </ul> 
          </div> 
        </div> 
  </div> 

<br><br><br><br>
@endsection 