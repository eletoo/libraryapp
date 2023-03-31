@extends('layouts.master')

@section('title', 'My Authors')

@section('style', 'style.css')

@section('left_navbar')
<li class="nav-item">
    <a class="nav-link active current" aria-current="page" href="{{route('home')}}">Home</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        My Library
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{route('book.index')}}">Books List</a></li>
        <li><a class="dropdown-item" href="{{route('author.index')}}">Authors List</a></li>
    </ul>
</li>
@endsection

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item">My Library</li> 
    <li class="breadcrumb-item active" aria-current="page">My Authors</li>
  </ol>
</nav>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-offset-10 col-md-12">
            <div class="input-group">            
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>
        

    <div class="row ">
        <div class="col-md-12">
            <table class="table table-striped table-hover table-responsive">
                <col width="70%"/>
                <col width="30%"/>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>                            
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors_list as $author)
                        <tr>
                            <td>{{$author->first_name}} {{$author->last_name}}</td>
                            <td><a class="btn btn-primary" href="#">See Books</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection