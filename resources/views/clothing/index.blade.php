<!-- *******************************
Page: clothing page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
 @extends('layouts.app')

@section('content')
    <h1>Get geared with our catalogue of clothing</h1>

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
            <a href="/clothing/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i></a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Race</th>
                    <th>Class</th>
                    <th>Material</th>
                    <th>Price</th>
                    <th style="width: 1px; white-space: nowrap;">
                        <i class="fa fa-cog"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($clothing as $clothes)
                    <tr>
                        <td>{{ $clothes->id }}</td>
                        <td>{{ $clothes->race }}</td>
                        <td>{{ $clothes->class }}</td>
                        <td>{{ $clothes->material }}</td>
                        <td>{{ $clothes->description }}</td>
                        <td>
                            <a href="/clothing/{{ $clothes->id }}/edit" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop