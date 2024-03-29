@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">message</i>Messages</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr><th>
              Name
            </th>
            <th>
              Email
            </th>
            <th>telephone</th>
            <th>Message</th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($msgs as $msg)  
            <tr border="none">  
              <td>{{$msg->name}}</td> 
              <td>{{$msg->email}}</td> 
              <td>{{$msg->telephone}}</td>  
              <td>{{$msg->message}}</td> 
              <td >  
                <a  class="text-secondary font-weight-bold text-xs" href="{{ route('message.destroy', $msg->id)}}" >Delete</a>    
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