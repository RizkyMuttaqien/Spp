@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Kelas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/kelas">dataKelas</a></li>
              <li class="breadcrumb-item active">Tambah Data Kelas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/kelas/update/{{$kelas->id_kelas}}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
                <div class="card-body">
                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_kelas">nama kelas</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukan Nama Kelas..." value="{{$kelas->nama_kelas}}">
                  </div>
                    </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="kompotensi_keahlian">kompotensi_keahlian</label>
                    <input type="text" class="form-control" id="kompotensi_keahlian" name="kompotensi_keahlian" placeholder="masukan nama kompotensi_keahlian" value="{{$kelas->kompotensi_keahlian}}">
                  </div>
                 </div>
                 </div>
                <!-- /.card-body -->
                <div class="card-footer float-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
@endsection
