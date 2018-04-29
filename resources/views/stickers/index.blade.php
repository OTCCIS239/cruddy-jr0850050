<!-- *******************************
Page: Stickers page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
@extends('layouts.app')

@section('content')
    <h1>Customize your gear with our line of expressive stickers!</h1>

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
    <a href="{{ URL::route('stickers.create') }}" class="btn btn-default" id='link'> Add a new sticker! </a>
    </div>
@stop