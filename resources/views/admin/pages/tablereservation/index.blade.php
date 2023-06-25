@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">table_bar</i> Table Reservations</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/tablereservation/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              Customer
            </th>
             <th>
              Guest Number
            </th>
             <th>
              Date
            </th>
             <th>
              Time
            </th>
             <th>
              Table Number
            </th>
            <th>Status</th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($tables as $tab)  
            <tr >  
              <td>
               @foreach($custs as $c) 
                    @if($tab->customer==$c->id)
                    {{$c->name}}
                    @endif
                    @endforeach

              </td>  
              <td>{{$tab->guest_number}}</td> 
              <td>{{$tab->date}}</td> 
              <td>{{$tab->time}}</td> 
              <td>{{$tab->table}}</td> 
              <td> <span class="badge badge-primary">{{$tab->status}}</span></td> 
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('tablereservation.edit', $tab->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('tablereservation.destroy', $tab->id)}}" >Delete</a>
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