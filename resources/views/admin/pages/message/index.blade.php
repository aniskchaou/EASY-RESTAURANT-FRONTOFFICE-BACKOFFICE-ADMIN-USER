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
@foreach($msgs as $msg)  
        <tr border="none">  
            <td>{{$msg->name}}</td>  
           
<td >  
<a href="{{ route('message.destroy', $msg->id)}}" >delete</a>
                   
</td>  
<td >  
<a href="{{ route('message.edit', $msg->id)}}" >
                  Edit
                </a>  
</td>  
  
         </tr>  
@endforeach  
</tbody>  
</table>  
@endsection 