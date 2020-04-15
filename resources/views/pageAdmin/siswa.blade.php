@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">DataSiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="row">
        <div class="container-fluid">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <a href="/siswa/create" type="button" class="btn bg-gradient-primary btn-sm"><i class="fas fa-plus"></i>Tambah Data</a>
                </h3>
                <div class="card-tools">
                    <form action="/siswa/search">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="cari" class="form-control float-right" placeholder="Search..">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                  </form>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 table-hover" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>kelas</th>
                        <th>alamat</th>
                        <th>no_telp</th>
                        <th>nominal</th>
                        <th>lihat detail</th>
                    </tr>
                  </thead>
                  <tbody>
                   @php $i = 1 @endphp
                    @foreach ($siswa as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->nisn}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nama_kelas}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->no_telp}}</td>
                        <td>{{$data->nominal}}</td>
                        <td>
                        <div class="btn-group btn-group-sm">
                        <a href="/siswa/lihatSpp/{{$data->nis}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="/siswa/edit/{{$data->nis}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        <a href="/siswa/hapus/{{$data->nis}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</div>
@endsection
