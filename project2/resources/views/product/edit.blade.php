@extends('layout.master')
@section('content')
    
 <div class="container">
   <div style="background:#b8c9b9;height:50px; text-align:center;"><h2>Edit Product</h2></div>
    <hr>

   <form class="form-horizontal" action="{{url('products/update')}}" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
     
     
     
     @if (count($errors) > 0)

     <div class="alert alert-danger">
    There were some problems adding the category.<br />
    <ul>
        @foreach ($errors->all() as $error)
            <li></li>
        @endforeach
      </ul>
   </div>
  @endif

       <div class="form-group">
       <label class="control-label col-sm-2">ID</label>
       <div class="col-sm-6">         
        <input type="text" name="txtId" value="<?php echo $row->id ; ?>" class="form-control" readonly />         
       </div>
       </div>
     


     
      <div class="form-group">
       <label class="control-label col-sm-2">Title</label>
       <div class="col-sm-6">
       <input type="text" name="txtName" value="<?php echo $row->name ;?>" class="form-control" />
       </div>
     </div>

        <div class="form-group">
         <label class="control-label col-sm-2">Category</label>
         <div class="col-sm-2">
           <select name="cmbCatId" id="cmbCatId">
             <?php
                
               $db=new mysqli("localhost","root","","hrmlaravel");
    
               $sql=$db->query("select id,name from categories");
                 
                 while(list($id,$name)=$sql->fetch_row()){
      
                   echo "<option value='$id'>$name</option>";
               
              }//close while loop
                  


              ?>
                 

             
           </select>
       </div>
      </div>





     
       <div class="form-group">
       <label class="control-label col-sm-2">Partner</label>
       <div class="col-sm-6">
            <select name="cmbpartnerId" id="cmbpartnerId">
       
                   <?php
                 
                 $db=new mysqli("localhost","root","","hrmlaravel");
    
                 $sql=$db->query("select id,name from partners");
                 while(list($id,$name)=$sql->fetch_row()){
      
                   echo "<option value='$id'>$name</option>";
               
                  }//close while loop
                  


                ?>
            </select>
       </div>
     </div>




       <div class="form-group">
       <label class="control-label col-sm-2">Description</label>
       <div class="col-sm-6">
           <textarea name="txtDescription" value="<?php echo $row->description ; ?>"></textarea>
       </div>
     </div>

       <div class="form-group">
       <label class="control-label col-sm-2">Published</label>
       <div class="col-sm-6">
       <input type="radio" name="rdoStatus"  value="<?php echo $row->status ;?>"/>Yes
        <input type="radio" name="rdoStatus" value="<?php echo $row->status ; ?>" />No
       </div>
     </div>
     


      <div class="form-group">
       <label class="control-label col-sm-2">Featured</label>
       <div class="col-sm-6">
       <input type="radio" name="rdoFeature" value="<?php echo $row->id ; ?>" />Yes
        <input type="radio" name="rdoFeature" value="<?php echo $row->id ;?>" />No
       </div>
     </div>
    
       <div class="form-group">
       <label class="control-label col-sm-2">Price</label>
       <div class="col-sm-6">
       <input type="text" name="txtPrice" class="form-control" value="<?php echo $row->price ;?>" />
       </div>
     </div>
     
      <div class="form-group">
       <label class="control-label col-sm-2">Discount</label>
       <div class="col-sm-6">
       <input type="text" name="txtDiscount" class="form-control"  value="<?php echo $row->discount; ?>"/>
       </div>
     </div>
     
     




     

     
      <div class="form-group">
       <label class="control-label col-sm-2">File</label>
       <div class="col-sm-6">
       <input type="file" name="file"  id="file" value="<?php echo $row->file; ?>" class="form-control"/>
       </div>
     </div>
    


      <div class="form-group">
       <label class="control-label col-sm-2">Thumbnail</label>
       <div class="col-sm-6">
       <input type="file" name="image"  value="<?php echo $row->file; ?>" class="form-control"/>
       </div>
      </div>



     
     <div class="form-group">
     
       <div class="col-sm-offset-2 col-sm-6">
       <input type="submit" name="btnSubmit"  class="btn btn-primary" value="Add" />
       </div>
     </div>
 </form>
  
  </div>
@endsection