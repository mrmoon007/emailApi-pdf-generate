<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailApiController extends Controller
{

     /**
     * @OA\GET(
     *     path="/api/sendMail",
     *     tags={"email api"},
     *     summary="email api",
     *     description="email api",
     *     @OA\Response(response=200,description="email api"),
     *     @OA\Response(response=400, description="Bad request"),
     *     @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
        public function sendMail()
        {
        $data = [
            'name'=>'moon',
            'msgBody'=>'Welcome to Laravel Article'
        ];

        Mail::send('email',$data,function($mail){
                $mail->from('info@akij.net');
                $mail->to('moon@gmail.com');
                $mail->subject('Welcome E-mail');
        });
        
        return 'Successfully send';
        }
}
