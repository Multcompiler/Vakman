<?php

namespace App\Http\Controllers;

use App\Professional;
use App\ProfessionalProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function get_list(){
        $data = Professional::all();
        return response()->json($data);
    }
    public function get_list_professionals($professional_id,$region_id){
        $data = DB::select('select * from member_details INNER JOIN regions on member_details.region_id = regions.id where 
                    (profession_id = ? AND region_id = ?) ', [$professional_id,$region_id]);

        return response()->json($data);
    }
}
