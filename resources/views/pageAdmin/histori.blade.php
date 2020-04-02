@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Histori Transaksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Histori Transaksi</li>
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
                @if(Auth::user()->level != "siswa")
                <a href="/transaksi" type="button" class="btn bg-gradient-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                <a href="/transaksi/cetak_pdf"><button type="button" class="btn  bg-gradient-warning btn-sm"><i class="fas fa-book"></i> Cetak PDF</button></a>
                @endif
                </h3>
                <div class="card-tools">
                    <form action="/histori/search">
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
                        <th>Nama Petugas</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan Dibayar</th>
                        <th>Tahun Bayar</th>
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</div>
@endsection
