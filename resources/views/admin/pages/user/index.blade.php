@extends('layouts.admin') 
@section('content')  

<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">person</i>Users</h4>
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
          </tr>
          </thead>
          <tbody>
           @foreach($usrs as $usr)  
           <tr >  
            <td>{{$usr->name}}</td>
            <td>{{$usr->email}}</td>   
          </tr>  
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection 