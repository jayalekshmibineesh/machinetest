<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machinetest;
use Illuminate\Support\Facades\File;
class NewController extends Controller
{
    public function index()
    {
      return view('index');
    }
    public function register()
    {
      return view('register');
    }
    public function registerdata(Request $request)
    {
      $request->validate([
        'name'=>'required',
        'place'=>'required',
        'contact'=>'required',
        'image'=>'required'
      ]);
     $data=$request->all();
     $path='asset/storage/images/'.$data['image'];
     $fileName=time().$request->file('image')->getclientoriginalName();
     $PATH=$request->file('image')->storeAs('images',$fileName,'public');
     $datas["image"]='/storage/'.$path;
     $data['image']=$fileName;
     Machinetest::create($data);
     return redirect()->route('register');
    }
    public function view()
    {
      $view=Machinetest::all();
      return view('view',compact('view'));
      
    }
    public function delete($id)
    {
      Machinetest::find($id)->delete();
      return redirect()->route('view');
     

    }
       
    public function edit($id)
    {
        $data=Machinetest::find($id);
        return view('edit',compact('data'));
    }
    

    public function update(Request $request,$id)
  {
    $data=Machinetest::find($id);
    $request->validate([
    'email'=>'email',
    'image'=>'mimes:jpg,jpeg,jif,png|max:2048'
     

   ]);
   $data->name=$request->input('name');
   $data->place=$request->input('place');
   $data->contact=$request->input('contact');
   if($request->hasfile('image'))
   {
    $path='asset/storage/images/'.$data['image'];
    if(File::exists($path))
    {
      File::delete($path);
    }
     $fileName=time().$request->file('image')->getclientoriginalName();
     $path=$request->file('image')->storeAs('images',$fileName,'public');
     $datas["images"]='/storage/' .$path;
     $data->image=$fileName;
     $data->update();
    }
    $data->update();
    return redirect()->route('view');
  }
}

