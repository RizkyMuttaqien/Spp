@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @foreach($siswa as $data)
            <h1 class="m-0 text-dark"> <i class="fas fa-book"></i>DataSPP ({{$data->nama}}) </h1>
         @endforeach
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              @if(Auth::user()->level != "siswa")
              <li class="breadcrumb-item"><a href="/siswa">Data Siswa</a></li>
              @endif
              <li class="breadcrumb-item active">SPP</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="row">
@foreach($transaksi as $data)

    <div class="col-md-4 col-sm-4 col-12">
    @if($data->status =="sudah dibayar")
        <div class="info-box bg-green">
        <span class="info-box-icon"><i class="far fa-check-circle"></i></span>
    @else
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
            <!-- /.info-box -->
    </div>
@endforeach
</div>
</div>
@endsection
