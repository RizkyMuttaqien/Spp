@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Spp</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/spp">dataSpp</a></li>
              <li class="breadcrumb-item active">Tambah Data Spp</li>
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
              <form method="post" action="/spp/update/{{$spp->id_spp}}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
                <div class="card-body">
                <div class="row">
                 <div class="col-md-8">
                  <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input type="text" class="form-control" id="nominal" name="nominal" placeholder="Masukan Nominal" value="{{ $spp->nominal }}">
                  </div>
                    </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="tahun">tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="contoh : 2020" value="{{ $spp->tahun }}">
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
