@extends('layouts.default') 
@section('content')  
<table border="1px">  
<thead>  
<tr>  
 
<td>  
category </td>  
</tr>  
</thead>  
<tbody>  
@foreach($pds as $pd)  
        <tr border="none">  
            <td>{{$pd->name}}</td>  
           
<td >  
<a href="{{ route('product.destroy', $pd->id)}}" >delete</a>
                   
</td>  
<td >  
<a href="{{ route('product.edit', $pd->id)}}" >
                  Edit
                </a>  
</td>  
  
         </tr>  
@endforeach  
</tbody>  
</table>  
@endsection 