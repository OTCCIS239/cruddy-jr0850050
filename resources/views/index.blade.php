<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/css/one-page-wonder.css">
  <link rel="stylesheet" type="text/css" href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>

</head>

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <h1>Ready to rock out?</h1>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('guitars.index') }}">Browse items</a>
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

      <div class="panel">
        <div class="panel-heading">
            <a href="/guitars/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i></a>
            <h3 class="panel-title">Browse all products</h3>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>productID</th>
                    <th>CategoryID</th>
                    <th>productCode</th>
                    <th>productName</th>
                    <th>listPrice</th>
                    <th style="width: 1px; white-space: nowrap;">
                        <i class="fa fa-cog"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->productID }}</td>
                        <td>{{ $product->categoryID }}</td>
                        <td>{{ $product->productCode }}</td>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $product->listPrice }}</td>
                        <td>
                            <a href="/guitars/{{ $product->productID }}/edit" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</html>