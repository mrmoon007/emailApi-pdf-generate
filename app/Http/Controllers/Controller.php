<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   
/**
 * @OA\Info(
 *     description="API Documentation - iMarine",
 *     version="1.0.0",
 *     title="iMarine API Documentation",
 *     @OA\Contact(
 *         email="akash.corp@akij.net"
 *     ),
 *     @OA\License(
 *         name="@imarine.akij.net",
 *         url="https://imarine.akij.net"
 *     )
 * )
 */

     /**
     * @OA\Get(
     *     path="/projects",
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     */
    
}
