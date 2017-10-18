<?php

namespace App\Http\Controllers;
use App\Categories;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           $result=DB::table('categories')->get();   
        
           return view('category.cat')->with('categoriess',$result);
          // return view('admin.category.category')->with('procats',$categories);
           // return view('admin.category.createcat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $categories = DB::table('categories')->get();
          //return view('admin.category.createcat');
         $post=$request->all();
        
        //print_r($post);
        
        $data=array(

           'name'=>$post["txtName"]
           
           );
       
        $i=DB::table('categories')->insert($data);
        
        if($i>0){
        
         return redirect('categories');  
        
        }


         /* $category = new Category;

         $category->name = $request->get('name');

         $category->save();

        return \Redirect::route('categories.show', 
             array($category->id))
               ->with('message', 'Your category has been created!');*/

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /* $category = new Category;

    $category->name = $request->get('name');

    $category->save();

    return \Redirect::route('categories.show', 
        array($category->id))
        ->with('message', 'Your category has been created!');*/

    }

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $post=$request->all();
        
        $data=array(

            'name'=>$post["txtName"]
        
        );
            $i=DB::table('categories')->where('id',$post["txtId"])->update($data);
            
            if($i>0){
        
            return redirect('categories');   
        
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('categories')->where('id',$id)->delete();
            
        return redirect()->back();  
    }
}
