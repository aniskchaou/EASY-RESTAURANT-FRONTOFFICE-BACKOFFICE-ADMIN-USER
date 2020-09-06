@extends('layouts.default')  
@section('content')  
<form method="post" action="{{route('product.update',$pd->id)}}">  
   
 @csrf     
          <div class="form-group">      
              <label for="first_name">name</label><br/><br/>  
              <input type="text" class="form-control" name="name" value="{{$pd->name}}"/><br/><br/>  
          </div>

          <div class="form-group">      
              <label for="first_name">description</label><br/><br/>  
              <input type="text" class="form-control" name="description" value="{{$pd->description}}"/><br/><br/>  
          </div>

          <div class="form-group">      
              <label for="first_name">Category</label><br/><br/>  
              <input type="text" class="form-control" name="category_id" value="{{$pd->category_id}}"/><br/><br/>  
          </div>

          <div class="form-group">      
              <label for="first_name">Price</label><br/><br/>  
              <input type="text" class="form-control" name="price" value="{{$pd->price}}"/><br/><br/>  
          </div> 
  
<button type="submit" class="btn-btn" >Update</button>  
</form>  
  
  
@endsection  