<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/css/one-page-wonder.css">
  <link rel="stylesheet" type="text/css" href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

</head>

<!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
     <div class="container">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link" href="{{ route('home') }}">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ route('guitars.index') }}">Browse</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="{{ route('orders.index') }}">Browse orders</a>
            </li>
         </ul>
       </div>
     </div>
   </nav>

<br></br>
<br></br>
<br></br>

    {{ $products->toJson() }}

   <form action="/guitars/{{ $products->productID }}" method="post">
    <input type="hidden" name="_method" value="delete">
    {{ csrf_field() }}

    <button class="btn btn-danger">
        <i class="fa fa-trash-o"></i>
    </button>
</form>

   
   </div>
</div>
</html>