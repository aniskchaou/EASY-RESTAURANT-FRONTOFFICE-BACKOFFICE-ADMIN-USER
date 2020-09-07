@extends('layouts.admin')  
@section('content')  



<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Message</h4>
      <p class="card-category"> Here is a subtitle for this table</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
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
    </div>
  </div>
</div>
</div>
@endsection  