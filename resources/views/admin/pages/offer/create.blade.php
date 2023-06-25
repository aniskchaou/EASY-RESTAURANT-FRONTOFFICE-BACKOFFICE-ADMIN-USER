@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Create Offer</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<form method="post" action="{{ route('offer.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Name</label><br/><br/>  
						<input type="text" class="form-control" name="name"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Price</label><br/><br/>  
						<input type="number" class="form-control" name="price"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Start</label><br/><br/>  
						<input type="date" class="form-control" name="start"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">End</label><br/><br/>  
						<input type="date" class="form-control" name="end"/><br/><br/>  
					</div>  
					<div class="form-group">      
						<label for="first_name">Conditions</label><br/><br/>  
						<input type="text" class="form-control" name="conditions"/><br/><br/>  
					</div>  
					<br/>  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>  
			</div>
		</div>
	</div>
</div>
@endsection  