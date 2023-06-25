@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Order Reports</h4>
    </div>
    <div class="card-body">
    
      <form method="post" action="{{ route('reporting.storeOrder') }}">  
					@csrf 
          <div class="col-md-12">  
              <div class="row">


                    <div class="form-group col-md-6">      
						<label for="first_name">Food</label><br/><br/>  
						<select type="text" class="form-control " name="category">
                              @foreach($pds as $cat)  
              <option value="{{$cat->id}}">{{$cat->name}}</option>
           @endforeach

                        </select>
					</div>

              </div> 
         </div>
			<button type="submit" class="btn btn-primary" >Search </button>  
	</form>  
      
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>Food</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Date</th>
            <th>Persons</th>
            <th>Address</th>
          </tr></thead>
          <tbody>
            @foreach($sizes as $cmd)  
            <tr >  
               <td>
                    @foreach($pds as $pd) 
                    @if($cmd->product==$pd->id)
                    {{$pd->name}}
                    @endif
                    @endforeach
                </td> 
                <td>{{$cmd->email}}</td> 
                <td>{{$cmd->telephone}}</td> 
                <td>{{$cmd->date}}</td> 
                <td>{{$cmd->number_person}}</td> 
                <td>{{$cmd->address}}</td>  
            </tr>  
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection 