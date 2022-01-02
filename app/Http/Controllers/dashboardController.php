<?php

namespace App\Http\Controllers;

use App\Models\card;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $allCards = card::where('sale_end','>', now()->format('Y-m-d H:i:s'))->get();
        return view('dashboard.dashboard', compact('allCards'));
    }
}
