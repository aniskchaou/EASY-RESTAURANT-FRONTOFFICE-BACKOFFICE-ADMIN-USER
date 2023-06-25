@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Create Room</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<form method="post" action="{{ route('room.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Name</label><br/><br/>  
						<input type="text" class="form-control" name="name"/><br/><br/>  
					</div>
					<div class="form-group">      
						<label for="first_name">Capacity</label><br/><br/>  
						<input type="text" class="form-control" name="capacity"/><br/><br/>  
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