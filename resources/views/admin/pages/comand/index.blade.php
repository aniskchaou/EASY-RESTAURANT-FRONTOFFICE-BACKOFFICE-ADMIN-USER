@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">bookmark</i> Orders</h4>
    </div>
    <div class="card-body">
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
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($cmds as $cmd)  
              <tr border="none">  
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
                <td >  
                  <a class="text-secondary font-weight-bold text-xs" href="{{ route('comand.destroy', $cmd->id)}}" >Delete</a> 
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