<!-- *******************************
Page: Navigation partial!
Author: Joshua Ratliff
Date of Creation: 04/07/2018
Copyright 2018
 ***********************************-->

 <!-- This is used to structure the navigation bar used throughout the website. -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
    <a class="navbar-brand" href="#">Catalog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
             <li class="nav-item @if(Route::is('home')) active @endif"> 
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item @if(Route::is('figurines.*')) active @endif">
                <a class="nav-link" href="{{ route('figurines.index') }}">Figurines</a>
            </li>
            <li class="nav-item @if(Route::is('book.*')) active @endif">
                <a href="{{ route('book.index') }}" class="nav-link">Books</a>
            </li>
            <li class="nav-item @if(Route::is('dice.*')) active @endif">
                <a href="{{ route('dice.index') }}" class="nav-link">Dice</a>
            </li>
            <li class="nav-item @if(Route::is('clothing.*')) active @endif">
                <a href="{{ route('clothing.index') }}" class="nav-link">Clothing</a>
            </li>
            <li class="nav-item @if(Route::is('stickers.*')) active @endif">
                <a href="{{ route('stickers.index') }}" class="nav-link">Stickers</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
