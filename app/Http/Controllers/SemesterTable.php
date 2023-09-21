<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemesterTable extends Controller
{
    public function index()
    {
        $data = DB::select('SELECT * FROM `semester_table`');
        return view('/semester-table', ['data' => $data]);
    }
}