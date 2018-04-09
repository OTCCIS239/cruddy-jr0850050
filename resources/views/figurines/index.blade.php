<!-- *******************************
Page: Figurines page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
@extends('layouts.app')

@section('content')
    <h1>Browse our catalog of figurines to find your next hero!</h1>

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

    <div id="link-container">
    <a href="{{ URL::route('figurine.create') }}" class="btn btn-default" id='link'> Add a new figurine! </a>
    </div>
@stop