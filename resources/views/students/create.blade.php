@extends('components.layout.main')

@section('title', 'Form tambah data mahasiswa Mahasiswa')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Buat Mahasiswa</h1>

            <form method="post" action="/students">

                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan nama" name="nama" value="{{ old('nama') }}">
                  @error('nama')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="npm">Npm</label>
                    <input type="text" class="form-control @error('npm') is-invalid @enderror " id="npm" placeholder="Masukan npm" name="npm" value="{{ old('npm') }}">
                    @error('npm')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email" value="{{ old('email') }}">
                  </div>
                  <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan" value="{{ old('jurusan') }}">
                  </div>
                  <button type="submit" class="btn btn-primary">Tambah data</button>
              </form>


        </div>
    </div>
</div>
@endsection
