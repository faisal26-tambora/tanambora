@extends('layout.main')

@section('judul')

Selamat Datang <b>{{ \Auth::user()->name }}</b>

@endsection

@section('isi')

<?php
 $jumlah = \DB::table('suratmasuk')->count();
 $jumlahk = \DB::table('suratkeluar')->count();

?>
<div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlah}}</h3>

                <p>Surat Masuk</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-inbox"></i>
              </div>
              <a href="suratmasuk/index" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$jumlahk}}</h3>

                <p>Surat Keluar</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-solid fa-folder-open"></i>
              </div>
              <a href="suratmasuk/index" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>1
                </h3>

                <p>Disposisi</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-inbox"></i>
              </div>
              <a href="suratmasuk/index" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$jumlah}}</h3>

                <p>4</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-inbox"></i>
              </div>
              <a href="suratmasuk/index" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box badge-info">
              <div class="inner">
                <h3>1</h3>

                <p>Surat Ditolak</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-inbox"></i>
              </div>
              <a href="suratmasuk/index" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box badge-success">
              <div class="inner">
                <h3>12</h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user"></i>
              </div>
              <a href="suratmasuk/index" class="small-box-footer">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        
@endsection


