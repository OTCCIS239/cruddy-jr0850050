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

       <div class="panel">
        <div class="panel-heading">
            <a href="/dice/create" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i>create</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number of Faces</th>
                    <th>Material</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th style="width: 1px; white-space: nowrap;">
                        <i class="fa fa-cog"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($dice as $dice)
                    <tr>
                        <td>{{ $dice->id }}</td>
                        <td>{{ $dice->name }}</td>
                        <td>{{ $dice->size }}</td>
                        <td>{{ $dice->material }}</td>
                        <td>{{ $dice->description }}</td>
                        <td>{{ $dice->price }}</td>
                        <td>
                            <a href="/dice/{{ $dice->id }}/edit" class="btn btn-sm btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop