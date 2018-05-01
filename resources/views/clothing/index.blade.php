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
            <a href="/clothing/create" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i>create</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th style="width: 1px; white-space: nowrap;">
                        <i class="fa fa-cog"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($clothing as $clothing)
                    <tr>
                        <td>{{ $clothing->id }}</td>
                        <td>{{ $clothing->name }}</td>
                        <td>{{ $clothing->size }}</td>
                        <td>{{ $clothing->brand }}</td>
                        <td>{{ $clothing->type }}</td>
                        <td>{{ $clothing->description }}</td>
                        <td>{{ $clothing->price }}</td>
                        <td>
                            <a href="/clothing/{{ $clothing->id }}/edit" class="btn btn-sm btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop