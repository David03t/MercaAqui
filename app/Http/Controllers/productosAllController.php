<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\producto;

class productosAllController extends Controller
{
    
    public function productosall()
    {
        $array = array();
        $resultset=DB::select("SELECT * from productos");
        $array= $resultset;
            
        echo json_encode($array);
        }
        public function facturasall()
        {
            $array = array();
            $resultset=DB::select("SELECT * FROM ctrl_ventas");
            $array= $resultset;
                
            echo json_encode($array);
            }
        public function vendedoresall()
        {
            $array = array();
            $resultset=DB::select("SELECT * FROM users");
            $array= $resultset;
                
            echo json_encode($array);
            }
            
}
