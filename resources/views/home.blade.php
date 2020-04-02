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
                  10
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
                <span class="info-box-number">10</span>
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
                <span class="info-box-number">10</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        <!-- /.row -->
        </div>
    <div class="row">
      <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-danger">
                <h3 class="widget-user-username">Rita Yuliati</h3>
                <h5 class="widget-user-desc">-</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="/image/rita.jpg" style="height:90px;width:90px;" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Lahir:</h5>
                      <span class="description-text">BANDUNG, 1965-07-15</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">NIP:</h5>
                      <span class="description-text">196507151995032002</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">NUPTK:</h5>
                      <span class="description-text">0047743644300063</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
            </div>
        </div>
      </div>

        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">Asep Tapip Yani</h3>
                <h5 class="widget-user-desc">Kepala Sekolah</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="/image/asep.jpg" style="height:90px;width:90px;" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Lahir:</h5>
                      <span class="description-text">GARUT, <br>1965-05-17</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">NIP:</h5>
                      <span class="description-text">196505171988031009</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">NUPTK:</h5>
                      <span class="description-text">2849743644200022</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-green">
                <h3 class="widget-user-username">ARNE HERLIANY</h3>
                <h5 class="widget-user-desc">Kepala jurusan RPL</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="/image/arne.jpg" style="height:90px;width:90px;" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Lahir:</h5>
                      <span class="description-text">BANDUNG, 1974-09-17</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">NIP:</h5>
                      <span class="description-text">197409172005012010</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">NUPTK:</h5>
                      <span class="description-text">5249752653300013</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    </section>

@endsection
