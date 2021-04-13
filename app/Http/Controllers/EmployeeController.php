<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;


class EmployeeController extends Controller
{
    public function showEmployees()
    {
        $employee = Employee::all();
        return view('index', compact('employee'));
    }

    public function createPDF()
    {
        // retreive all records from db
        ini_set('max_execution_time', 180);
        $datas = Employee::all();

        // share data to view
        view()->share('employee', $datas);
        $pdf = PDF::loadView('pdf_view', compact('datas'));

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
