@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Category</h4>
      <p class="card-category"> Here is a subtitle for this table</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <form method="post" action="{{ route('comand.store') }}">  
         @csrf     
         <div class="form-group">      
          <label for="first_name">product:</label><br/><br/>  
          <input type="text" class="form-control" name="product" ><br/><br/>  
        </div>

        <div class="form-group">      
          <label for="first_name">email:</label><br/><br/>  
          <input type="text" class="form-control" name="email" ><br/><br/>  
        </div>

        <div class="form-group">      
          <label for="first_name">telephone:</label><br/><br/>  
          <input type="text" class="form-control" name="telephone" ><br/><br/>  
        </div>

        <div class="form-group">      
          <label for="first_name">date:</label><br/><br/>  
          <input type="text" class="form-control" name="date" ><br/><br/>  
        </div>

        <div class="form-group">      
          <label for="first_name">number:</label><br/><br/>  
          <input type="text" class="form-control" name="number_person" ><br/><br/>  
        </div>

        <div class="form-group">      
          <label for="first_name">address:</label><br/><br/>  
          <input type="text" class="form-control" name="address" ><br/><br/>  
        </div>
        <br/>  
        <button type="submit" class="btn-btn" >Insert</button>  
      </form>  
    </div>
  </div>
</div>
</div>


@endsection  