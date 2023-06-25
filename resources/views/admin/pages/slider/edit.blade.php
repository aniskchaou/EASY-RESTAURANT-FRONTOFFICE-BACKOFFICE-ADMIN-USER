@extends('layouts.default')  
@section('content')  
<form method="post" action="{{route('category.update',$cat->id)}}">  
          @csrf     
          <div class="form-group">      
              <label for="first_name">First Name:</label><br/><br/>  
              <input type="text" class="form-control" name="category" value="{{$cat->name}}"><br/><br/>  
          </div>  
          <button type="submit" class="btn-btn" >Update</button>  
</form>   
@endsection  