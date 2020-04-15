@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <div class="row">
          <div class="col-12 col-sm-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-green elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">RPL </span>
                <span class="info-box-number">
                  {{$rpl}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">TKJ</span>
                <span class="info-box-number">{{$tkj}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-purple elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">MM</span>
                <span class="info-box-number">{{$mm}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        <!-- /.row -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">TOI</span>
                <span class="info-box-number">
                {{$toi}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">TITL</span>
                <span class="info-box-number">{{$titl}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">AV</span>
                <span class="info-box-number">{{$av}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        <!-- /.row -->
        </div>
            <div class="row">
<!-- TABLE: LATEST ORDERS -->
<div class="col-8">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Transaksi Hari ini
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Petugas</th>
                        <th>Tanggal</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Jumlah</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                    @foreach ($transaksi as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->nis}}</td>
                        @foreach ($petugas as $p)
                        @if($p->id == $data->id)
                        <td>{{$p->name}}</td>
                        @endif
                        @endforeach
                        <td>{{$data->tgl_bayar}}</td>
                        <td>{{$data->bulan_dibayar}}</td>
                        <td>{{$data->tahun_bayar}}</td>
                        <td>{{$data->jumlah_bayar}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="/transaksi" class="btn btn-sm btn-info float-left">Tambah Data Baru</a>
                <a href="/histori" class="btn btn-sm btn-secondary float-right">lihat semua data</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Transaksi Hari ini</span>
                <span class="info-box-number">{{$transaksi1}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">transaksi kemarin</span>
                <span class="info-box-number">{{$transaksi2}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="far fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah siswa </span>
                <span class="info-box-number">{{$siswa}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

          <!-- /.col -->
      </div>
    </div>
    </section>

@endsection
