<?php

namespace App\Http\Controllers;

use App\House;
use App\HouseProcess;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view("search");
    }
    public function rent_view(){
        return view("search");
    }
    public function view_single_room($category,$id){
        $house_category_id = HouseProcess::where("name",$category)->first();
        $select_room_details = House::where("house_category_id",$house_category_id->id)->where("id",$id)->first();

        dd($select_room_details);
        return view("search");
    }
}
