@extends('layouts.master')

@section('title')
My Library
@endsection

@section('style')
style.css
@endsection

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

@section('body')
<div class="row">
    <!--TEXT-->
    <div class="col-sm-9 col-md-6">
        <p>
            Un semplicissimo esempio di sito web realizzato 
            durante il corso di Programmazione Web e Servizi 
            Digitali. 
            <br></br>
            Il sito riporta l'elenco dei libri che 
            sto leggendo o che ho letto, e la lista degli 
            autori che hanno popolato le mie letture e la mia 
            fantasia.
            <br></br>
            Il sito web continuerà a crescere durante 
            questo semestre, completandosi di volta in volta 
            grazie all'applicazione delle tecnologie web che 
            verranno presentate nel corso. 
            <br bold></br>
            Buon divertimento!
        </p>
        <blockquote>
            <p>
                Semina un atto, e raccogli un'abitudine; semina 
                un'abitudine, e raccogli un carattere; semina un 
                carattere, e raccogli un destino. 
            </p>
            <small>[Il pensiero del Buddha]</small>
        </blockquote>
    </div>

    <!--IMAGE-->
    <div class="col-sm-3 col-md-6">
        <img src="img/pretty-4-th.jpg" class="img-thumbnail img-responsive">
    </div>
</div>
@endsection

