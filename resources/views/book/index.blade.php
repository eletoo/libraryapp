@extends('layouts.master')

@section('title', 'My Books')

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
    <li class="breadcrumb-item"><a href="{{route('book.index')}}">My Library</a></li> 
    <li class="breadcrumb-item active" aria-current="page">My Books</li>
  </ol>
</nav>
@endsection

@section('body')
<div class="row">  
        <div class="col-md-offset-10 col-md-12">
            <a href="{{route('book.create')}}" class="btn btn-success"><i class="bi bi-book"></i> Add New Book</a>
        </div>      
</div>

<br></br>

<div class="row ">
    <div class="col-md-12">
        <table class="table table-striped table-hover table-responsive">
            <col width="50%"/>
            <col width="30%"/>
            <col width="10%"/>
            <col width="10%"/>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($books_list as $book)
                    <tr>
                        <td>{{$book->title }}</td>
                        <td>{{$book->author->first_name}} {{$book->author->last_name }}</td>
                        <td><a class="btn btn-primary" href="{{route('book.edit', ['book'=>$book->id])}}"><i class="bi bi-pencil-square"></i> Edit</a></td>
                        <td><a class="btn btn-danger" href="{{route('book.destroy', ['book'=>$book->id])}}"><i class="bi bi-trash3"></i> Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection