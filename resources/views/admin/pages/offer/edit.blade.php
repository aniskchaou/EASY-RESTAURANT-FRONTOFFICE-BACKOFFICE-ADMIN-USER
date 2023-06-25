@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Edit Offer</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('offer.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name"> Name</label><br/><br/>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}"><br/><br/>  
				</div> 
				<div class="form-group">      
					<label for="first_name">Price</label><br/><br/>  
					<input type="number" class="form-control" name="price" value="{{$cat->price}}"><br/><br/>  
				</div> 
				<div class="form-group">      
					<label for="first_name">Start</label><br/><br/>  
					<input type="date" class="form-control" name="start" value="{{$cat->start}}"><br/><br/>  
				</div> 
				<div class="form-group">      
					<label for="first_name">End</label><br/><br/>  
					<input type="date" class="form-control" name="end" value="{{$cat->end}}"><br/><br/>  
				</div> 
				<div class="form-group">      
					<label for="first_name">Conditions</label><br/><br/>  
					<input type="text" class="form-control" name="conditions" value="{{$cat->conditions}}"><br/><br/>  
				</div> 
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>  
		</div>
	</div>
</div>  
@endsection  