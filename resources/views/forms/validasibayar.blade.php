@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        @foreach($transaksi as $data)
        <div class="row mb-2">
          <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> <i class="fas fa-edit">Validasi Pembayaran</i></h1>
         </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item"><a href="/transaksi">TransaksiPembayaran</a></li>
                            <li class="breadcrumb-item active">validasi</li>
                            </ol>
                        </div><!-- /.col -->
          </div><!-- /.row -->
         @endforeach

         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info" id="bottom">
              <div class="card-header">
                <h3 class="card-title">Validasi</h3>
              </div>
                <div class="card-body">

                @foreach($transaksi as $data)
                <center>
                    <h1>
                        Apakah Kamu Yakin Akan Membayar SPP Bulan <b>{{$data->bulan_dibayar}}</b> ?
                    </h1>

                </center>
                    <div class="row">
                        <div class="col-sm-6">
                    <form action="/transaksi/store" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_pembayaran" value="{{ $data->id_pembayaran }}">
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="status" value="sudah dibayar">
                    <button type="submit"class="btn btn-lg bg-gradient-success float-right">Iya</button>
                    </form>
                    </div>
                        <div class="col-sm-6 float-left">
                    <a href="/transaksi" class="btn btn-lg bg-gradient-danger">Tidak</a>
                         </div>
                    </div>
                @endforeach
                </div>
            </div>

        </div>
        </div>


    </div>
</div>
@endsection
