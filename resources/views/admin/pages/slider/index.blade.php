@extends('layouts.admin') 
@section('content')  



<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Slider</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-success" href="{{asset('/slider/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              
            </th>
            <th>Product</th>
            <th></th>
          </tr></thead>
        <tbody>  
@foreach($sls as $sl)  
        <tr >  
@foreach($pds as $pd) 
@if($pd->id==$sl->product_id)
           	<td><img src="{{asset('images/').'/'.$pd->image}}" height="50" width="50"/></td> 

            <td>
            	{{$pd->name}}
            </td>  
 @endif           
 @endforeach          
<td >  
<a class="btn btn-danger" href="{{ route('slider.destroy', $sl->id)}}" >delete</a>                  
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