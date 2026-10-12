<?php

namespace App\Http\Controllers;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller {
    public function index() {
        // Si es encargado ve todos, si es solicitante solo los suyos
        if(Auth::user()->role === 'encargado') {
            $loans = Loan::with(['user', 'equipment'])->get();
        } else {
            $loans = Loan::where('user_id', Auth::id())->with('equipment')->get();
        }
        return view('loans.index', compact('loans'));
    }
}