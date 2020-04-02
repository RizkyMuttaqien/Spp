@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/siswa">dataSiswa</a></li>
              <li class="breadcrumb-item active">Tambah Data Siswa</li>
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
              <form method="post" action="/siswa/store">
              {{ csrf_field() }}
                <div class="card-body">
                <div class="row">
                 <div class="col-md-4">
                  <div class="form-group">
                    <label for="nis">nis</label>
                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukan nis">
                  </div>
                    </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="nisn">nisn</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukan nisn">
                  </div>
                 </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama">
                  </div>
                 </div>
                </div>
                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="kelas">kelas</label>
                    <select class="form-control select2" id="id_kelas" style="width: 100%;" name="id_kelas">
                    @foreach ($kelas as $data)
                        <option value="{{$data->id_kelas}}">{{$data->nama_kelas}}</option>
                    @endforeach
                  </select>
                  </div>
                    </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat">
                  </div>
                 </div>
                </div>
                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="tno_telp">no telpon</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukan no Telpon">
                  </div>
                    </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_spp">id Spp</label>
                    <select class="form-control select2" id="id_spp" style="width: 100%;" name="id_spp">
                    @foreach ($spp as $data)
                        <option value="{{$data->id_spp}}">{{$data->id_spp}}</option>
                    @endforeach
                  </select>
                  </div>
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
