@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">menu</i> Categories</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/category/create')}}">Create</a>
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
            @foreach($cats as $cat)  
            <tr >  
              <td>{{$cat->name}}</td>  
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('category.edit', $cat->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('category.destroy', $cat->id)}}" >Delete</a>
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