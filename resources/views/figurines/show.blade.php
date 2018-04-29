<!-- *******************************
Page: Show Figurines Page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
@extends('layouts.app')

@section('content')
<h1>Showing Figurine</h1>

{{ $figurines->toJson() }}

<form action="/figurines/{{ $figurines->id }}" method="post">
 <input type="hidden" name="_method" value="delete">
 {{ csrf_field() }}

 <button class="btn btn-danger">
     <i class="fa fa-trash-o"></i>
 </button>
</form>


</div>
</div>
@stop