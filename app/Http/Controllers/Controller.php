<?php

namespace App\Http\Controllers;



use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\datadiri;
use App\Models\User;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function datadiri_tabel(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nama_lengkap' => 'required|string',
            'alamat_ktp' => 'required|string',
            'alamat_lengkap_saat_ini' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'propinsi_ktp' => 'required|string',
            'nomor_telepon' => 'required|string',
            'nomor_hp' => 'required|string',
            'email' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'tempat_lahir' => 'required|string',
            'kota_kabupaten' => 'required|string',
            'propinsi' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'status_menikah' => 'required|string',
            'agama' => 'required|string',

        ]);

        // Create a new datadiri instance
        $datadiri = new datadiri;

        // Assign values from the request to the datadiri instance
        $datadiri->nama_lengkap = $request->input('nama_lengkap');
        $datadiri->alamat_ktp = $request->input('alamat_ktp');
        $datadiri->alamat_lengkap_saat_ini = $request->input('alamat_lengkap_saat_ini');
        $datadiri->kecamatan = $request->input('kecamatan');
        $datadiri->kabupaten = $request->input('kabupaten');
        $datadiri->propinsi_ktp = $request->input('propinsi_ktp');
        $datadiri->nomor_telepon = $request->input('nomor_telepon');
        $datadiri->nomor_hp = $request->input('nomor_hp');
        $datadiri->email = $request->input('email');
        $datadiri->kewarganegaraan = $request->input('kewarganegaraan');
        $datadiri->tanggal_lahir = $request->input('tanggal_lahir');
        $datadiri->tempat_lahir = $request->input('tempat_lahir');
        $datadiri->kota_kabupaten = $request->input('kota_kabupaten');
        $datadiri->propinsi = $request->input('propinsi');
        $datadiri->jenis_kelamin = $request->input('jenis_kelamin');
        $datadiri->status_menikah = $request->input('status_menikah');
        $datadiri->agama = $request->input('agama');
        

        // Save the datadiri instance to the database
        $datadiri->save();

        // Optionally, you can redirect to a specific page after saving
        return redirect()->route('dafar-mahasiswa');
    }

    public function tambahdatadiri()
    {
        // Assuming you want to retrieve all data from the database
        $datadiris = datadiri::all();

        return view('daftar-mahasiswa', compact('datadiri'));
    }
    // app\Http\Controllers\CalonMahasiswaController.php


public function index()
{
    $users = User::all();

    return view('daftar-mahasiswa', ['users' => $users]);
}

}


   
