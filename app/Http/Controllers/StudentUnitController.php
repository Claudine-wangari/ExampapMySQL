<?php

namespace App\Http\Controllers;

use App\StudentUnit;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentUnitController extends Controller
{

    // TODO: Updating the value of status and class for a unit
    public function updateColumns()
    {
        $query = StudentUnit::all();
        $marks = $query->marks;

       if($marks)
        {
            switch ($marks)
            {
                case ">= 40":
                    StudentUnit::update(['status' => 'pass']);
                    break;
                case ">=39 && <= 36":
                    StudentUnit::update(['status' => 'fail','class' => 'Retake']);
                    break;
                case "<36":
                    StudentUnit::update(['status' => 'fail','class' => 'Repeat']);
                    break;
            }
        }
       else
       {
           echo "";
       }


//        if($marks <= 40)
//        {
//            StudentUnit::update([
//               'status' => 'pass'
//            ]);
//        }
//        elseif
//        {
//            if($marks >=39 || $marks <=36)
//            {
//                StudentUnit::update([
//
//                ])
//            }
//        }

    }

    public function APIfailedUnits()
    {
        updateColumns();
        $failed =DB::table('student_units')->where('status','=', 'fail');
        if ($failed)
        {
            DB::table('student_units')
                ->join('', 'users.id', '=', 'contacts.user_id')
                ->join('orders', 'users.id', '=', 'orders.user_id')
                ->select('users.id', 'contacts.phone', 'orders.price')
                ->get();
        }



    }
}
