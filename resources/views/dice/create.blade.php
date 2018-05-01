<!-- *******************************
Page: Dice edit page!
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
    <form action="/dice" method="post">
           <input type="hidden" name="_method" value="post">
           {{ csrf_field() }}
            
                <div class="form-group">
                    <label for="name">Dice name</label>
                    <input type="text" name="name" value="{{ @$dice ? $dice->name : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="size">Number of faces</label>
                    <input type="number" name="size" value="{{ @$dice ? $dice->size : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="material">Material</label>
                    <input type="text" name="material" value="{{ @$dice ? $dice->material : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{ @$dice ? $dice->description : '' }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">List Price</label>
                    <input type="number" name="price" value="{{ @$dice ? $dice->price : '' }}" class="form-control">
                </div>

            <button class="btn btn-primary pull-right">Save item</button>
        </form>

    
    </div>
    </div>
@stop