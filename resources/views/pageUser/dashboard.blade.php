@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <i class="fas fa-edit"></i> DataSiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">DataSiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <section class="content">
      <div class="container-fluid">
            <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

                <div class="card-body">
                <div class="card-body table-responsive p-0 table-hover">
                <table class="table text-nowrap">
                  <tbody>
                    @foreach ($siswa as $data)
                    <tr>
                        <td>Nis</td>
                        <td>:{{$data->nis}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:{{$data->nama}}</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:{{$data->nama_kelas}}</td>
                    </tr>
                    <tr>
                        <td>alamat</td>
                        <td>:{{$data->alamat}}</td>
                    </tr>
                    <tr>
                        <td>no telpon</td>
                        <td>:{{$data->no_telp}}</td>
                    </tr>
                    <tr>
                        <td ><a href="/siswa/lihatSpp/{{$data->nis}}"><button class="btn btn-info btn-block"><i class="fas fa-search"></i> Lihat Data SPP</button></a></td>
                        <td ><a href="/histori/{{$data->nis}}"><button class="btn btn-info btn-block"><i class="fas fa-search"></i> Lihat Histori pembayaran saya</button></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                </div>

        </div>
            <!-- /.card -->

        </div>
        </div>
    </section>
</div>
</div>
@endsection
