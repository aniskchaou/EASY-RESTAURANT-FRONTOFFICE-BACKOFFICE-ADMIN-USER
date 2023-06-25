@extends('layouts.admin') 
@section('content')  
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title "><i class="material-icons">settings</i>Merchant</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              Name
            </th>
            <th>
              Slug
            </th>
            <th>
              Telephone
            </th>
            <th>
              Email
            </th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($merchants as $m)  
            <tr >  
              <td>{{$m->name}}</td>  
              <td>{{$m->slug}}</td> 
              <td>{{$m->telephone}}</td> 
              <td>{{$m->email}}</td> 
              <td >  
                
                <a class="text-secondary font-weight-bold text-xsg" href="{{ route('merchant.edit', $m->id)}}" >
                  Edit
                </a>  
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