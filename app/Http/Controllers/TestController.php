<?php

namespace App\Http\Controllers;

use App\Models\testModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $m=Carbon::now()->format('Ym');
        //return $m;
        //$date=uniqid($m);
         $ticketNumber=testModel::orderBy('created_at','DESC')->first();
         $ticketNumber2=$ticketNumber->order_no;
        //$ticketNumber1=settype($ticketNumber2, "integer");
        //return $ticketNumber2+1;
        $moon=substr($ticketNumber2,6);
        $date= $m.str_pad($moon + 1, 4, "0", STR_PAD_LEFT);
        $value=testModel::create([
            'order_no'=>$date,

        ]);
        return $value;
    }
}
