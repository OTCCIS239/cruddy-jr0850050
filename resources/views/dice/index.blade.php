<!-- *******************************
Page: Dice page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
@extends('layouts.app')

@section('content')
    <h1>With so many dice to choose from, youre sure to find something to suit your aesthetics!</h1>

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
    <a href="{{ URL::route('dice.create') }}" class="btn btn-default" id='link'> Add some new dice! </a>
    </div>
@stop