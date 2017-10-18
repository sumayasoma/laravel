@extends('layout.master')
@section('content')
 <div class="container">
   <div style="background:#b8c9b9;height:50px; text-align:center;"><h1>View Partners</h1>
   </div>
   <hr>
   <table class="table">
      <tr><th>ID</th><th>Partners Name</th><th>Action</th></tr>
      <?php
        foreach($partnerss as $partner){
    
     $token=csrf_token(); 
     echo "<tr>
              <td>$partner->id</td>
              <td>$partner->name</td>
             

              <td>
                 <a href='partner/edit/$partner->id' class='btn btn-info'>Edit</a>
                 <a href='partner/delete/$partner->id' class='btn btn-danger'>Delete</a>
                  
               </td>
              </tr>"; 
      
    }
    
    ?>    
   </table>
  
</div>
@endsection