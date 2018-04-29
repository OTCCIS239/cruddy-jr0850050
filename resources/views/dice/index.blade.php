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
            <a href="/guitars/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i></a>
            <h3 class="panel-title">Browse all products</h3>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>name</th>
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
                        <td>{{ $dice->material }}</td>
                        <td>{{ $dice->description }}</td>
                        <td>{{ $dice->price }}</td>
                        <td>
                            <a href="/dice/{{ $dice->id }}/edit" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop