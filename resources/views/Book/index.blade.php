@extends('layouts.app')

@section('content')

<div class ="container mt-5">


<div class="card">
  <h5 class="card-header text-white">Med Evalution Reports</h5>
  <div class="card-body">
  
  <table id="dtBasicExample" class="     table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
  <tr class="table-light">
      <th scope="col">Book Name</th>
      <th scope="col">Description</th>
      <th scope="col">City</th>
      <th scope="col">Price</th>
      <th scope="col">Rent</th>
      
    </tr>
  </thead>
  <tbody>

    
  
    <tr>
    @foreach ($BookList as $list)
    <td scope="row"><p>{{ $list->BookName }} </p></td>
    <td scope="row"><p>{{ $list->Description }} </p></td>
    <td scope="row"><p>{{ $list->City }} </p></td>
    <td scope="row"><p>{{ $list->price }} </p></td>
    
    <td> <a href ="" class="btn btn-success">Rent</td> 
    </tr>
 
    @endforeach 




@endsection