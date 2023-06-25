@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Edit Category</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('room.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label><br/><br/>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}"><br/><br/>  
				</div> 
				<div class="form-group">      
					<label for="first_name">Capacity</label><br/><br/>  
					<input type="number" class="form-control" name="capacity" value="{{$cat->capacity}}"><br/><br/>  
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