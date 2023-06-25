@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Create Table Reservation</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<form method="post" action="{{ route('tablereservation.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Customer</label><br/><br/>  
						<select type="text" class="form-control" name="customer">
							 @foreach($custs as $c)  
              <option value="{{$c->id}}">{{$c->name}}</option>
           @endforeach
                         </select>
						<br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Date</label><br/><br/>  
						<input type="date" class="form-control" name="date"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Time</label><br/><br/>  
						<input type="time" class="form-control" name="time"/><br/><br/>  
					</div> 
					<div class="form-group">      
						<label for="first_name">Guest</label><br/><br/>  
						<input type="text" class="form-control" name="guest"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Note</label><br/><br/>  
						<input type="text" class="form-control" name="note"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Table</label><br/><br/>  
						<input type="number" class="form-control" name="table"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Status</label><br/><br/>  
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