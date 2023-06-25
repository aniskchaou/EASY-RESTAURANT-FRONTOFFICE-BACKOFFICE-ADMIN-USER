@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Edit Merchant</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('merchant.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label><br/><br/>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}"><br/><br/>  
				</div>
				<div class="form-group">      
					<label for="first_name">Slug</label><br/><br/>  
					<input type="text" class="form-control" name="slug" value="{{$cat->slug}}"><br/><br/>  
				</div>  
				<div class="form-group">      
					<label for="first_name">Cuisine</label><br/><br/>  
					<input type="text" class="form-control" name="cuisine" value="{{$cat->slug}}"><br/><br/>  
				</div>  
				<div class="form-group">      
					<label for="first_name">Telephone</label><br/><br/>  
					<input type="text" class="form-control" name="telephone" value="{{$cat->telephone}}"><br/><br/>  
				</div>  
				<div class="form-group">      
					<label for="first_name">Email</label><br/><br/>  
					<input type="text" class="form-control" name="email" value="{{$cat->email}}"><br/><br/>  
				</div>  
				<div class="form-group">      
					<label for="first_name">About</label><br/><br/>  
					<input type="text" class="form-control" name="about" value="{{$cat->about}}"><br/><br/>  
				</div>    
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  
		</div>
	</div>
</div>  
@endsection  