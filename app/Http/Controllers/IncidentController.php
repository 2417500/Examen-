<?php

namespace App\Http\Controllers;
use App\Models\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncidentController extends Controller {
    public function index() {
        if(Auth::user()->role === 'encargado') {
            $incidents = Incident::with(['user', 'equipment'])->get();
        } else {
            $incidents = Incident::where('user_id', Auth::id())->with('equipment')->get();
        }
        return view('incidents.index', compact('incidents'));
    }
}