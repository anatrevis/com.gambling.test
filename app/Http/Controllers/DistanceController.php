<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Affiliate;


use Illuminate\Http\Request;

// Get Affiliates within 100km of distance from the selected office
class DistanceController extends Controller
{
    public function inviteAffiliates( Request $request) {
//        \Log::info(json_encode($request -> all()));

        // Gets the office id from the request
        $office_id = $request -> input('office_id');
        // Queries the object office that matches with the id from the request
        $selected_office = Office::where('office_id',$office_id) -> first();
        // Queries all the affiliate objects ordered by the affiliate_id
        $affiliates = Affiliate::orderBy('affiliate_id')->get();

        // Store all affiliates within 100km of distance from the office selected
        $invited_affiliates=array();
        foreach($affiliates as $affiliate){
            if($selected_office->distanceTo($affiliate->getAddress()) < 100){
                $invited_affiliates[] = $affiliate;
            }
        }

        // Returns the view with the sorted array of invited_affiliates
        return view('invited',  ['invited_affiliates' => $invited_affiliates]);
    }
}
