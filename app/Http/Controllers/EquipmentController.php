<?php

namespace App\Http\Controllers;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipmentController extends Controller {
    public function index() {
        $equipments = Equipment::with('category')->get();
        return view('dashboard', compact('equipments'));
    }
}