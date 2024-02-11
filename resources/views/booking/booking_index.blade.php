@extends('layout.main')

@section('isi')

        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          @if (\Session::has('success'))
              <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                  <span aria-hidden="true">&times;</span> 
              </button>
                  <ul>
                      <li>{!! \Session::get('success') !!}</li>
                  </ul>
              </div>
          @endif
          @if (\Session::has('danger'))
              <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                  <span aria-hidden="true">&times;</span> 
              </button>
                  <ul>
                      <li>{!! \Session::get('danger') !!}</li>
                  </ul>
              </div>
          @endif

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>{{ $title }}</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped Mytables">
                     <form role="form" action="{{ url('booking/add') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @php 
                        $success = Session::get('success');
                @endphp
                @if ($success)
                <div class="alert alert-success">{{$success}}</div>
                @endif
                
                <div class="row">


                
                <form id="formReservasiPerorangan" method="post" enctype="multipart/form-data" class="form-horizontal ml-2" style="padding-top: 20px !important;">
                        <div class="alert alert-success" style="display: none;"></div>
                        <div class="form-group row waktuwisata">
                            <label class="col-lg-3 col-form-label">
                                <u>WAKTU PELAKSANAAN</u>
                            </label>
                        </div>

                        <div class="form-group row waktuwisata">
                            <label class="col-lg-1 col-form-label">Tanggal</label>
                            <div class="col-lg-4">
                              <select name="dari" id="dari" class="form-control date" style="width: 100%;">
                                
                              </select>
                              <input type="hidden" name="sampai" id="sampai" value="">
                            </div>
                        </div>
                        <div class="form-group row waktuwisata">
                            <label class="col-lg-3 col-form-label">
                                <u>LOKASI TUJUAN</u>
                            </label>
                        </div>
                        <div class="form-group row waktuwisata">
                            <label class="col-lg-1 col-form-label">lokasi</label>
                            <div class="col-lg-4">
                              <select name="lokasi_master_id" id="lokasi_master_id" class="form-control">
                                                                <option value="1">Jalur Pendakian Piong</option>
                                                                <option value="1">Jalur Pendakian Pancasila</option>
                                                                <option value="1">Jalur Pendakian Doro Ncanga</option>
                                                                <option value="1">Jalur Pendakian Kawinda To'o</option>
                                                                <option value="1">TWA Oi Marai</option>
                                                                <option value="1">Guest House Sanctuary Rusa</option>
                                                              </select>
                            </div>
                            <div class="col-lg-6">
                              <h2 class="mt-0 mb-0">Jumlah Pendaki : <span id="labelJumlahPendaki" class="text-danger"></span></h2>
                              <input type="hidden" name="jumlahpendaki" id="jumlahpendaki" value="">
                            </div>
                        </div>
                        <div id="formIsianRegistrasi">
                          <div class="form-group row">
                              <label class="col-lg-12 col-form-label">
                                  <u>DATA PESERTA</u><br>
                                  <i class="text-muted">*) Surat Keterangan Sehat yang dimaksud adalah Surat Vaksin</i>
                              </label>
                              <input type="hidden" class="form-control" id="count_peserta" name="count_peserta" value="1" />
                          </div>
                          <div class="form-group row">
                            <div class="table-responsive col-xs-12">
                              <table id="tbPeserta" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                      <th width="20px">No</th>
                                  <th width="200px">Nama</th>
                                  <th width="120px">Jenis Kelamin</th>
                                  <th width="120px">Warga Negara</th>
                                  <th width="120px">Asal Negara</th>
                                  <th width="120px">Usia</th>
                                  <th width="120px">Pekerjaan</th>
                                  <th width="240px">Kartu Identitas</th>
                                  <th width="240px">Surat Ket Sehat</th>                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <td>1</td>
                                      <td><input type="text" class="form-control" id="nama1" name="nama1" /></td>
                                      <td>
                                          <select name="jenis_kelamin1" id="jenis_kelamin1" class="form-control">
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                          </select>
                                      </td>
                                      <td>
                                          <select name="wn1" id="wn1" class="form-control wn">
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                          </select>
                                      </td>
                                      <td>
                                        <select name="asal1" id="asal1" class="form-control asal">
                                                                                <option value="Afrika Selatan">Afrika Selatan</option>
                                                                                <option value="Amerika Serikat">Amerika Serikat</option>
                                                                                <option value="Argentina">Argentina</option>
                                                                                <option value="Australia">Australia</option>
                                                                                <option value="Austria">Austria</option>
                                                                                <option value="Belanda">Belanda</option>
                                                                                <option value="Belgia">Belgia</option>
                                                                                <option value="Birma">Birma</option>
                                                                                <option value="Brazil">Brazil</option>
                                                                                <option value="Bulgaria">Bulgaria</option>
                                                                                <option value="Canada">Canada</option>
                                                                                <option value="Cheko">Cheko</option>
                                                                                <option value="China">China</option>
                                                                                <option value="Denmark">Denmark</option>
                                                                                <option value="Estonia">Estonia</option>
                                                                                <option value="Filipina">Filipina</option>
                                                                                <option value="Finlandia">Finlandia</option>
                                                                                <option value="Hongaria">Hongaria</option>
                                                                                <option value="Hongkong">Hongkong</option>
                                                                                <option value="India">India</option>
                                                                                <option value="Indonesia">Indonesia</option>
                                                                                <option value="Inggris">Inggris</option>
                                                                                <option value="Irlandia">Irlandia</option>
                                                                                <option value="Italia">Italia</option>
                                                                                <option value="Jepang">Jepang</option>
                                                                                <option value="Jerman">Jerman</option>
                                                                                <option value="Korea">Korea</option>
                                                                                <option value="Lithuania">Lithuania</option>
                                                                                <option value="Malaysia">Malaysia</option>
                                                                                <option value="Meksiko">Meksiko</option>
                                                                                <option value="Mesir">Mesir</option>
                                                                                <option value="Myanmar">Myanmar</option>
                                                                                <option value="New Zealand">New Zealand</option>
                                                                                <option value="Norwegia">Norwegia</option>
                                                                                <option value="Perancis">Perancis</option>
                                                                                <option value="Peru">Peru</option>
                                                                                <option value="Polandia">Polandia</option>
                                                                                <option value="Portugal">Portugal</option>
                                                                                <option value="Rusia">Rusia</option>
                                                                                <option value="Singapura">Singapura</option>
                                                                                <option value="Skotlandia">Skotlandia</option>
                                                                                <option value="Slovenia">Slovenia</option>
                                                                                <option value="Spanyol">Spanyol</option>
                                                                                <option value="Srilangka">Srilangka</option>
                                                                                <option value="Swedia">Swedia</option>
                                                                                <option value="Swiss">Swiss</option>
                                                                                <option value="Taiwan">Taiwan</option>
                                                                                <option value="Thailand">Thailand</option>
                                                                                <option value="Yunani">Yunani</option>
                                                                                <option value="Other">Other</option>
                                                                                </select>
                                      </td>
                                      <td>
                                          <select name="usia1" id="usia1" class="form-control">
                                                                                    <option value="1">< 19</option>
                                                                                    <option value="2">20 - 29</option>
                                                                                    <option value="3">30- 39</option>
                                                                                    <option value="4">40 - 49</option>
                                                                                    <option value="5">> 50</option>
                                                                                    </select>
                                      </td>
                                      
                                      <td>
                                          <select name="pekerjaan1" id="pekerjaan1" class="form-control">
                                                                                      <option value="1">PNS</option>
                                                                                      <option value="2">Guru</option>
                                                                                      <option value="3">Karyawan Swasta</option>
                                                                                      <option value="4">Wiraswasta</option>
                                                                                      <option value="5">Ibu Rumah Tangga</option>
                                                                                      <option value="6">Pelajar/Mahasiswa</option>
                                                                                      <option value="7">Lain-lain</option>
                                                                                    </select>
                                      </td>
                                      <td><input type="file" class="form-control" id="file_identitas1" name="file_identitas1" accept="image/*"  /></td>
                                      <td><input type="file" class="form-control" id="file_sehat1" name="file_sehat1" accept="image/*" /></td>
                                  </tbody>
                                 
                              </table>
                    <br>                   
                              <button class="btn btn-primary btn-ls"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
                              <button class="btn btn-warning btn-ls"><i class="fa fa-arrow-circle-down"></i>&nbsp;Lanjutkan</button>
                

                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label">
                                  <u>DATA KARCIS</u>
                              </label>
                              <input type="hidden" class="form-control" id="count_kegiatan" name="count_kegiatan" value="0" />
                              <input type="hidden" class="form-control" id="hari_biasa" name="hari_biasa" value="0" />
                              <input type="hidden" class="form-control" id="hari_libur" name="hari_libur" value="0" />
                          </div>
                          
                          <div class="form-group row">
                            <div class="table-responsive col-xs-12">
                              <table id="tbWisata" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                         <th width="20px">No</th>
                                  <th width="80px">Jumlah (orang)</th>
                                  <th width="280px">Kegiatan</th>
                                  <th width="80px">Lama (hari)</th>                                      
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                      
                                  </tbody>
                              </table>
                            </div>
                              <!-- <button id="btnAddKegiatan" type="button" class="btn btn-info"><i class="fa fa-plus"></i>&nbsp;Tambah Kegiatan</button> -->
                          </div>
                          <hr style="border-color: #3cd0cc">
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label">
                                  <u>Tagihan dikirim ke : </u>
                              </label>
                          </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label">Nama</label>
                              <div class="col-lg-4">
                                  <input type="text" class="form-control" name="nama_tagihan" id="nama_tagihan" value=""/>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label">Email</label>
                              <div class="col-lg-4">
                                  <input type="text" class="form-control" name="email" id="email" value=""/>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label">No. Telepon</label>
                              <div class="col-lg-4">
                                  <input type="text" class="form-control" name="no_telp" id="no_telp" value=""/>
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-1">
                                  <input class="" type="checkbox" id="cekBoxSelesai">
                              </div>
                              <div class="col-lg-11">
                                      <b>Saya menyetujui untuk melakukan kegiatan wisata dengan ikut menjaga kelestarian sumberdaya alam di Taman Nasional TAMBORA dan bersedia membayar tarif PNBP sebagaimana diatur dalam PP. No. 12 Tahun 2014.</b>                              </div>
                          </div>
                          <div class="alert alert-success" style="display: none;"></div>
                          <div class="form-group row">
                              <div class="col-lg-12 col-lg-offset-4">
                                    <button id="btnSelesai" type="button" class="btn btn-lg btn-success"><i class="fa fa-check"></i>&nbsp;Selesai</button>
                              </div>
                          </div>
                        </div>
                        <div id="alertKuotaHabis" class="alert alert-warning" style="display: none;">Kuota Habis</div>
                    </form>

                                   
                
                                
                            </div>
                            </div>


                </form> 
                
                </table>
    
              </div>
              <!-- /.card-body -->
            </div>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        alert('hello');
    });
</script> 

<script type="text/javascript">
    $(document).ready(function() {
        var flash = "{{ Session::has('sukses') }}";
        if(flash){
            var pesan = "{{ Session::get('sukses') }}"
            alert(pesan);
        }
        
    })
</script>
<script src="{{ asset('public/assets/js/jquery-3.1.1.min.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function() {
        var flash = "{{ Session::has('sukses') }}";
        if(flash){
            var pesan = "{{ Session::get('sukses') }}"
            alert(pesan);
        }
        
    })
</script>

@endsection
