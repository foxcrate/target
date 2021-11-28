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

        $the_video = Video::create([
            'title'=> $request->name,
            'link'=> $request->link,
            'company_id'=> $request->company_id,
        ]);

        return redirect()->back()->with('message','File Uploaded Successfully');

    }

}
