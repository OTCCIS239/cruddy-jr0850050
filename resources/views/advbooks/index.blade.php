<!-- *******************************
Page: Books page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
@extends('layouts.app')

@section('content')
    <h1>Begin the adventure with one of our premade campaigns!</h1>

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
    <a href="{{ URL::route('advbooks.create') }}" class="btn btn-default" id='link'> Add a new book! </a>
    </div>
@stop