@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">nightlife</i>Addons</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/addons/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              Name
            </th>
            <th>Price</th>
            <th>Status</th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($addons as $a)  
            <tr >  
              <td>{{$a->name}}</td>  
              <td>{{$a->price}}</td>
              <td>
<span class="badge badge-sm badge-secondary">{{$a->status}}</span></td> 
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('addons.edit', $a->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('addons.destroy', $a->id)}}" >Delete</a>
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