@extends('layouts.mainadmin')

@section('content')

<div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
<div class="card">
      <div class="container-fluid">
      </div>

                <form action="{{ url('/buku/create') }}" method="post">
                  @csrf
                   <div class="form-group">
                  <label for="id">Id</label>
                  <input type="text" class="form-control form-control-border" id="id" placeholder="id" name="id" value="{{ old('id') }}">
                  @error('id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                  <div class="form-group">
                  <label for="nama">Nama Buku</label>
                  <input type="text" class="form-control form-control-border" id="nama" placeholder="Nama Buku" name="nama" value="{{ old('nama') }}">
                  @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="id_penulis">Id Penulis</label>
                  <input type="text" class="form-control form-control-border" id="id_penulis" placeholder="Id Penulis" name="id" value="{{ old('id') }}">
                  @error('idpenulis')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="tahun_terbit">Tahun Terbit</label>
                  <input type="text" class="form-control form-control-border" id="tahun_terbit" placeholder="Tahun Terbit" name="tahun" value="{{ old('tahun') }}">
                  @error('tahunterbit')
                  <div class="ivalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="id_penerbit">Id Penerbit</label>
                  <input type="text" class="form-control form-control-border" id="id_penerbit" placeholder="Id Penerbit" name="id" value="{{ old('id') }}">
                  @error('idpenerbit')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="id_kategori">Id Kategori</label>
                  <input type="text" class="form-control form-control-border" id="id_kategori" placeholder="Tahun Terbit" name="tahun" value="{{ old('tahun') }}">
                  @error('idkategori')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="sinopsis">Sinopsis</label>
                  <input type="text" class="form-control form-control-border" id="sinopsis" placeholder="Sinopsis" name="sinopsis" value="{{ old('sinopsis') }}">
                  @error('sinopsis')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                  <div class="form-group">
                  <label for="sampul">Sampul</label>
                  <input type="text" class="form-control form-control-border" id="sampul" placeholder="Sampul" name="sampul" value="{{ old('sampul') }}">
                  @error('sampul')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
<button type="submit" class="btn btn-outline-primary btn-sm">Tambah Data</button>
                <a href="{{ url('/buku') }}" class="btn btn-info btn-sm">Kembali</a>
                </div>
                </form>
                </div>
              <!-- /.card-body -->
    </div>
  </div>
</div>

@endsection