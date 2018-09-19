<?php

namespace App\Http\Controllers;

use App\District;
use App\House;
use App\Job;
use App\ProfessionalProfile;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        //$users = DB::select('select * from member_details INNER JOIN regions on member_details.region_id = regions.id where
        //            (profession_id = ? AND region_id = ?) ', [4,1]);
        //dd($users);

        $region_total = Region::all()->count();
        $district_total = District::all()->count();
        $jobs_total = Job::all()->count();
        $all_jobs = Job::all();
        $sum = 0;
        foreach ($all_jobs as $all_job){
            $date1 = date("Y-m-d");
            $date2 = date('Y-m-d', strtotime($all_job["end_date"]));
            if ($date2 >= $date1) {
                $sum += 1;
            }
        }
        $available_jobs = $sum;

        //Check rental house
        $rental_check = House::where("house_category_id",1)->count();
        $rental_house = House::where("house_category_id",1)->inRandomOrder()->get()->first();
        $choice_1[0] = explode('*', $rental_house["photos"]);
        $picture = implode(' ', $choice_1[0]);

        //Check buy house
        $buy_check = House::where("house_category_id",2)->count();
        $buy_house = House::where("house_category_id",2)->inRandomOrder()->get()->first();
        $choice_2[0] = explode('*', $buy_house["photos"]);
        $picture1 = implode(' ', $choice_2[0]);

        //Check sell house
        $sell_check = House::where("house_category_id",3)->count();
        $sell_house = House::where("house_category_id",3)->inRandomOrder()->get()->first();
        $choice_3[0] = explode('*', $sell_house["photos"]);
        $picture2 = implode(' ', $choice_3[0]);

        $all_regions = Region::all();

//dd($buy_house);
        return view("index",
            compact("region_total","district_total","jobs_total","available_jobs","rental_house","rental_check",
                "buy_house","buy_check","sell_house","sell_check","picture","picture1","picture2","all_regions"));
    }
}
