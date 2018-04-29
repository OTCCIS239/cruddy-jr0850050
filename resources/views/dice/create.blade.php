<!-- *******************************
Page: Books page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
@extends('layouts.app')

@section('content')
<h1>ADMIN: Add some new dice!</h1>
<div class="container">
  <form>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Item Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Item Name" name="ItemName">
      </div>
    </div>
    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Item Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="describe the item" name="ItemDescription">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Item Price</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="List the price" name="ItemPrice">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@stop