@extends('layouts.master')

@section('title')
@if (!isset($book->id))
    Create New Book
@else 
    Edit Book
@endif
@endsection

@section('style', 'style.css')

@section('left_navbar')
<li class="nav-item">
    <a class="nav-link" href="{{route('home')}}">Home</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        My Library
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item active current" aria-current="page" href="{{route('book.index')}}">Books List</a></li>
        <li><a class="dropdown-item" href="{{route('author.index')}}">Authors List</a></li>
    </ul>
</li>
@endsection

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('book.index')}}">My Library</a></li> 
    <li class="breadcrumb-item"><a href="{{route('book.index')}}">My Books</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add</li>

  </ol>
</nav>
@endsection

@section('body')
<div class="row">
    @if(!isset($book->id))
        <form method="post" action="{{route('book.store')}}">
    @else
        <form method="post" action="{{route('book.update', ['book' => $book->id])}}">
            @method('PUT')
    @endif
        @csrf
        <div class="form-group">
            <label for="TitleField">Title</label>
            @if(!isset($book->id))
                <input type="text" class="form-control" id="TitleField" name="title" placeholder="Title">
            @else
                <input type="text" class="form-control" id="TitleField" name="title" placeholder="Title" value="{{$book->title}}">
            @endif
        </div>

        <br></br>
        <div class="form-group">
            <label for="AuthorField">Author</label>
            <select class="form-select" id="AuthorID" name="authorid">
                @foreach($authors_list as $author)
                    @if((isset($book->id)) && ($book->author_id==$author->id))
                        <option value="{{$author->id}}" selected="selected">{{$author->first_name}} {{$author->last_name}}</option>
                    @else
                        <option value="{{$author->id}}">{{$author->first_name}} {{$author->last_name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <br></br>        
        <div class="form-group row">
            <div class="col-sm-10">
                <a href="{{route('book.index')}}" class="btn btn-danger">
                    <i class="bi bi-x"></i> Cancel
                </a>

                <input type="submit" value="Create" name="submitButton" class="btn btn-success"></input>
            </div>
        </div>
    </form>
</div>
@endsection