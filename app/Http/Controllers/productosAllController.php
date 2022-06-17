<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class productosAllController extends Controller
{
    
    public function productosall()
    {
        $array = array();
        $resultset=DB::select("SELECT * from productos");
        $array= $resultset;
            
        echo json_encode($array);
        }
}
