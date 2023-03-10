@extends('layouts.master')

@section('title')
My Library
@endsection

@section('left_navbar')
<li class="nav-item">
    <a class="nav-link active current" aria-current="page" href="#">Home</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        My Library
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="books.html">Books List</a></li>
        <li><a class="dropdown-item" href="authors.html">Authors List</a></li>
    </ul>
</li>
@endsection

@section('body')
<div class="row">
    <!--TEXT-->
    <div class="col-sm-9 col-md-6">
        <p>
            Manage your virtual library with us!

        <blockquote>
            <p>The world is a book and those who do not travel read only one page</p>
            [St. Augustine]
        </blockquote>

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget vehicula leo, condimentum facilisis
        eros. Maecenas dapibus elementum congue. Vestibulum vel ultrices leo, quis convallis turpis. Duis vitae
        viverra libero, nec ullamcorper justo. Suspendisse accumsan augue ac erat accumsan, at pharetra ex
        molestie. Aenean convallis interdum tempus. Duis tellus ipsum, vestibulum vel elit in, pellentesque
        dictum nulla. In quis placerat mauris. Mauris ut magna non dolor vestibulum iaculis. Cras cursus ipsum
        ac magna mattis imperdiet sit amet sit amet ligula.
        </p>
    </div>

    <!--IMAGE-->
    <div class="col-sm-3 col-md-6">
        <img src="img/pretty-4-th.jpg" class="img-thumbnail img-responsive">
    </div>
</div>
@endsection