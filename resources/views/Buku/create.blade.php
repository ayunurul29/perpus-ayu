@extends('layouts.mainadmin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->
 <div class="container-fluid">
  <div class="card">
  </div>
</div>
<div class="card">
  <div class="card-header">
    Tambah buku
  </div>
  <div class="card-body">
                <a href="/buku" class="btn btn-info btn-sm">Kembali</a>
                <form action="/buku/tambah" method="post">
                  @csrf
                  <div class="form-group">
                  <label for="namabuku">Nama buku</label>
                  <input type="text" class="form-control form-control-border" id="namabuku" placeholder="Nama Barang" name="nama" value="{{ old('nama') }}">
                  @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
                <div class="form-group">
                  <label for="id_penulis">id penulis</label>
                  <select class="custom-select form-control-border" id="id_penulis" name="id_penulis">
                   
                  </select>
                   @error('idpenulis')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
               <div class="form-group">
                  <label for="tahun_terbit">tahun terbit</label>
                  <select class="custom-select form-control-border" id="tahun_terbit" name="tahun_terbit">
                   
                  </select>
                   @error('tahunterbit')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                 <div class="form-group">
                  <label for="id_penerbit"></label>
                  <select class="custom-select form-control-border" id="id_penerbit" name="id_penerbit">
                   
                  </select>
                   @error('idpenerbit')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
               <div class="form-group">
                  <label for="id_kategori">id kategori</label>
                  <select class="custom-select form-control-border" id="id_kategori" name="id_kategori">
                   
                  </select>
                   @error('idkategori')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
               <div class="form-group">
                  <label for="sinopsis">sinopsis</label>
                  <select class="custom-select form-control-border" id="sinopsis" name="sinopsis">
                   
                  </select>
                   @error('sinopsis')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
               <div class="form-group">
                  <label for="id_penulis">id penulis</label>
                  <select class="custom-select form-control-border" id="id_penulis" name="id_penulis">
                   
                  </select>
                   @error('idpenulis')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
  </div>
</div>
</div>

@endsection