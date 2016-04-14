<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Test;

class TestController extends Controller
{

    public function getTest()
    {
    	echo "hey";
       // $mongodb = \DB::connection('mongodb');
       // $table = $mongodb->table('entries')->get();

        //$users = \DB::collection('entries')->get();
        print_r("hello world");

        // $user = \DB::connection('mongodb')->collection('test')->get();
         $user = Test::all();
         // $user = Test::where('title', 'test')->first();
        // return  $user;
         // dd($user);
        return Test::where('title', 'testTitle')->first();
    }

}