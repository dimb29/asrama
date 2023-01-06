<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use App\User;
use Session;
use App\Imports\UserImport;
use App\Imports\RuangImport;
use App\Imports\KasurImport;
use App\Exports\BookingExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/admin');
    }
    public function setusers()
    {
        $data = DB::table('users')->get();

        return view('admin/setusers',['data' => $data]);
    }
    public function modalusers($id)
    {
        $data = DB::table('users')->where('id',$id)->get();

        return json_encode($data);
    }
    public function updateusers(Request $request)
    {
        $data = DB::table('users')->where('id',$request->id)->update([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'telepon'   => $request->telepon,
            // 'jurusan'   => $request->jurusan,
            'prodi'     => $request->prodi,
        ]);

        // dd($request->id);

        return redirect()->back()->with('alert','Berhasil..!!');
    }
    public function importexcel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
 
        // upload ke folder file_siswa di dalam folder public
        $file->move('fileimport',$nama_file);
 
        // import data
        Excel::import(new UserImport, public_path('/fileimport/'.$nama_file));
 
        // notifikasi dengan session
        Session::flash('sukses','Data Users Berhasil Diimport!');
 
        // alihkan halaman kembali
        return redirect('admin/setusers');
    }
    public function setpesanan()
    {
        $data = DB::table('tb_booking')
        ->leftJoin('users','tb_booking.id_user','users.id')
        ->leftJoin('tb_kasur','tb_booking.id_kamar','tb_kasur.id_kasur')
        ->leftJoin('tb_ruangan','tb_kasur.id_ruang','tb_ruangan.id_ruang')
        ->leftJoin('ms_gedung','tb_ruangan.gedung_id','ms_gedung.id_gedung')
        ->leftJoin('ms_kampus','ms_gedung.id_kampus','ms_kampus.id')
        ->get();
        // dd($data);
        return view('admin/setpesanan',['data'=>$data]);
    }

    public function validatepesanan($id)
    {
        $data = DB::table('tb_booking')->where('id_booking', $id)->update([
            'validasi'  => 1,
        ]);
        return json_encode($data);
    }

    public function deletepesanan($id)
    {
        $datapesan = DB::table('tb_booking')->where('id_booking',$id)
            ->leftJoin('tb_kasur', 'tb_booking.id_kamar', 'tb_kasur.id_kasur')
            ->get();
        $idkasur = $datapesan[0]->id_kasur;
        $idruang = $datapesan[0]->id_ruang;
        DB::table('tb_kasur')->where('id_kasur', $idkasur)->update([
            'terpakai' => 0,
        ]);
        DB::table('tb_ruangan')->where('id_ruang', $idruang)->update([
            'terpakai' => 0,
        ]);

        $data = DB::table('tb_booking')->where('id_booking',$id)->delete();

        return json_encode($data);
    }

    public function batalvalidasi($id)
    {
        $data = DB::table('tb_booking')->where('id_booking', $id)->update([
            'validasi'  => 0,
        ]);
        return json_encode($data);
    }

    public function exportdata()
    {
        return Excel::download(new BookingExport, 'booking.xlsx');
    }

    public function setruang()
    {
        $data = DB::table('tb_ruangan')->get();

        return view('admin/setruang',['data' => $data]);
    }
    public function modalruang($id)
    {
        $data = DB::table('tb_ruangan')->where('id_ruang',$id)->get();

        return json_encode($data);
    }
    public function updateruang(Request $request)
    {
        $data = DB::table('tb_ruangan')->where('id_ruang',$request->id)->update([
            'nama_ruang'      => $request->name,
            'gedung_id'  => $request->id_gedung,
            'lantai'     => $request->lantai,
            'kapasitas'  => $request->kapasitas,
            'fasilitas'   => $request->fasilitas,
        ]);

        // dd($request->id);

        return redirect()->back()->with('alert','Berhasil..!!');
    }
    public function importruang(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
 
        // upload ke folder file_siswa di dalam folder public
        $file->move('fileimport',$nama_file);
 
        // import data
        Excel::import(new RuangImport, public_path('/fileimport/'.$nama_file));
 
        // notifikasi dengan session
        Session::flash('sukses','Data Ruang Berhasil Diimport!');
 
        // alihkan halaman kembali
        return redirect('admin/setruang');
    }
    public function importkasur(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
 
        // upload ke folder file_siswa di dalam folder public
        $file->move('fileimport',$nama_file);
 
        // import data
        Excel::import(new KasurImport, public_path('/fileimport/'.$nama_file));
 
        // notifikasi dengan session
        Session::flash('sukses','Data Kasur Berhasil Diimport!');
 
        // alihkan halaman kembali
        return redirect('admin/setruang');
    }

}
