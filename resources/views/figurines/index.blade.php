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

              <div class="panel">
        <div class="panel-heading">
            <a href="/guitars/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i></a>
            <h3 class="panel-title">Browse all products</h3>
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
                @foreach($figurines as $figurine)
                    <tr>
                        <td>{{ $figurine->id }}</td>
                        <td>{{ $figurine->race }}</td>
                        <td>{{ $figurine->class }}</td>
                        <td>{{ $figurine->material }}</td>
                        <td>{{ $figurine->description }}</td>
                        <td>
                            <a href="/figurines/{{ $figurine->id }}/edit" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop