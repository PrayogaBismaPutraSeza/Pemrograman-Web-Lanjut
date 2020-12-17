@extends('layouts.master')
 

@section('title', 'Artikel')
 

@section('header')
    <center>
        <h2>Artikel</h2>
    </center>
@endsection
 

@section('main')
@foreach ($articles as $article)
    <div class="col-md-4 col-sm-12 mt-4">
        <div class="card">
        <img src= "{{ asset('/image/'.$article->gambar) }}" alt="" title="" width="150px">
            <div class="card-body">
                <h5 class="card-title">{{ $article->judul }}</h5>
                <a href="/detail/{{ $article->id }}" class="btn btn-primary">Baca Artikel</a>
            </div>
        </div>
    </div>
@endforeach
@endsection