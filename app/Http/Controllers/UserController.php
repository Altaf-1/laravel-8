<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UserController extends Controller
{
    function showhome(){
        
        $members= Member::all();
        return view('home',compact('members'));
    }

    function formView(){
        
        return view('components.form');
    }

    function addData(Request $req){
        
        $req->validate([
            'email' => 'required',
            'name' => 'required',
            'phonenumber' => 'required|min:10',
            'pincode' => 'required|min:6' 
        ]);
        
        $member= new Member;
        $member->email=$req->email;
        $member->name=$req->name;
        $member->phonenumber=$req->phonenumber;
        $member->pincode=$req->pincode;
        $member->save();
        return redirect ('/')->with('sucess','Data sucessfully submitted');
    }

    function update(Request $req){
        $data= Member::find($req->id);
        $value = $req->only(['email','name', 'phonenumber', 'pincode']);
        $data->update($value);
        return redirect ('/')->with('sucess','Data Update');
    }
 
   

    function editData($id){
        $data= Member::find($id);
        return view('edit',compact('data'));
    }

    function deleteData($id){
        $data= Member::find($id);
        $data->delete();
        return redirect ('/')->with('sucess','Data Deleted');

    }
    

}