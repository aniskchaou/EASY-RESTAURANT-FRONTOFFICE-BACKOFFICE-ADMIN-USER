@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Edit Supplier</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('supplier.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label><br/><br/>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}"><br/><br/>  
				</div>  
				<div class="form-group">      
					<label for="first_name">Email</label><br/><br/>  
					<input type="text" class="form-control" name="email" value="{{$cat->email}}"><br/><br/>  
				</div> 
				<div class="form-group">      
					<label for="first_name">Address</label><br/><br/>  
					<input type="text" class="form-control" name="address" value="{{$cat->address}}"><br/><br/>  
				</div> 
				<div class="form-group">      
					<label for="first_name">Telephone</label><br/><br/>  
					<input type="text" class="form-control" name="telephone" value="{{$cat->telephone}}"><br/><br/>  
				</div> 


				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  
		</div>
	</div>
</div>  
@endsection  