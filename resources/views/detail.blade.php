@extends('layouts.master')
 

@section('title')
{{ $article->judul }}
@endsection
 

@section('main')
<div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
    <div class="p-4">
        <h2>{{ $article->judul }}</h2>
        <img src= "{{ asset('/image/'.$article->gambar) }}" alt="" title="" width="500px">
        <p class="mt-5"> {{ $article->deskripsi }}</p>
    </div>
</div>
@endsection