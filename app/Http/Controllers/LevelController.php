<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support

class LevelController extends Controller
{
    public function index()
    {
        //DB::insert('insert into m_level(level_code, level_nama, created_at) values(?, ?, ?)' , ['CUS', 
        //'Pelanggan', now()]);
        //return 'Insert data baru berhasil;'
        
        //$row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        //return 'Update data berhasi;. Jumlah data yang di update : ' . $row . 'baris';

        //$row = DB::delete('delete from m_level where level_code = ? ', [CUS]);
        //return 'DELETE data berhasil. Jumlah data yang dihapus : ' .$row . 'baris';

        $data = DB::select('select * drom m_level');
        return view('level ', ['data' => $data]);
    }
}
