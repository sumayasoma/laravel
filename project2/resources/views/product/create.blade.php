@extends('layout.master')
@section('content')

 <div class="container">
   <div style="background:#b8c9b9;height:50px; text-align:center;"><h1>Add Product</h1></div>
   <hr>

   <form class="form-horizontal" action="{{url('products/create')}}" method="post" id="upload"  enctype="multipart/form-data">
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
       <label class="control-label col-sm-2">Title</label>
       <div class="col-sm-6">
       <input type="text" name="txtName" class="form-control" />
       </div>
     </div>

        <div class="form-group">
         <label class="control-label col-sm-2">Category</label>
         <div class="col-sm-2">
           <select name="cmbCatId" id="cmbCatId" class="form-control">
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
           <textarea name="txtDescription"></textarea>
       </div>
     </div>

       <div class="form-group">
       <label class="control-label col-sm-2">Published</label>
       <div class="col-sm-6">
       <input type="radio" name="rdoStatus" value="<i class='fa fa-check' style='color:blue;'></i>"/>Yes
        <input type="radio" name="rdoStatus" value="<i class='fa fa-times' style='color:red;'></i>"/>No
       </div>
     </div>


       
      <div class="form-group">
       <label class="control-label col-sm-2">Featured</label>
       <div class="col-sm-6">
        <input type="radio" name="rdoFeature" value="<i class='fa fa-check' style='color:blue;'></i>"/>Yes
        <input type="radio" name="rdoFeature" value="<i class='fa fa-times' style='color:red;'></i>"/>No
       </div>
     </div>
    
       <div class="form-group">
       <label class="control-label col-sm-2">Price</label>
       <div class="col-sm-6">
       <input type="text" name="txtPrice" class="form-control" />
       </div>
     </div>
     
      <div class="form-group">
       <label class="control-label col-sm-2">Discount</label>
       <div class="col-sm-6">
       <input type="text" name="txtDiscount" class="form-control" />
       </div>
     </div>
     
     
     <div class="form-group">
       <label class="control-label col-sm-2">File</label>
       <div class="col-sm-6">
       <input type="file" name="file" class="form-control" id="file"/>
       </div>
     </div>


 <div class="form-group">
       <label class="control-label col-sm-2">Thumbnail</label>
       <div class="col-sm-6">
       <input type="file" name="image" class="form-control" />
       </div>
     </div>

     
     <div class="form-group">
     
       <div class="col-sm-offset-2 col-sm-6">
         <input type="submit" name="submit" class="btn btn-primary" value="Save" />
           <input type="submit" name="submit" class="btn btn-danger" value="Cancel"/>

       </div>
     </div>
   </form>


</div>





@endsection

<script>

$(function(){
  
  $("#cmbCatId").onclick(function(){
     
    var div_id=this.value;
   // alert('ok');
    
    $.ajax({
     url:'products.create',
     method:'POST',
     data: {'txtDivId':div_id},
     success:function(html){
       $("this").html(html);
      }//close success
    
    }); //$.ajax for category
    
    
    
  
  });//close $Cmbcatid

//--------------//

  $("#cmbpartnerId").onclick(function(){
     
    var divid=this.value;
   // alert('ok');
    
    $.ajax({
     url:'products.create',
     method:'POST',
     data: {'txtDivId':divid},
     success:function(html){
       $("this").html(html);
      }//close success
    
    }); //$.ajax for category
    
    
    
  
  });//close $Cmbcatid








  
});
</script>
