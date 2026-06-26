<?php

namespace App\Http\Controllers;

use App\Models\RedeemCode;
use Illuminate\View\View;

class CodeController extends Controller
{
    public function index(): View
    {
        // Mengambil data dari scope Model
        $activeCodes = RedeemCode::active()->orderBy('created_at', 'desc')->get();
        $expiredCodes = RedeemCode::expired()->orderBy('expired_at', 'desc')->get();

        return view('codes.index', compact('activeCodes', 'expiredCodes'));
    }
}