@extends('layouts.default')  
@section('content')  
<form method="post" action="{{ route('product.store') }}">  
   @csrf     
          <div class="form-group">      
              <label for="first_name">name</label><br/><br/>  
              <input type="text" class="form-control" name="name"/><br/><br/>  
          </div>

          <div class="form-group">      
              <label for="first_name">description</label><br/><br/>  
              <input type="text" class="form-control" name="description"/><br/><br/>  
          </div>

          <div class="form-group">      
              <label for="first_name">Category</label><br/><br/>  
              <input type="text" class="form-control" name="category_id"/><br/><br/>  
          </div>

          <div class="form-group">      
              <label for="first_name">Price</label><br/><br/>  
              <input type="text" class="form-control" name="price"/><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn-btn" >Insert</button>  
</form>  
@endsection  