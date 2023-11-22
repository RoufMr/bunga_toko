<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bunga;
use Illuminate\View\View;
class HomeController extends Controller
{
    public function home()
    {
        $bunga = Bunga::all();
        return view("landpage.home", compact("bunga"));
    }
    public function produk()
    {
        return view("landpage.produk");
    }
    public function order()
    {
        return view("landpage.order");
    }
    // public function show($id) {
    //     // Lakukan sesuatu dengan ID yang diberikan, misalnya mengambil data dari database
    //     $data = Bunga::find($id);

    //     // Kemudian kembalikan tampilan dengan data tersebut
    //     return view('landpage.show', ['data' => $data]);
    // }

    // public function show($id)
    // {
    //     //mengambil data berdasarkan id
    //     $barang = Bunga::findOrFail($id);

    //     //mengembalikan hasil dan menampilkan ke view
    //     return view('landpage.show', compact('barang'));

    // }
    // public function showpage($id) {
    //     // Lakukan sesuatu dengan ID yang diberikan, misalnya mengambil data dari database
    //     $data = Bunga::find($id);

    //     // Kemudian kembalikan tampilan dengan data tersebut
    //     return view('landpage.show', ['data' => $data]);
    // }
}
