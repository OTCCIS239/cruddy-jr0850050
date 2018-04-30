<!-- *******************************
Page: figurines page!
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
        <form action="/figurines{{ $figurines->id }}" method="post">
            <input type="hidden" name="_method" value="PATCH">
            {{ csrf_field() }}
            
                <div class="form-group">
                    <label for="race">Race</label>
                    <input type="text" name="race" value="{{ @$figurines ? $figurines->race : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="class">Class</label>
                    <input type="text" name="class" value="{{ @$figurines ? $figurines->class : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="material">Material</label>
                    <input type="text" name="material" value="{{ @$figurines ? $figurines->material : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{ @$figurines ? $figurines->description : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">List Price</label>
                    <input type="number" name="price" value="{{ @$figurines ? $figurines->price : '' }}" class="form-control">
                </div>

            <button class="btn btn-primary pull-right">Save item</button>
        </form>

    
    </div>
    </div>
@stop