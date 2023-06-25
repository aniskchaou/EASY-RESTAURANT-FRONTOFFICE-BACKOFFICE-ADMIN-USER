@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Edit Kitchen</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('kitchen.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Kitchen name</label><br/><br/>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}"><br/><br/>  
				</div>  
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  
		</div>
	</div>
</div>  
@endsection  