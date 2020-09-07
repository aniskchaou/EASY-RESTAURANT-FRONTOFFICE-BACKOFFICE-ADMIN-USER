@extends('layouts.admin') 
@section('content')  





<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Categories</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-success" href="{{asset('/category/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              Category Name
            </th>
            <th></th>
          </tr></thead>
          <tbody>



           @foreach($cats as $cat)  
           <tr >  
            <td>{{$cat->name}}</td>  

            <td >  
              
              <a class="btn btn-warning" href="{{ route('category.edit', $cat->id)}}" >
                Edit
              </a>  
              <a class="btn btn-danger" href="{{ route('category.destroy', $cat->id)}}" >Delete</a>

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