<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Support\Facades\DB;

class printProviderController extends Controller
{
    public function index(){
        $prov = DB::table('providers')->get();
        //$prov = DB::table('providers')->where('email', 'echivambo@psi.org.mz')->first();

        $pdf = PDF::loadView('printProvider', $prov);
        return $pdf->download('psimoz procurement.pdf');
    }
}
