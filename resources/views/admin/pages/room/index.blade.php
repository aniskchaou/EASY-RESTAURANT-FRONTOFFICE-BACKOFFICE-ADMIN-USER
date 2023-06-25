@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">family_restroom</i> Rooms</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/room/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
               Name
            </th>
            <th>
               Capacity
            </th>
            <th>
               Status
            </th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($rooms as $room)  
            <tr >  
              <td>{{$room->name}}</td>
              <td>{{$room->capacity}}</td>
              <td><span class="badge badge-sm badge-secondary">{{$room->status}}</span></td>  
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('room.edit', $room->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('room.destroy', $room->id)}}" >Delete</a>
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