<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamaController extends Controller
{
    public function index(){
        $peminjaman = Peminjaman::all();
    
        return response()->json([
            'status'=>200,
            'message'=>'Peminjaman berhasil diambil',
            'data'=>$peminjaman
        ],200);
    }

    public function store(Request $request){
       $request->validate(['tgl_pengembalian'=>'required|date|min:1','tgl_peminjaman'=>'required|string|max:50']);
       $peminjaman = Peminjaman::create($request->all());

       return response()->json([
        'status'=> 201,
        'messages'=>'Peminjaman berhasil ',
        'data'=> $peminjaman
       ],201);
    }

    public function show($id){
        $peminjaman= Peminjaman::find($id);

        if(!$peminjaman){
            return response()->json([
                'status' => 404,
                'messages' => 'Peminjaan tidak ditemukan',
                'data' => null
            ], 404);
        }
        return response()->json([
            'status' => 200,
            'messages' => 'peminjaman berhasil diambil.',
            'data' => $peminjaman
        ], 200);
    } 

    public function update(Request $request, $id){
        $peminjaman = Peminjaman::find($id);
        
        if (!$peminjaman){
            return response()->json([
                'status' => 404,
                'messages' => 'Peminjaman tidak ditemukan',
                'data' => null
            ], 404);
        }

        $peminjaman->update($request->all());

        return  response()->json([
            'status' => 200,
            'messages' => 'Peminjaman berhasil diperbarui.',
            'data' => $peminjaman
        ],200);
    } 
    public function destroy($id){
        $peminjaman = Peminjaman::find($id);
        
        if (!$peminjaman){
            return response()->json([
                'status' => 404,
                'messages' => 'Peminjaman tidak ditemukan',
                'data' => null
            ], 404);
        }
        
        $peminjaman->delete();
        return  response()->json([
            'status' => 200,
            'messages' => 'peminjaman berhasil dihapus.',
            'data' => $peminjaman
        ],200);
    } 
}