<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Auth, Hash;
use MPDF, PDF;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        $data = DB::table('ms_gedung')
                ->leftJoin('ms_kampus','ms_gedung.id_kampus','ms_kampus.id')
        
                ->leftJoin('tb_images', 'ms_gedung.id_gedung', 'tb_images.id_parent')
                ->groupBy('id_gedung')

                ->select('ms_gedung.id_gedung','ms_kampus.id','ms_gedung.nama_gedung','ms_kampus.nama_kampus','ms_kampus.alamat','ms_kampus.kota','ms_kampus.kodepos','ms_kampus.telepon','ms_kampus.email', 'url')
                ->get();
        $data2 = DB::table('ms_gedung')
        ->leftJoin('tb_images', 'ms_gedung.id_gedung','tb_images.id_parent')
        ->groupBy('id_parent')
        ->get();
        if(Auth::User() != ""){
            $usersID = Auth::user()->id;
            $data3 = DB::table('users')->where('id',$usersID)->get();
            if (Auth::user()->first_time_login == 0) {
                $first_time_login = true;
                Auth::user()->first_time_login = 1; // Flip the flag to true
                Auth::user()->save(); // By that you tell it to save the new flag value into the users table

            }else{

                $first_time_login = false;
                
            }
        }else{
            $first_time_login = false;
            $data3 = ['name' => ''];
        }

        return view('users/home',['data'=>$data, 'data2' => $data2, 'data3' => $data3,'first_time_login' =>$first_time_login]); 
        dd($data);
    }
    public function updatebiodata(Request $request)
    {
        $userID = Auth::user()->id;
        $data = DB::table('users')->where('id',$userID)->update([
            'name'      => $request->name,
            'tp_lahir'  => $request->t_lahir,
            'tgl_lahir'  => $request->tgl_lahir,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'telepon'   => $request->telepon,
            'alamat_mhs'=> $request->alamat,
            'nama_ayah'  => $request->ayah,
            'nama_ibu'  => $request->ibu,
            'alamat_ortu'  => $request->alamat_ortu,
            'notelp_ortu'  => $request->telp_ortu,
            'goldar'  => $request->goldar,
            'masalah_kes'  => $request->masalah_kes,
            'kons_obat'  => $request->obat,
            'alergi_mkn'  => $request->alergi_mkn,
        ]);

        // dd($request->id);

        return redirect()->back()->with('alert','Berhasil..!!');
    }

    public function profil(){
        $usersID = Auth::user()->id;
        $data = DB::table('users')->where('id',$usersID)->get();

        return view('users.profil',['data' => $data]);
    }

    public function detail(Request $request)
    {
        $data = DB::table('ms_gedung')
        ->leftJoin('tb_images','ms_gedung.id_gedung','tb_images.id_parent')
        ->where('tb_images.id_parent',$request->idged)
        ->get();

        $data2 = DB::table('ms_gedung')
        ->leftJoin('tb_images','ms_gedung.id_gedung','tb_images.id_parent')
        ->where('tb_images.id_parent',$request->idged)
        ->select('url')
        ->first();

        $data3 = DB::table('ms_gedung')
        ->leftJoin('ms_kampus','ms_gedung.id_kampus','ms_kampus.id')
        ->where('ms_gedung.id_gedung',$request->idged)
        ->get();

        // $kamar = DB::table('tb_kasur')->where('id_kasur','AGA0110101')->get();
        // $kamarID = $kamar[0]->terpakai;

        
        return view('users/detail',['data'=>$data,'data2'=>$data2,'data3'=>$data3]);
        // dd($kamarID);
    }
    public function getdataruang($id)
    {
        // $userID = Auth::user()->id;
        $data4 = DB::table('tb_ruangan')
        ->leftJoin('tb_images','tb_ruangan.id_ruang','tb_images.id_parent')
        ->where('tb_ruangan.gedung_id',$id)
        ->groupBy('id_ruang')
        ->get();

        return json_encode($data4);
    }
    public function getpesanan($id)
    {
        $data = DB::table('tb_ruangan')
        ->leftJoin('tb_kasur','tb_ruangan.id_ruang','tb_kasur.id_ruang')
        ->where('tb_ruangan.id_ruang',$id)
        ->get();
        return json_encode($data);
    }
    public function getinforuang($id)
    {
        $data = array();

        $data['first'] = DB::table('tb_ruangan')
        ->leftJoin('tb_images','tb_ruangan.id_ruang','tb_images.id_parent')
        ->where('tb_images.id_parent', $id)
        ->get();

        $data['second'] = DB::table('tb_ruangan')
        ->leftJoin('ms_gedung','tb_ruangan.gedung_id','ms_gedung.id_gedung')
        ->where('tb_ruangan.id_ruang',$id)
        ->get();
        
        return json_encode($data);
        // dd($data2);
    }
    public function pemesanan($id)
    {
        $userID = Auth::user()->id;
        $datauser = DB::table('users')->where('id',$userID)->get();
        if ($datauser[0]->status == 1) {
            $kamar = DB::table('tb_kasur')->where('id_kasur', $id)->get();
            $kamarjml = $kamar[0]->terpakai + 1;
            $ruang = DB::table('tb_kasur')
            ->leftJoin('tb_ruangan','tb_kasur.id_ruang','tb_ruangan.id_ruang')
            ->where('id_kasur', $id)
            ->get();
            $ruangjml = $ruang[0]->terpakai + 1;
            DB::table('tb_booking')->insert([
                'id_user'   => $userID,
                'id_kamar'  => $id,
            ]);
            $data = DB::table('tb_kasur')->where('id_kasur',$id)->update(['terpakai' => $kamarjml]);
            DB::table('tb_ruangan')->where('id_ruang',$ruang[0]->id_ruang)->update(['terpakai' => $ruangjml]);
            DB::table('users')->where('id',$userID)->update(['status' => 0]);
        }else{
            
        }

        return json_encode($data);
    }
    public function terpesan($id)
    {
        $data = DB::table('tb_booking')
        ->leftJoin('users','tb_booking.id_user','users.id')
        ->where('id_kamar',$id)
        ->get();
        return json_encode($data);
    }

    public function daftpesan()
    {
        $userID = Auth::user()->id;
        $data = DB::table('tb_booking')
        ->leftJoin('users', 'tb_booking.id_user','users.id')
        ->leftJoin('tb_kasur', 'tb_booking.id_kamar', 'tb_kasur.id_kasur')
        ->leftJoin('tb_ruangan', 'tb_kasur.id_ruang', 'tb_ruangan.id_ruang')
        ->leftJoin('ms_gedung', 'tb_ruangan.gedung_id', 'ms_gedung.id_gedung')
        ->leftJoin('ms_kampus', 'ms_gedung.id_kampus', 'ms_kampus.id')
        ->leftJoin('tb_images', 'tb_ruangan.id_ruang', 'tb_images.id_parent')
        ->where('id_user', $userID)
        ->groupBy('id_parent')
        ->get();

        //  $data2 = DB::table('tb_booking')
        // ->leftJoin('tb_kasur', 'tb_booking.id_kamar', 'tb_kasur.id_kasur')
        // ->leftJoin('tb_ruangan', 'tb_kasur.id_ruang', 'tb_ruangan.id_ruang')
        // ->leftJoin('tb_images', 'tb_ruangan.id_ruang', 'tb_images.id_parent')
        // ->groupBy('id_parent')
        // ->first();

        return view('users.dafbook', ['data'=>$data]);
        dd($data);
    }
    public function cetak_pdf()
    {
        $userID = Auth::user()->id;
        $data = DB::table('tb_booking')
        ->leftJoin('users', 'tb_booking.id_user','users.id')
        ->leftJoin('tb_kasur', 'tb_booking.id_kamar', 'tb_kasur.id_kasur')
        ->leftJoin('tb_ruangan', 'tb_kasur.id_ruang', 'tb_ruangan.id_ruang')
        ->leftJoin('ms_gedung', 'tb_ruangan.gedung_id', 'ms_gedung.id_gedung')
        ->leftJoin('ms_kampus', 'ms_gedung.id_kampus', 'ms_kampus.id')
        ->leftJoin('tb_images', 'tb_ruangan.id_ruang', 'tb_images.id_parent')
        ->where('id_user', $userID)
        ->groupBy('id_parent')
        ->get(); 
        $n1 = $data[0]->id_user;
        $n2 = $data[0]->id_kamar;
        $pdfFilePath = $n1."".$n2;

        // set_time_limit(300);
        $pdf = PDF::loadview('users.buktipesan',['data' => $data]);
        $pdf->setPaper('A4','potrait');
        // $pdf->render();
        // return $pdf->stream($pdfFilePath.'.pdf');
        return view('users.buktipesan',['data' => $data]);
        // dd($pdfFilePath);
    }
}
