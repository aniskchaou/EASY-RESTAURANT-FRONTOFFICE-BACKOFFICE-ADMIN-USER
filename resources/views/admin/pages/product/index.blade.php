@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title "><i class="material-icons">fastfood</i>Foods</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<a class="btn btn-primary" href="{{asset('/product/create')}}">Create</a>
					<thead class=" text-primary">
						<tr>
							<th></th>
							<th>
							Name
						</th>
						<th>
							Description
						</th>
						<th>Category</th>
						<th>Price</th>
						<th>Actions</th>
					</tr></thead>
					<tbody>
						@foreach($pds as $pd)  
						<tr>  
							<td><img src="{{asset('images/').'/'.$pd->image}}" height="50" width="50"/></td> 
							<td>{{$pd->name}}</td> 
							<td>{{$pd->description}}</td>
							<td> 
							@foreach($cats as $cat) 
								@if($pd->category_id==$cat->id)
								{{$cat->name}}
								@endif
                            @endforeach</td> 
                            <td>{{$pd->price}}</td>
							<td >  
								<a class="text-secondary font-weight-bold text-xs" href="{{ route('product.edit', $pd->id)}}" >
									Edit
								</a>
								<a class="text-secondary font-weight-bold text-xs" href="{{ route('product.destroy', $pd->id)}}" >Delete</a>
 
								  
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