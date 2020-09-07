@extends('layouts.default')  
@section('content')  
<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> CONTACT</h3>
   
      <form method="post" action="{{ route('contact.send') }}">  
         @csrf     
               
      
          <input style="margin:10px;" placeholder="Name" type="text" class="from  wow zoomIn" name="name"/>  
        

              
          <input style="margin:10px;" placeholder="Email" type="text" class="form-control from  wow zoomIn" name="email"/>  

            
         
          <input style="margin:10px;" placeholder="Telephone" type="text" class="name  wow zoomIn" name="telephone"/>


          
        
          <input style="margin:10px;" placeholder="Message" width="100" type="text" class="name wow zoomIn" name="message" />
     
        <br/>  
        <button  type="submit" class="booknow wow fadeInUp" >Send</button>  
      </form>
    <br><br>
    
    </div>
</div> 
 
@endsection 