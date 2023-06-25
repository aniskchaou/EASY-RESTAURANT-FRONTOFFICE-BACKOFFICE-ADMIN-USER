@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">groups</i>Suppliers</h4>
    </div>
    <div class="card-body">
      <a class="btn btn-primary" href="{{asset('/supplier/create')}}">Create</a>
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
               Name
            </th>
            <th>
              Email
            </th>
            <th>
              Address
            </th>
            <th>Telephone</th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($suppliers as $supplier)  
            <tr >  
              <td>{{$supplier->name}}</td>
              <td>{{$supplier->email}}</td>
              <td>{{$supplier->address}}</td>   
              <td>{{$supplier->telephone}}</td>   
              <td >  
                
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('supplier.edit', $supplier->id)}}" >
                  Edit
                </a>  
                <a class="text-secondary font-weight-bold text-xs" href="{{ route('supplier.destroy', $supplier->id)}}" >Delete</a>
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