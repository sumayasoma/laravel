@extends('layout.master')
@section('content')
 <div class="container">
    <div style="background:#b8c9b9;height:50px; text-align:center;"><h2>View Product List</h2></div>
    <hr>
  
   <table class="table table-borderd">
       <thead>
     
        <tr><th>ID</th><th>Title</th><th>Category</th><th>Partner</th><th>Description</th><th>Publish</th><th>Featured</th><th>Price</th><th>Discount</th><th>Action</th></tr>
      </thead>

      <tbody>
      <?php
        foreach($products as $product){
    
     $token=csrf_token(); 
     echo "<tr>
              <td>$product->id</td>
              <td>$product->name</td>
              <td>$product->cat_id</td>
              <td>$product->partner_id</td>
              <td>$product->description</td>
              <td>$product->status</td>
              <td>$product->feature</td>
              <td>$product->price</td>
              <td>$product->discount</td>
              
                 

              
            
              <td>
                <a href='product/edit/$product->id' class='btn btn-primary'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>
                 <a href='product/delete/$product->id' class='btn btn-danger' ><i class='fa fa-window-close' aria-hidden='true'></i></a>
               </td>
              </tr>"; 
      
    }
    
    ?> 

     </tbody>   
   </table>
  
</div>
@endsection