<!--***********************************
Page: Show books Page!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->
 @extends('layouts.app')

@section('content')
<h1>Showing books</h1>

{{ $book->toJson() }}

<form action="/book/{{ $book->id }}" method="post">
 <input type="hidden" name="_method" value="delete">
 {{ csrf_field() }}

 <button class="btn btn-danger">
     <i class="fa fa-trash-o"></i>
 </button>
</form>


</div>
</div>
@stop