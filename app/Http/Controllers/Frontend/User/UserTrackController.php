<?php

namespace App\Http\Controllers\Frontend\User;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\UserClicks;

class UserTrackController extends Controller
{
    //
    public function addProduct($id) {

            //  connection_status()
            $url=Product::where('id',$id)->first();
            if(auth()->check()){
                $userId=Auth()->user()->email;
                $finalUrl=$url->product_url.'&cv='.$id.'&dp='.$userId;
                $userClicks=new UserClicks();
                $userClicks->user_id=Auth()->user()->id;
                $userClicks->product_id=$id;
                // $userClicks->created_at=date_format(\Carbon\Carbon::now(), 'Y-m-d H:i:s');
                // $userClicks->updated_at=date_format(\Carbon\Carbon::now(), 'Y-m-d H:i:s');
                $userClicks->save();
                return redirect()->away($finalUrl);
            }else{
                $finalUrl=$url->product_url.'&cv='.$id;
                return redirect()->away($finalUrl);

            }

    }
}



// if(connection_status()==0){
//     $userLocation=var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
//     $userClicks->city=$userLocation['geoplugin_city'];
//     $userClicks->country=$userLocation['geoplugin_countryName'];
//     $userClicks->latitude=$userLocation['geoplugin_latitude'];
//     $userClicks->logitude=$userLocation['geoplugin_longitude'];
//     $userClicks->continentName=$userLocation['geoplugin_continentName'];


// }
