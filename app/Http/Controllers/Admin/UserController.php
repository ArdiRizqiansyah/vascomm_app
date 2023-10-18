<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'users' => User::latest()->paginate(10),
        ];

        return view('admin.pages.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'email|required|unique:users,email',
            'phone' => 'nullable',
            'is_active' => 'required|boolean',
        ]);

        try {
            DB::beginTransaction(); // begin transaction

            // simpan user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone ?? null,
                'is_active' => $request->is_active ?? false,
                'password' => '12345678',
            ]);

            // simpan role
            $user->assignRole('user');

            DB::commit(); // commit transaction

            flash()->addSuccess('Berhasil menambahkan user');
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
        if(request()->ajax()){
            $user = User::findOrFail($id);
            return response()->json($user);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'email|required|unique:users,email,'.$id,
            'phone' => 'nullable',
            'is_active' => 'required|boolean',
        ]);

        try {
            DB::beginTransaction(); // begin transaction

            // simpan user
            $user = User::findOrFail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone ?? null,
                'is_active' => $request->is_active ?? false,
            ]);

            DB::commit(); // commit transaction

            flash()->addSuccess('Berhasil mengubah user');
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

            $user = User::findOrFail($id);

            // hapus user
            $user->delete();

            DB::commit(); // commit transaction

            flash()->addSuccess('Berhasil menghapus user');
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
