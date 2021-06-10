@extends('layout')
<form class="container mt-5 justify-content-center bg-dark text-white" action="/modify/{{$data['id']}}" method="post">
    @csrf
    <div class="form-group">
      <label>Email address</label>
      <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" value="{{$data['email']}}" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="{{$data['name']}}" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label>Phone Number</label>
      <input type="text" name="phonenumber" class="form-control" value="{{$data['phonenumber']}}" placeholder="Enter Phone Number">
    </div>
    <div class="form-group">
      <label>Pin Code</label>
      <input type="text" name="pincode" class="form-control" value="{{$data['name']}}" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>