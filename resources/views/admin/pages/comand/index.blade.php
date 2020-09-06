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
@foreach($cmds as $cmd)  
        <tr border="none">  
            <td>{{$cmd->email}}</td>  
           
<td >  
<a href="{{ route('comand.destroy', $cmd->id)}}" >delete</a>
                   
</td>  
<td >  
<a href="{{ route('comand.edit', $cmd->id)}}" >
                  Edit
                </a>  
</td>  
  
         </tr>  
@endforeach  
</tbody>  
</table>  
@endsection 