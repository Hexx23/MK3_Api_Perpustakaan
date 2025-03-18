<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
class LaporanController extends Controller
{
    public function index(){
        $laporan = Laporan::all();
    
        return response()->json([
            'status'=>200,
            'message'=>'Laporan berhasil diambil',
            'data' => $laporan
        ],200);
    }

    public function store(Request $request){
       $request->validate(['jumlah_dipinjam'=>'required|integer|min:1','periode'=>'required|string|max:50']);
       $laporan = Laporan::create($request->all());

       return response()->json([
        'status'=> 201,
        'messages'=>'Laporan berhasil dibuat',
        'data'=> $laporan
       ],201);
    }

    public function show($id){
        $laporan= Laporan::find($id);

        if(!$laporan){
            return response()->json([
                'status' => 404,
                'messages' => 'Laporan tidak ditemukan',
                'data' => null
            ], 404);
        }
        return response()->json([
            'status' => 200,
            'messages' => 'Laporan berhasil diambil.',
            'data' => $laporan
        ], 200);
    } 

    public function update(Request $request, $id){
        $laporan = Laporan::find($id);
        
        if (!$laporan){
            return response()->json([
                'status' => 404,
                'messages' => 'Laporan tidak ditemukan',
                'data' => null
            ], 404);
        }

        $laporan->update($request->all());

        return  response()->json([
            'status' => 200,
            'messages' => 'Laporan berhasil diperbarui.',
            'data' => $laporan
        ],200);
    } 
    public function destroy($id){
        $laporan = Laporan::find($id);
        
        if (!$laporan){
            return response()->json([
                'status' => 404,
                'messages' => 'Laporan tidak ditemukan',
                'data' => null
            ], 404);
        }
        
        $laporan->delete();
        return  response()->json([
            'status' => 200,
            'messages' => 'Laporan berhasil dihapus.',
            'data' => $laporan
        ],200);
    } 
}