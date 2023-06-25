@extends('layouts.admin')  
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Edit Table Reservation</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{route('tablereservation.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Customer</label><br/><br/>  
					<select class="form-control" name="customer" value="{{$cat->name}}">
					@foreach($custs as $c)  
              <option value="{{$c->id}}">{{$c->name}}</option>
           @endforeach
</Select>
					<br/><br/>  
				</div>  

				<div class="form-group">      
					<label for="first_name">Date</label><br/><br/>  
					<input type="date" class="form-control" name="date" value="{{$cat->date}}"><br/><br/>  
				</div>  

				<div class="form-group">      
					<label for="first_name">Time</label><br/><br/>  
					<input type="time" class="form-control" name="time" value="{{$cat->time}}"><br/><br/>  
				</div>  

				<div class="form-group">      
					<label for="first_name">Guest</label><br/><br/>  
					<input type="number" class="form-control" name="guest" value="{{$cat->guest_number}}"><br/><br/>  
				</div>  

				<div class="form-group">      
					<label for="first_name">Note</label><br/><br/>  
					<input type="text" class="form-control" name="note" value="{{$cat->note}}"><br/><br/>  
				</div>  

				<div class="form-group">      
					<label for="first_name">Table</label><br/><br/>  
					<input type="number" class="form-control" name="table" value="{{$cat->table}}"><br/><br/>  
				</div>  

				<div class="form-group">      
					<label for="first_name">Status</label><br/><br/>  
					<select type="text" class="form-control" value="{{$cat->status}}" name="status">
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