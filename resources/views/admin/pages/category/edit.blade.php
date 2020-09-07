@extends('layouts.admin')  
@section('content')  


<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Edit Category</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('category.update',$cat->id)}}">  
				
				@csrf     
				<div class="form-group">      
					<label for="first_name">Category name</label><br/><br/>  
					<input type="text" class="form-control" name="category" value="{{$cat->name}}"><br/><br/>  
				</div>  
				
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  
			
		</div>
	</div>
</div>  
@endsection  