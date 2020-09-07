@extends('layouts.admin')  
@section('content')  


<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Create Product</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
       <form method="post" enctype="multipart/form-data" action="{{ route('product.store') }}">  
         @csrf     
         <div class="form-group">      
          <label for="first_name">Name</label><br/><br/>  
          <input type="text" class="form-control" name="name"/><br/><br/>  
        </div>

        <div class="form-group">      
          <label for="first_name">Description</label><br/><br/>  
          <input type="text" class="form-control" name="description"/><br/><br/>  
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
          <input type="text" class="form-control" name="price"/><br/><br/>  
        </div> 
            
        <div class="form-group">      
          <label for="first_name">Image</label><br/><br/>  
          
        </div>
       <input type="file" name="image">
         
        <br/>  
        <button type="submit" class="btn btn-primary" >Create</button>  
      </form>  
      
    </div>
  </div>
</div>
</div>

@endsection  