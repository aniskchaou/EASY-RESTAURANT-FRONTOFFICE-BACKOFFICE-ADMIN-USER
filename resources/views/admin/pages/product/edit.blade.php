@extends('layouts.admin')  
@section('content')  


<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Edit product</h4>
    </div>
    <div class="card-body">
     <form method="post" enctype="multipart/form-data" action="{{route('product.update',$pd->id)}}">  

       @csrf     
       <div class="form-group">      
        <label for="first_name">Name</label><br/><br/>  
        <input type="text" class="form-control" name="name" value="{{$pd->name}}"/><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">Description</label><br/><br/>  
        <input type="text" class="form-control" name="description" value="{{$pd->description}}"/><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">Category</label><br/><br/>  
                  <select type="text" class="form-control" name="category_id"/>
           @foreach($cats as $cat)  
              <option value="{{$cat->id}}">{{$cat->name}}</option>
           @endforeach
          </select>

        <br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">Price</label><br/><br/>  
        <input type="text" class="form-control" name="price" value="{{$pd->price}}"/><br/><br/>  
      </div> 

      <div class="form-group">      
          <label for="first_name">Image</label><br/><br/>  
          
        </div>
       <input type="file" name="image">

      <button type="submit" class="btn btn-primary" >Edit</button>  
    </form> 
  </div>
</div>
</div>
@endsection  