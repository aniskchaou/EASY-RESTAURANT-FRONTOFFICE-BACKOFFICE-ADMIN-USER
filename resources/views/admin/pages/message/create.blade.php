@extends('layouts.default')  
@section('content')  
<form method="post" action="{{ route('message.store') }}">  
   @csrf     
          <div class="form-group">      
              <label for="first_name">name</label><br/><br/>  
              <input type="text" class="form-control" name="name"/><br/><br/>  
          </div>

           <div class="form-group">      
              <label for="first_name">email</label><br/><br/>  
              <input type="text" class="form-control" name="email"/><br/><br/>  
          </div>

           <div class="form-group">      
              <label for="first_name">telephone</label><br/><br/>  
              <input type="text" class="form-control" name="telephone"/><br/><br/>  
          </div>

           <div class="form-group">      
              <label for="first_name">message</label><br/><br/>  
              <input type="text" class="form-control" name="message"/><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn-btn" >Insert</button>  
</form>  
@endsection  