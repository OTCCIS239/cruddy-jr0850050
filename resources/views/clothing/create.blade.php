<!-- *******************************
Page: Clothing Create page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
 @extends('layouts.app')

@section('content')
<h1>ADMIN: Add clothing!</h1>

        <style type="text/css">
        #link-container {
            text-align: center;
        }
        #link {
            background: black;
            color: white;
            display: inline-block;
            padding: 10px;
        }
        </style>

    <div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Create item</h3>
    </div>
    <div class="panel-body">
        <form action="/clothing" method="post">
            <input type="hidden" name="_method" value="post">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ @$clothing ? $clothing->name : '' }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" name="size" value="{{ @$clothing ? $clothing->size : '' }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" name="brand" value="{{ @$clothing ? $clothing->brand : '' }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" value="{{ @$clothing ? $clothing->type : '' }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" value="{{ @$clothing ? $clothing->description : '' }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">List Price</label>
                <input type="number" name="price" value="{{ @$clothing ? $clothing->price : '' }}" class="form-control">
            </div>

            <button class="btn btn-primary pull-right">Save item</button>
        </form>

    
    </div>
    </div>
@stop