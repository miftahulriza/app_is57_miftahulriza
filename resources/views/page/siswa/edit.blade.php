@extends('layouts.admin')



@section('content')
<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Jurusan</h1> --}}
    
    <div class="card">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Siswa</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                  
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
        <div class="card-header">
            Form Edit Data Siswa
        </div>
        <div class="card-body">
            <form method="post" action="/siswa/{{$sis->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIS</label>
                    <input type="text" value="{{$sis->nis}}" name="nis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                    <input type="text" value="{{$sis->nama}}" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                    <input type="text" value="{{$sis->tempat_lahir}}" name="tempat" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" value="{{$sis->tanggal_lahir}}" name="tgl" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jk" value="L" >Laki-laki
                    <input type="radio" name="jk" value="P" >Perempuan
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <select name="kelas" class="form-control">
                        <option value="">-Pilih Kelas-</option>
                        @foreach ($kelas as $item)
                            <option value="{{$item->id}}">{{$item->kelas}}</option>  
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/siswa" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection