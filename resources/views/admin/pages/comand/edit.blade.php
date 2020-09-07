@extends('layouts.default')  
@section('content')  

<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Category</h4>
    </div>
    <div class="card-body">
     <form method="post" action="{{route('comand.update',$cmd->id)}}">  
       
       @csrf     
       <div class="form-group">      
        <label for="first_name">product:</label><br/><br/>  
        <input type="text" class="form-control" name="product" value="{{$cmd->product}}"><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">email:</label><br/><br/>  
        <input type="text" class="form-control" name="email" value="{{$cmd->email}}"><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">telephone:</label><br/><br/>  
        <input type="text" class="form-control" name="telephone" value="{{$cmd->telephone}}"><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">date:</label><br/><br/>  
        <input type="text" class="form-control" name="date" value="{{$cmd->date}}"><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">number:</label><br/><br/>  
        <input type="text" class="form-control" name="number_person" value="{{$cmd->number_person}}"><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">address:</label><br/><br/>  
        <input type="text" class="form-control" name="address" value="{{$cmd->address}}"><br/><br/>  
      </div>

      
      
      <button type="submit" class="btn-btn" >Update</button>  
    </form>  
    
  </div>
</div>
</div>
@endsection  