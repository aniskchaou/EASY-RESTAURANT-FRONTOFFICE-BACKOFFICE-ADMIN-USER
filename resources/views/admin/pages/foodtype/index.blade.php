@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">local_dining</i>Food Types</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/foodtype/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              Name
            </th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($foodTypes as $c)  
            <tr >  
              <td>{{$c->name}}</td>  
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('foodtype.edit', $c->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('foodtype.destroy', $c->id)}}" >Delete</a>
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