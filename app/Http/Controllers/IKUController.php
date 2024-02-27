<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sasaran;
use App\Models\IKU;

class IKUController extends Controller
{
    public function index()
    {
        $iku = IKU::orderBy('updated_at', 'desc')->get();
        $sasaran = Sasaran::all();

        return view('admin.IKU.index', [
            'IKU' => $iku,
            'Sasaran' => $sasaran,
        ]);
    }

    
}
