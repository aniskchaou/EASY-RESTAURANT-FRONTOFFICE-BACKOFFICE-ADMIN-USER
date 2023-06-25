@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Create Table</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<form method="post" action="{{ route('table.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name"> Number</label><br/><br/>  
						<input type="text" class="form-control" name="name"/><br/><br/>  
					</div>  

					<div class="form-group">      
						<label for="first_name"> Minimum Persons</label><br/><br/>  
						<input type="number" class="form-control" name="min"/><br/><br/>  
					</div>  

					<div class="form-group">      
						<label for="first_name"> Maximum Persons</label><br/><br/>  
						<input type="number" class="form-control" name="max"/><br/><br/>  
					</div> 

					<div class="form-group">      
						<label for="first_name"> Room</label><br/><br/>  
						<select type="text" class="form-control" name="room">
						 @foreach($rooms as $cat)  
              <option value="{{$cat->id}}">{{$cat->name}}</option>
           @endforeach
</select>
						<br/><br/>  
					</div> 
					
					<div class="form-group">      
						<label for="first_name"> Status</label><br/><br/>  
						<select type="text" class="form-control" name="status">
							<option value="Active">Active</option>
							<option value="Inactive">Inactive</option>
                        </select>
						<br/><br/>  
					</div>  

					<br/>  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>  
			</div>
		</div>
	</div>
</div>
@endsection  