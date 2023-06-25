@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Create Addons</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<form method="post" action="{{ route('addons.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Addons name</label><br/><br/>  
						<input type="text" class="form-control" name="name"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Price</label><br/><br/>  
						<input type="text" class="form-control" name="price"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Description</label><br/><br/>  
						<input type="text" class="form-control" name="description"/><br/><br/>  
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