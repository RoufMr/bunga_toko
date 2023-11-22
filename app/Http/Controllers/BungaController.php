<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Bunga;
use Illuminate\Http\Request;
use Illuminate\view\View;
use Illuminate\Http\RedirectResponse;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bunga = Bunga::all();
        return view("dashboard.bunga.index", compact("bunga"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bunga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request,[
            'nama'=> 'required',
            'keterangan'=> 'required',
            'gambar' => 'required|image',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        // dd($request);
        //upload gambar
        // $gambar = $request->file('gambar');
        // $gambar->storeAs('public/bunga', $gambar->hashName());
        // upload gambar
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName(); // dapatkan nama file asli
        $gambar->storeAs('public/bunga', $namaFile);

    // tambah barang
    Bunga::create([
        'nama' => $request->nama,
        'keterangan' => $request->keterangan,
        'gambar' => $namaFile, // gunakan nama file asli
        'harga' => $request->harga,
        'stok' => $request->stok

        //tambah barang
        // Bunga::create([
        //     'nama' => $request->nama,
        //     'keterangan' => $request->keterangan,
        //     'gambar' => $gambar->hashName(),
        //     'harga' => $request->harga,
        //     'stok' => $request->stok
            ]);

        //redirect to index barang
        //return view('dashboard.barangs.create')
        //->withSuccess('Barang Berhasil Ditambahkan');
        return redirect()->route('bunga')->with('pesan', 'Data Berhasil Disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //mengambil data berdasarkan id
        $barang = Bunga::findOrFail($id);

        //mengembalikan hasil dan menampilkan ke view
        return view('dashboard.bunga.show', compact('barang'));
    }
    // public function show(): View
    // {
    //     // dd('show');
    //     return view('dashboard.bunga.show');
    // }

    /**
     * Show the form for editing the specified resource.
     */

    // public function edit(Bunga $id)
    // {
    //     // $data=Bunga::findOrFail($id);
    //     // return view('dashboard.bunga.edit',compact('data'));
    //     dd('cccc');
    // }

    public function edit(String $id): View
    {
        // get buku by ID
        $data = Bunga::findOrFail($id);

        // render view with buku
        return view('dashboard.bunga.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */

    // public function update(Request $request, String $id)
    // {
    //     $barang = $request->validate([
    //         'nama'=> 'required',
    //         'keterangan'=> 'required',
    //         'gambar' => 'required|image',
    //         'harga' => 'required',
    //         'stok' => 'required',
    //     ]);


    //     $barang= Bunga::findOrFail($id);

    //         $barang->update([
    //             'nama' => $request->nama,
    //             'keterangan' => $request->keterangan,
    //             'gambar' => $gambar->hashName(),
    //             'harga' => $request->harga,
    //             'stok' => $request->stok

    //         ]);
    //     return redirect()->route('bunga')->with('success','Data berhasil diubah!');
    // }
    public function update(Request $request, $id)
{
    // validate form
    $this->validate($request, [
        'nama'=> 'required',
        'keterangan'=> 'required',
        'gambar' => 'nullable|image', // gambar bersifat opsional pada pembaruan
        'harga' => 'required',
        'stok' => 'required',
    ]);

    // ambil data buku
    $buku = Bunga::findOrFail($id);

    // proses upload gambar jika ada
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName(); // dapatkan nama file asli
        $gambar->storeAs('public/bunga', $namaFile);

        // hapus gambar lama jika ada
        // Storage::delete('public/bunga/' . $buku->gambar);

        // update data buku dengan nama gambar baru
        $buku->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'gambar' => $namaFile,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);
    } else {
        // update data buku tanpa mengubah gambar
        $buku->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);
    }

    return redirect()->route('bunga')->with(['success' => 'Data Berhasil Diubah!']);
}

    // public function update(Request $request, string $id): RedirectResponse
    // {
    //     $this->validate($request, [
    //         'nama'=> 'required',
    //         'keterangan'=> 'required',
    //         'gambar' => 'required|image',
    //         'harga' => 'required',
    //         'stok' => 'required',
    //     ]);
    //     $gambar = $request->file('gambar');
    //     $gambar->storeAs('public/bunga', $gambar->hashName());

    //     $buku = Bunga::findOrFail($id);
    //     $buku->update([
    //         'nama' => $request->nama,
    //             'keterangan' => $request->keterangan,
    //             'gambar' => $gambar->hashName(),
    //             'harga' => $request->harga,
    //             'stok' => $request->stok
    //     ]);
    //     return redirect()->route('bunga')->with(['success' => 'Data Berhasil Diubah!']);
    // }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $bunga)
    {
        $barang = Bunga::findOrFail($bunga);
        $barang->delete();
        return redirect()->route('bunga')->with('Success', 'Data Berhasil Di Hapus');
    }
}
