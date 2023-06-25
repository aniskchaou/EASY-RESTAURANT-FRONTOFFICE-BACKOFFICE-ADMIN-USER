@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">soup_kitchen</i>Sizes</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/size/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
               Name
            </th>
            <th></th>
          </tr></thead>
          <tbody>
            @foreach($sizes as $size)  
            <tr >  
              <td>{{$size->name}}</td>  
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('size.edit', $size->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('size.destroy', $size->id)}}" >Delete</a>
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