@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Food Reports</h4>
    </div>
    <div class="card-body">
    
      <form method="post" action="{{ route('reporting.storeFood') }}">  
					@csrf 
          <div class="col-md-12">  
              <div class="row">
                    <div class="form-group col-md-6">      
						<label for="first_name">Category</label><br/><br/>  
						<select type="text" class="form-control " name="category">
                             @foreach($cats as $cat)  
              <option value="{{$cat->id}}">{{$cat->name}}</option>
           @endforeach
                        </select>
					</div>




                <div class="form-group col-md-6">      
						<label for="first_name">Kitchen</label><br/><br/>  
						<select type="text" class="form-control " name="kitchen">
                            @foreach($kitchens as $cat)  
              <option value="{{$cat->id}}">{{$cat->name}}</option>
           @endforeach
                        </select>
					</div>

                <div class="form-group col-md-6">      
						<label for="first_name">Type</label><br/><br/>  
						<select type="text" class="form-control " name="type">
                             @foreach($foodtypes as $cat)  
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
            <th>
              Name
            </th>
            <th>Price</th>
          </tr></thead>
          <tbody>
            @foreach($sizes as $a)  
            <tr >  
              <td>{{$a->name}}</td>  
              <td >  
                {{$a->price}}
               
              </td>  
            </tr>  
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection 