<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentdetail;

class DesignController extends Controller
{
    //
    public function index(){
         $data = studentdetail::all();
        return view('index',compact('data'));
    }
    public function addstudentdetail(){
        return view('post');
    }
    public function addstudentdata(Request $request){
        
          $create = studentdetail::create($request->all());
          if($create){
              return redirect()->route('index');
          }
          
    }
    public function edit($id){
        $edit = studentdetail::find($id);
        return view('edit',compact('edit'));
        
    }
    public function update($id,Request $request){
        $data = studentdetail::find($id);
        $data->update($request->all());
        if($data){
            return redirect()->route('index');
        }
    }
    public function delete($id,Request $request){
        $data = studentdetail::find($id);
        $result =  $data->delete();
        if($result){
            return redirect()->route('index');
        }
     }
}
