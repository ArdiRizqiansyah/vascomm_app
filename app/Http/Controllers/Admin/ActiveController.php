<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActiveController extends Controller
{
    public function active(Request $request)
    {
        DB::table($request->table)->where('id', $request->id)->update(['is_active' => $request->status]);

        return response($request->status);
    }
}
