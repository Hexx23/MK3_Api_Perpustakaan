<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
    $bukus = Buku::all();

    return response()->json([
        'status' => 200,
        'messages' => 'Buku berhasil diambil.',
        'data' => $bukus
    ],200);
    }
    public function store(Request $request){
        $buku = Buku::create($request->all());

        return response()->json([
            'status' => 201,
            'messages'=> 'Buku berhasil dibuat',
            'data' => $buku
        ],201);
    }
    public function show($id){
        $buku= Buku::find($id);

        if(!$buku){
            return response()->json([
                'status' => 404,
                'messages' => 'Buku tidak ditemukan',
                'data' => null
            ], 404);
        }
        return response()->json([
            'status' => 200,
            'messages' => 'Buku berhasil diambil.',
            'data' => $buku
        ], 200);
    } 
    public function update(Request $request, $id){
        $buku = Buku::find($id);
        
        if (!$buku){
            return response()->json([
                'status' => 404,
                'messages' => 'Buku tidak ditemukan',
                'data' => null
            ], 404);
        }

        $buku->update($request->all());

        return  response()->json([
            'status' => 200,
            'messages' => 'Buku berhasil diperbarui.',
            'data' => $buku
        ],200);
    } 
    public function destroy($id){
        $buku = Buku::find($id);
        
        if (!$buku){
            return response()->json([
                'status' => 404,
                'messages' => 'Buku tidak ditemukan',
                'data' => null
            ], 404);
        }
        
        $buku->delete();
        return  response()->json([
            'status' => 200,
            'messages' => 'Buku berhasil dihapus.',
            'data' => $buku
        ],200);
    } 
}