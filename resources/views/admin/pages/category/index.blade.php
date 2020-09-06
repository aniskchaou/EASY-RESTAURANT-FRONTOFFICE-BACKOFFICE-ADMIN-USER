@extends('layouts.admin') 
@section('content')  





<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Category</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Category Name
                        </th>
                        <th></th>
                      </tr></thead>
                      <tbody>

                        
                          
                         @foreach($cats as $cat)  
        <tr border="none">  
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>  
           
<td >  
<a href="{{ route('category.destroy', $cat->id)}}" >delete</a>
                   
</td>  
<td >  
<a href="{{ route('category.edit', $cat->id)}}" >
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