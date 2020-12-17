@extends('layouts.master')
@push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endpush
@section('title','Dahboard')
@section('page-title','Home')
@section('content')
<!-- Default box -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tambah Artikel

    </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body pad">
    <form method="post" action="/add_process" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label>Judul Artikel</label>
        <input type="text" class="form-control" name="judul">
      </div>
      <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="gambar">
      </div>
      
      <div class="form-group">
        <label>Isi Artikel</label>
        <textarea name="deskripsi" id="editor1" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
        </textarea>
      </div>
        <button type="submit" name="add" class="btn btn-primary">Tambah Artikel</button>
        <a href="#" class="btn btn-danger">Kembali</a>
    </form>
  </div>
</div>
</div>
<!-- /.box -->
@endsection
@push('datatables')
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
  $(function () {
    $('.textarea').wysihtml5()
  })
</script>
@endpush