<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\booking;
use App\Http\Controllers\DB;

class booking extends Controller
{
    public function index(){
        $title = 'List Booking Online';
        $data = \DB::table('booking')
        ->orderBy('created_at', 'Asc')
        ->paginate(10);
        return view ('booking.booking_index', compact('title','data'));
    }

    public function add(){
        $title = 'Booking Tiket';
    
        return view('booking.booking_add',compact('title'));
    }
    public function store(Request $request) {
    
        $this->validate($request, [
            'nik'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'alamat'=>'required',
            'tanggal_mendaki'=>'required',
            'jalur_pendakian'=>'required',
            'pekerjaan'=>'required',
            'email'=>'required',
            'no_tlpn'=>'required',
            'tlp_keluarga'=>'required',
            'ktp'=>'required',
            'kts'=>'required',
            
    
        ]);
        $nik = $request->nik;
        $nama = $request->nama;
        $jk = $request->jk;
        $alamat = $request->alamat;
        $tanggal_mendaki = $request->tanggal_mendaki;
        $jalur_pendakian = $request->jalur_pendakian;
        $pekerjaan = $request->pekerjaan;
        $email = $request->keterangan;
        $no_tlpn = $request->tl;
        $tlp_keluarga = $request->keterangan;
        
        $ktp = $request->file('ktp');
        $kts = $request->file('kts');
    
        $destinationPath = 'uploads/suratmasuk'; //ini adalah untuk path/lokasi file yang akan diupload atau temppat folder nanti disimpan, 
                                                //yang perlu anda ketahui adalah semua destination path pada laravel 
                                                //akan diarahkan ke folder public/
        $file->move($destinationPath,$file->getClientOriginalName()); 
    
        \DB::table('booking')->insert([ 
            'nik'=>$nik,
            'nama'=>$nama,
            'jk'=>$asal_sjkurat,
            'alamat'=>$alamat,
            'tanggal_mendaki'=>$tanggal_mendaki,
            'jalur_pendakian'=>$jalur_pendakian,
            'pekerjaan'=>$pekerjaan,
            'email'=>$email,
            'no_tlpn'=>$no_tlpn,
            'tlp_keluarga'=>$tlp_keluarga,
            'ktp'=>$ktp->getClientOriginalName(),
            'kts'=>$kts->getClientOriginalName(),
            'created_at'=>date('y-m-d h:i:i'),
       
        ]);
        //ini perintah unutk menginput data, yang mengeksekusi semua data yang diinput ke form
    
        \Session::flash('sukses','Data Booking berhasil ditambah'); // perintah pada session flash() dengna nama sessionsa "sukses" dan isi sessionya sukses "Data surat masuk berhasil ditambah"
        return redirect('booking/index')->with('success', 'data berhasil disimpan');//ketika data berhasill diinput otomasti aplikasi ini akan ke menu suratmasuk index.

   

    }
}
