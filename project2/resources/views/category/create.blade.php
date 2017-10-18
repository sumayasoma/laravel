@extends('layout.master')
@section('content')
 <div class="container">
 <div style="background:#b8c9b9;height:50px; text-align:center;"><h1>Create  Category</h1></div>
 <hr>
   <form class="form-horizontal" action="{{url('categories/create')}}" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
     
     
     
     
     
      <div class="form-group">
       <label class="control-label col-sm-2">Category</label>
       <div class="col-sm-6">
       <input type="text" name="txtName" class="form-control" />
       </div>
     </div>
     
     
     <div class="form-group">
     
       <div class="col-sm-offset-2 col-sm-6">
       <input type="submit" name="btnSubmit"  class="btn btn-primary" value="Submit" />
       </div>
     </div>
   </form>
  
  </div>
@endsection