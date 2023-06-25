@extends('layouts.default')  
@section('content')  
<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> BOOK ONLINE</h3>
    <form method="post" action="{{ route('book.store') }}">  
         @csrf         
          <input  class="from wow zoomIn" placeholder="Product" type="hidden" class="form-control" name="product" value="{{$pd->id}}" >  
          <input class="from wow zoomIn" placeholder="Email" type="text" class="form-control" name="email" >  
          <input class="from wow zoomIn" placeholder="Telephone" type="text" class="form-control" name="telephone" >  
          <input class="from wow zoomIn" placeholder="Date" value="{{now()}}" type="hidden" class="form-control" name="date" >  
          <input class="from wow zoomIn" placeholder="Persons" type="text" class="form-control" name="number_person" >
          <input class="from wow zoomIn" placeholder="Address" type="text" class="form-control" name="address" >
        <br/>  
        <button type="submit" class="booknow wow fadeInUp" >Finish Booking</button>  
      </form>
      <br><br>
    </div>
</div> 
@endsection 