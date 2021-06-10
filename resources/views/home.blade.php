@extends('layout')

<x-navbar></x-navbar>


<x-carousel></x-carousel>
<div class=" d-flex container-fluid bg-dark mt-3 text-white ">
  <h1 class="container justify-content-center">DATA OPERATION SECTION</h1>
</div>
<div class=" d-flex container mt-2">
@if (session('sucess'))
  <div class="alert alert-success">
    {{session('sucess')}}
  </div>
@endif
</div>
@section('table')
<div>
    <table class="table table-dark container mt-3 justify-content-center">
        <thead>
          <tr>        
            <th><a href="/form" class="btn btn-primary" >Add Students</a></th>
          </tr>
        </thead>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NAME</th>
            <th scope="col">PHONE NUMBER</th>
            <th scope="col">PIN CODE</th>
            <th scope="col">OPERATION</th>
            <th scope="col">OPERATION</th>
          </tr>
        </thead>
        <tbody class="justify-content-center">
          @foreach($members as $member)
          <tr>
            <td>{{$member['id']}}</td>
            <td>{{$member['email']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['phonenumber']}}</td>
            <td>{{$member['pincode']}}</td>
            <td><a href={{"edit/".$member['id']}} class="btn btn-primary" >Edit</a></td>
            <td><a href={{"delete/".$member['id']}} class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection
