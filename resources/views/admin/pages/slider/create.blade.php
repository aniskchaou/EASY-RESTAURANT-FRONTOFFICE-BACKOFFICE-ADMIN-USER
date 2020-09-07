@extends('layouts.admin')  
@section('content')  



<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Create Product Item</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<form method="post" action="{{ route('slider.store') }}">  
					@csrf     
					<select type="text" class="form-control" name="product_id"/>
					@foreach($pds as $pd)  
					<option value="{{$pd->id}}">{{$pd->name}}</option>
					@endforeach
				</select>  
				<br/>  
				<button type="submit" class="btn btn-primary" >Create</button>  
			</form> 
		</div>
	</div>
</div>
</div>

@endsection  