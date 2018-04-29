<!-- *******************************
Page: clothing edit page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
 @extends('layouts.app')

@section('content')

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
        <h3 class="panel-title">Edit item</h3>
    </div>
    <div class="panel-body">
        <form action="/clothing/{{ $clothes->id }}" method="post">
            <input type="hidden" name="_method" value="PATCH">
            {{ csrf_field() }}
            
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ @$clothes ? $clothes->name : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" name="size" value="{{ @$clothes ? $clothes->size : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" name="brand" value="{{ @$clothes ? $clothes->brand : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" value="{{ @$clothes ? $clothes->type : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{ @$clothes ? $clothes->description : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">List Price</label>
                    <input type="number" name="price" value="{{ @$clothes ? $clothes->price : '' }}" class="form-control">
                </div>

            <button class="btn btn-primary pull-right">Save item</button>
        </form>

    
    </div>
    </div>
@stop