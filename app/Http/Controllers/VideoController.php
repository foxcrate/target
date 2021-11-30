<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Video;

class VideoController extends Controller
{
    public function index($company_id){

        $the_company = Company::find($company_id);
        $all_videos = $the_company->videos;
        //return $all_images;
        return view('video.index')->with(['all_videos'=>$all_videos , 'company_id'=>$the_company->id ]) ;
    }

    public function add(Request $request){

        $url = $request->link;
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        //return $my_array_of_vars['v'];

        $the_video = Video::create([
            'title'=> $request->name,
            'link'=>'https://www.youtube.com/embed/' . $my_array_of_vars['v'],
            'company_id'=> $request->company_id,
        ]);

        return redirect()->back()->with('message','File Uploaded Successfully');

    }

    public function delete($video_id){

        $the_video = Video::find($video_id);

        $the_video->delete();
        return redirect()->back();
    }

}
