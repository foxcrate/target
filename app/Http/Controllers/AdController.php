<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\Category;
use App\Models\Ad;
use App\Models\Setting;
use Carbon\Carbon;

class AdController extends Controller
{

    public function index($user_id){

        $the_user = User::find($user_id);
        $all_ads = $the_user->ads;

        return view('ad.index')->with(['all_ads'=>$all_ads , 'user_id'=>$the_user->id ]) ;
    }

    public function add_get(){
        //return "Alo";
        $all_categories = Category::all();
        $keywords = Setting::where('variable','keywords')->get();
        $keywords = explode("،",$keywords[0]->content);

        return view('ad.add')->with( [ 'all_categories'=>$all_categories , 'keywords'=>$keywords ] ) ;

    }

    public function add_post(Request $request){
        //return $request;
        //$keywords = implode( '،' ,$request->keywords ) ;
        //return $keywords;

        if ($request->hasFile('image')) {

            $extension = $request->file('image')->extension();
            $image = $request->image;
            $code = rand(1111111, 9999999);
            $image_new_name=time().$code ."ai".'.'.$extension;
            $image->move('uploads/ads/', $image_new_name);
            $the_image = 'uploads/ads/' . $image_new_name ;
        }
        else{
            $the_image = null;
        }

        $keywords = implode( '،' ,$request->keywords ) ;

        $the_ad = Ad::create([
            'title'=> $request->title,
            'keywords'=> $keywords,
            'end_date'=> $request->end_date,
            'image'=> $the_image,
            'user_id'=> auth()->user()->id,
        ]);

        $the_ad->categories()->attach( $request->categories );
        $the_ad->save();

        return redirect()->back()->with('message','Done Successfully');

    }

    public function recharge($ad_id){

        $the_ad = Ad::find($ad_id);

        $previous_end_date = new Carbon($the_ad->end_date);
        $new_end_date = $previous_end_date->addMonth();
        $the_ad->end_date = $new_end_date;
        $the_ad->save();
        return redirect()->back()->with('message','تم تجديد الإشتراك بنجاح');

    }

    public function delete($ad_id){

        $the_ad = Ad::find($ad_id);
        $x = $the_ad->delete();

        return redirect()->back();
    }

}
