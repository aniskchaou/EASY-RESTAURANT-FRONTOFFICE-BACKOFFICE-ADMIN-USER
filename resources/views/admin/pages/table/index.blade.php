@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">table_restaurant</i> Tables</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/table/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              Number
            </th>
             <th>
              Minimum Persons
            </th>
             <th>
              Maximum Persons
            </th>
             <th>
              Room
            </th>
             <th>
              Status
            </th>
            <th></th>
          </tr></thead>
          <tbody>
            @foreach($tables as $tab)  
            <tr >  
              <td>{{$tab->name}}</td>  
              <td>{{$tab->min}}</td> 
              <td>{{$tab->max}}</td> 
              <td> @foreach($rooms as $r) 
                    @if($tab->room==$r->id)
                    {{$tab->name}}
                    @endif
                    @endforeach</td> 
              <td>
              <span class="badge badge-sm badge-secondary">{{$tab->status}} </span>

              </td> 
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('table.edit', $tab->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('table.destroy', $tab->id)}}" >Delete</a>
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