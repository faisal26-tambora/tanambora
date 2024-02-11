@extends('layout.main')

@section('isi')

        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
              <div class="card-header">
                <h1 class="card-title">{{$title}}</h1>
                <br>
                <br>

                <form role="form" action="{{ url('booking/add') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="row">
           
                                <div class="col-2 form-group {{$errors->has('nama')? 'has-error' : ''}}">
                                    <label for="exampleInputEmail">Nama Pendaki</label>
                                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" id="exampleInputEmail" placeholder="Nama Pendaki">
                                    @if($errors->has('nama'))
                                        <span class="help-block">{{$errors->first('nama')}}</span>
                                     @endif
                                </div>
        
                                <div class="col-2 form-group {{$errors->has('jk')? 'has-error' : ''}}">
                                <label>Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control" value="{{ old('jk') }}">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @if($errors->has('jk'))
                                        <span class="help-block">{{$errors->first('jk')}}</span>
                                     @endif
                                </div>
                               
                                <div class="col-2 form-group {{$errors->has('alamat')? 'has-error' : ''}}">
                                    <label for="exampleInputEmail">Alamat</label>
                                    <input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control" id="exampleInputEmail" placeholder="Alamat">
                                    @if($errors->has('alamat'))
                                        <span class="help-block">{{$errors->first('alamat')}}</span>
                                     @endif
                                </div>
                               
                                
                           
                                <div class="col-2 form-group {{$errors->has('tanggal_mendaki')? 'has-error' : ''}}">
                                    <label>Tanggal Mendaki</label>
        
                                    <div class="input-group date" value="{{ old('tanggal_mendaki') }}" >
                                    <div class="input-group-addon">
                                
                                    </div>
                                    <input type="date" name="tanggal_mendaki" class="form-control" id="datepicker">
                                    @if($errors->has('tanggal_mendaki'))
                                        <span class="help-block">{{$errors->first('tanggal_mendaki')}}</span>
                                     @endif
                                    </div>
                                    </div>
                               
        
                                <div class="col-2 form-group {{$errors->has('jalur_pendakian')? 'has-error' : ''}}">
                                <label>Jalur Pendakian</label>
                                    <select name="jalur_pendakian" id="jalur_pendakian" class="form-control" value="{{ old('jalur_pendakian') }}">
                                        <option value="">Pilih Jalur Pendakian</option>
                                        <option value="Jalur Pendakian Pancasila">Jalur Pendakian Pancasila</option>
                                        <option value="Jalur Pendakian Doroncanga">Jalur Pendakian Doroncanga</option>
                                        <option value="Jalur Pendakian Piong">Jalur Piong</option>
                                        <option value="Jalur Pendakian Kawinda Toi">Jalur Kawinda Toi</option>
                                    </select>
                                    @if($errors->has('jalur_pendakian'))
                                        <span class="help-block">{{$errors->first('jalur_pendakian')}}</span>
                                     @endif
                                </div>
        
        
                                <div class="col-2 form-group {{$errors->has('pekerjaan')? 'has-error' : ''}}">
                                    <label for="exampleInputEmail">Pekerjaan/Mahasiswa</label>
                                    <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" class="form-control" id="exampleInputEmail" placeholder="Pekerjaan/Mahasiswa">
                                    @if($errors->has('pekerjaan'))
                                        <span class="help-block">{{$errors->first('pekerjaan')}}</span>
                                     @endif
                                </div>
                                </div>
                                
                            <div class="row">
        
                                <div class="col-2 form-group {{$errors->has('kebangsaan')? 'has-error' : ''}}">
                                    <label for="exampleInputEmail">Kebangsaan</label>
                                    <input type="text" name="kebangsaan" value="{{ old('kebangsaan') }}" class="form-control" id="exampleInputEmail" placeholder="Kebangsaan">
                                    @if($errors->has('kebangsaan'))
                                        <span class="help-block">{{$errors->first('kebangsaan')}}</span>
                                     @endif
                                </div>
        
                                <div class="col-2 form-group {{$errors->has('no_tlpn')? 'has-error' : ''}}">
                                    <label for="exampleInputEmail">Nomor Telepon</label>
                                    <input type="text" name="no_tlpn" value="{{ old('no_tlpn') }}" class="form-control" id="exampleInputEmail" placeholder="Nomor Telepon">
                                    @if($errors->has('no_tlpn'))
                                        <span class="help-block">{{$errors->first('no_tlpn')}}</span>
                                     @endif
                                </div>
        
                                <div class="col-2 form-group {{$errors->has('tlp_keluarga')? 'has-error' : ''}}">
                                    <label for="exampleInputEmail">Nope Keluarga</label>
                                    <input type="text" name="tlp_keluarga" value="{{ old('tlp_keluarga') }}" class="form-control" id="exampleInputEmail" placeholder="Nomor Telepon Keluarga">
                                    @if($errors->has('tlp_keluarga'))
                                        <span class="help-block">{{$errors->first('tlp_keluarga')}}</span>
                                     @endif
                                </div>
        
                              
                                <div class="col-2 form-group {{$errors->has('image')? 'has-error' : ''}}">
                                    <label for="exampleInputEmail">File Input</label>
                                    <input type="file" name="image" value="{{ old('image') }}" class="form-control" id="exampleInputEmail">
                                 @if($errors->has('image'))
                                        <span class="help-block">{{$errors->first('image')}}</span>
                                     @endif
                                </div>
                            </div>


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>


                </div>

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
      </div>
</div>
@endsection


