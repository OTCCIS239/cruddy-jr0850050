<!-- *******************************
Page: stickers page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
 @extends('layouts.app')

@section('content')
    <h1>Customize your gear with some of our stickers!</h1>

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
            <a href="/stickers/create" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i>create</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Artist</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th style="width: 1px; white-space: nowrap;">
                        <i class="fa fa-cog"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($sticker as $sticker)
                    <tr>
                        <td>{{ $sticker->id }}</td>
                        <td>{{ $sticker->name }}</td>
                        <td>{{ $sticker->artist }}</td>
                        <td>{{ $sticker->description }}</td>
                        <td>{{ $sticker->price }}</td>
                        <td>
                            <a href="/stickers/{{ $sticker->id }}/edit" class="btn btn-sm btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop