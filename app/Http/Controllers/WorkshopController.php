<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    // แสดงหน้า Workshop #HTML-FORM
    public function index()
    {
        return view('html101');
    }

    // รับค่าจาก Workshop #HTML-FORM
    public function store(Request $request)
    {
        // ทดสอบว่าข้อมูลเข้ามาจริงไหม (ถ้ายังมีปัญหา)
        // dd($request->all());

        return view('result', [
            'fname'   => $request->fname,
            'lname'   => $request->lname,
            'birth'   => $request->birth,
            'age'     => $request->age,
            'gender'  => $request->gender,
            'address' => $request->address,
            'color'   => $request->color,
            'music'   => $request->music,
        ]);
    }
}
