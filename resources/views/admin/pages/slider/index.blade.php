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
@foreach($cats as $cat)  
        <tr border="none">  
            <td>{{$cat->name}}</td>  
           
<td >  
<a href="{{ route('category.destroy', $cat->id)}}" >delete</a>
                   
</td>  
<td >  
<a href="{{ route('category.edit', $cat->id)}}" >
                  Edit
                </a>  
</td>  
  
         </tr>  
@endforeach  
</tbody>  
</table>  
@endsection 