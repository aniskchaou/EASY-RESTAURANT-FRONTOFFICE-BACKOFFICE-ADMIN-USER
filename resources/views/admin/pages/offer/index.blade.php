@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">assessment</i>Offers</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/offer/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              Name
            </th>
            <th>Price</th>
            <th>Start</th>
            <th>End</th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($offers as $offer)  
            <tr >  
              <td>{{$offer->name}}</td>  
              <td>{{$offer->price}}</td> 
              <td>{{$offer->start}}</td> 
              <td>{{$offer->end}}</td> 
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('offer.edit', $offer->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('offer.destroy', $offer->id)}}" >Delete</a>
              </td>  
            </tr>  
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection 