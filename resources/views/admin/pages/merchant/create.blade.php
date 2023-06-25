@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Create Category</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<form method="post" action="{{ route('category.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Category name</label><br/><br/>  
						<input type="text" class="form-control" name="category"/><br/><br/>  
					</div>  
					<br/>  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>  
			</div>
		</div>
	</div>
</div>
@endsection  