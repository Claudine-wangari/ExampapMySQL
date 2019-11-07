<?php

namespace App\Http\Controllers;

use App\StudentUnit;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class StudentUnitController extends Controller
{

 //Updating the value of status and class in table student_unit to determine what is to be displayed to the student.
    public function updateColumns()
    {
        $query = DB::table('student_units')->get('marks');


        $marks = StudentUnit::get();

        $marks->map(function ($item) use ($query)
        {
            if ($mark = $item->marks)
            {
                if ($mark >= (float)40)
                {
                    StudentUnit::where('marks', $mark)->update(['status' => 'pass']);
                }
                elseif ($mark <= (float)39 && $mark >= (float)36)
                {
                    StudentUnit::where('marks', $mark)->update(['status' => 'fail', 'class' => 'Retake']);
                }
                else
                {
                    StudentUnit::where('marks', $mark)->update(['status' => 'fail', 'class' => 'Repeat']);
                }
            }
            else
            {
                StudentUnit::where('marks', $mark)->update(['status' => 'Special','class' => 'Special' ]);
            }
        });
    }

    public function FailedUnits()
    {
        $this->updateColumns();
        $failed = StudentUnit::join('units','student_units.unit_code','=', 'units.unit_code')->select('student_units.student_number','units.unit_name','student_units.unit_code')->where('student_units.status', '!=', 'pass')->get();
        return response()->json($failed);
    }

    public function Repeats()
    {
        $this->updateColumns();
        $repeat = StudentUnit::join('units','student_units.unit_code','=', 'units.unit_code')->select('student_units.student_number','units.unit_name','student_units.unit_code')->where('student_units.class', '=', 'repeat')->get();
        return response()->json($repeat);
    }

    public function Retakes()
    {
        $this->updateColumns();
        $retake = StudentUnit::join('units','student_units.unit_code','=', 'units.unit_code')->select('student_units.student_number','units.unit_name','student_units.unit_code')->where('student_units.class', '=', 'retake')->get();
        return response()->json($retake);
    }

    public function Specials()
    {
        $this->updateColumns();
        $special = StudentUnit::join('units','student_units.unit_code','=', 'units.unit_code')->select('student_units.student_number','units.unit_name','student_units.unit_code')->where('student_units.status', '=', 'special')->get();
        return response()->json($special);
    }
}
