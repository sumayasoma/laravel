@extends('layout.master')
@section('content')
 <div class="container">
   <div style="background:#b8c9b9;height:50px; text-align:center;"><h1>View  Category</h1>
   </div>
   <table class="table">
      <tr><th>ID</th><th>Task Category Name</th><th>Action</th></tr>
      <?php
        foreach($categoriess as $category){
    
     $token=csrf_token(); 
     echo "<tr>
              <td>$category->id</td>
              <td>$category->name</td>
             

              <td>
                 <a href='category/edit/$category->id' class='btn btn-info'>Edit</a>
                  <a href='category/delete/$category->id' class='btn btn-danger'>Delete</a>
               </td>
              </tr>"; 
      
    }
    
    ?>    
   </table>
  
</div>
@endsection