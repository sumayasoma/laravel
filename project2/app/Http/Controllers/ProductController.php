<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categoris;



use App\Http\Requests;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $result=DB::table('product')->get();  
        
       return view('product.product')->with('products',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $post=$request->all();
     
      $data=array(
           
            'name'        => $post["txtName"],
            'cat_id'      => $post["cmbCatId"],
            'partner_id'  => $post["cmbpartnerId"],
            'description' => $post["txtDescription"],
            'status'      => $post["rdoStatus"],
            'feature'     => $post["rdoFeature"],
            'price'       => $post["txtPrice"],
            'discount'    => $post["txtDiscount"],
            'file'       => $post["file"],
            'image'      => $post["image"]
           
           
        );
        

       $i=DB::table('product')->insert($data);
        
          if($i>0){
        
          return redirect('products');  
        
        }else{
            echo "not ok";
         }//close if//close if


        
    }//close create

    //-----------------------------------//

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    { // $formInput= $request->except()

    //validation
        $this->validate($post->$request,[
             'name'=>'required',
             'cat_id'=>'required',
             'partner_id'=>'required',
              'description'=>'required',
              'status'=>'required',
               'feature'=>'required',
               'price' => 'required',
               'discount'=>'required',
                'image'=>'image|mimes:png,jpg,jpeg|max:10000']);
             
         }    
              

    //------------------------------------------------//

   
//------------------------------------------------------//





 public function imageuploads(Request $request)
    {
      
         if(Input::hasFile('file')){

            $file = Input::file('file');
            $file->move('uploads',$file->getClientOriginalName());
            //$path = public_path().'/uploads/';
            //return $file->move($path, $filename);
            echo '<img src="uploads/'.$file->getClientOriginalName().'"/>';
       
          }elseif(Input::hasFile('image')){

               $file = Input::file('image');
               $file->$file->getClientOriginalName();
               $path = public_path().'/uploads/';
                return $file->move($path, $filename);
              // echo '<img src="uploads/'.$file->getClientOriginalName().'"/>';
           }


        }


  





 



//-------------------------------------------------//


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //-----------------------------------------//
    public function edit($id)
    {
        //
    }

   //-----------------------------------------//
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //----------------------------------------//
    public function update(Request $request)
    {
        $post=$request->all();
         $data=array(

            'name'        => $post["txtName"],
            'cat_id'      => $post["cmbCatId"],
            'partner_id'  => $post["cmbpartnerId"],
            'description' => $post["txtDescription"],
            'status'      => $post["rdoStatus"],
            'feature'     => $post["rdoFeature"],
            'price'       => $post["txtPrice"],
            'discount'    => $post["txtDiscount"],
            'file'       => $post["file"],
            'image'      => $post["image"]
             
           
           
           
        );

          $i=DB::table('product')->where('id',$post["txtId"])->update($data);
            
            if($i>0){
        
            return redirect('products');    
        

         }//close if
        


    }//close update

    //--------------------------------------------------------------//

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     //---------------------------------------------------------------------//
     */
    public function delete($id)
    {
          DB::table('product')->where('id',$id)->delete();
            
        return redirect()->back();  
    }
    



    //-------------------------------------------------------//
}//close class
