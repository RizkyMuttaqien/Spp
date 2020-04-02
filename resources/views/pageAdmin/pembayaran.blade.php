@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <i class="fas fa-edit"></i> Transaksi Pembayaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">TransaksiPembayaran</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 id="nama" class="card-title">Filter Data</h3 id="nama">
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="/transaksi/search">
              {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group row">
                            <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('MASUKAN NIS :') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="search" class="form-control @error('name') is-invalid @enderror" name="cari" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                </div>
              </form>
            </div>
            <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
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
                        <td colspan="2"><a href=".main-footer"><button class="btn btn-danger btn-block" data-card-widget="remove"><i class="fas fa-plus"></i>  Bayar</button></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                </div>

        </div>
            <!-- /.card -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"> Klik Untuk Bayar SPP</h3>
              </div>
                <div class="card-body">
                <div class="row">
                @foreach($transaksi as $data)
                    <div class="col-md-4 col-sm-4 col-12">
                    @if($data->status =="sudah dibayar")
                    <a href="#">
                        <div class="info-box bg-gradient-success">
                        <span class="info-box-icon"><i class="far fa-check-circle"></i></span>
                    @else
                    <a href="/transaksi/bayar/{{$data->id_pembayaran}}">
                        <div class="info-box bg-gradient-warning">
                        <span class="info-box-icon"><i class="far fa-times-circle"></i></span>
                    @endif

                            <div class="info-box-content">
                                <span class="info-box-text"><h1>{{$data->bulan_dibayar}} {{$data->tahun_bayar}}</h1></span>

                                <span class="progress-description">
                                {{$data->status}}
                                </span>
                            </div>
                            <!-- /.info-box-content -->

                        </div>
                        </a>
                            <!-- /.info-box -->
                    </div>
                @endforeach
                </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</div>
</div>
@endsection
