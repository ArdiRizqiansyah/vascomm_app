<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [            
            'products' => Product::latest()->paginate(10),
        ];

        return view('admin.pages.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Produk',
            'urlAction' => route('admin.product.store'),
        ];

        return view('admin.pages.product.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        try {
            DB::beginTransaction(); // begin transaction

            // simpan product
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
            ]);

            // simpan image
            if ($request->hasFile('image')) {
                $product->addMediaFromRequest('image')
                ->toMediaCollection('image');
            }
            
            DB::commit(); // commit transaction
            flash()->addSuccess('Produk berhasil ditambahkan');

            return back();
        } catch (\Throwable $th) {
            DB::rollBack(); // rollback transaction

            if (app()->isProduction()) {
                flash()->addError('Terjadi kesalahan pada server, coba lagi');
                return back()->withInput();
            } else {
                throw $th;
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit Produk',
            'urlAction' => route('admin.product.update', $id),
            'product' => Product::findOrFail($id),
        ];

        return view('admin.pages.product.form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        try {
            DB::beginTransaction(); // begin transaction

            // simpan product
            $product = Product::findOrFail($id);
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
            ]);

            // simpan image
            if ($request->hasFile('image')) {
                $product->addMediaFromRequest('image')
                ->toMediaCollection('image');
            }
            
            DB::commit(); // commit transaction
            flash()->addSuccess('Produk berhasil diubah');

            return back();
        } catch (\Throwable $th) {
            DB::rollBack(); // rollback transaction

            if (app()->isProduction()) {
                flash()->addError('Terjadi kesalahan pada server, coba lagi');
                return back()->withInput();
            } else {
                throw $th;
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction(); // begin transaction

            $product = Product::findOrFail($id);

            // hapus image
            $product->clearMediaCollection('image');

            // hapus product
            $product->delete();

            DB::commit(); // commit transaction
            flash()->addSuccess('Produk berhasil dihapus');

            return back();
        } catch (\Throwable $th) {
            DB::rollBack(); // rollback transaction

            if (app()->isProduction()) {
                flash()->addError('Terjadi kesalahan pada server, coba lagi');
                return back()->withInput();
            } else {
                throw $th;
            }
        }
    }
}
