@extends('layouts.default')  
@section('content')  
<form method="post" action="{{ route('category.store') }}">  
   @csrf     
          <div class="form-group">      
              <label for="first_name">Category</label><br/><br/>  
              <input type="text" class="form-control" name="category"/><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn-btn" >Insert</button>  
</form>  
@endsection  