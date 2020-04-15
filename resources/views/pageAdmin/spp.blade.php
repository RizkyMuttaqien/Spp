@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Spp</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">DataSpp</li>
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
                <a href="/spp/create"><button type="button" class="btn  bg-gradient-primary btn-sm"><i class="fas fa-plus"></i>Tambah Data</button></a>

                </h3>
                <div class="card-tools">

                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                        <th>no</th>
                        <th>Tahun</th>
                        <th>Nominal</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 1 @endphp
                    @foreach ($spp as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->tahun}}</td>
                        <td>{{$data->nominal}}</td>
                        <td>
                        <div class="btn-group btn-group-sm">
                        <a href="/spp/edit/{{$data->id_spp}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        <a href="/spp/hapus/{{$data->id_spp}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
