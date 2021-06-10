@extends('layout')
<form class="container mt-5 justify-content-center bg-dark text-white p-4" action="add" method="post">
    @csrf
    <div class="form-group">
      <label>Enter your Email address</label>
      <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
      <span style="color:red">@error('email'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
      <label>Enter your Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter Name">
      <span style="color:red">@error('name'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
      <label>Enter your Phone Number</label>
      <input type="text" name="phonenumber" class="form-control"  placeholder="Enter Phone Number">
      <span style="color:red">@error('phonenumber'){{$message}}@enderror</span>
    </div>
    </div>
    <div class="form-group">
      <label>Enter your Pin Code</label>
      <input type="text" name="pincode" class="form-control"  placeholder="Password">
      <span style="color:red">@error('pincode'){{$message}}@enderror</span>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>