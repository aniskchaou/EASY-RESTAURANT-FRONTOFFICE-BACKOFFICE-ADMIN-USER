@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Edit Addons</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('addons.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Addons name</label><br/><br/>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}"><br/><br/>  
				</div>
				<div class="form-group">      
					<label for="first_name">Price</label><br/><br/>  
					<input type="text" class="form-control" name="price" value="{{$cat->price}}"><br/><br/>  
				</div> 
				<div class="form-group">      
					<label for="first_name">Description</label><br/><br/>  
					<input type="text" class="form-control" name="description" value="{{$cat->description}}"><br/><br/>  
				</div>   
				<div class="form-group">      
					<label for="first_name">Status</label><br/><br/>  
					<select type="text" class="form-control" name="status" value="{{$cat->status}}">
							<option value="Active">Active</option>
							<option value="Inactive">Inactive</option>
                        </select>
					<br/><br/>  
				</div> 
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  
		</div>
	</div>
</div>  
@endsection  