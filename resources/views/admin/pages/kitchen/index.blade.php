@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">kitchen</i>Kitchens</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/kitchen/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              kitchen Name
            </th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($kitchens as $kitchen)  
            <tr >  
              <td>{{$kitchen->name}}</td>  
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('kitchen.edit', $kitchen->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('kitchen.destroy', $kitchen->id)}}" >Delete</a>
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