<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{
    public function message_to_company( $receiver_id , $sender_id ){

        $the_receiver = User::find($receiver_id);
        $the_sender = User::find($sender_id);


        return view('message.new_message')->with([ 'the_receiver'=>$the_receiver->id , 'sender'=>$the_sender->id ]);

    }

    public function delete(Request $request){
        //return $request->ids;

        foreach( $request->ids as $id ){
            $the_message = Message::find($id);
            $the_message->delete();
        }

        return "Done";

    }

    public function post_message_to_company(Request $request){

        //return $request;
        if($request->has('file')){
            $extension = $request->file('file')->extension();
            $file = $request->file;
            $code = rand(1111111, 9999999);
            $file_new_name=time().$code ."mf".'.'.$extension;
            $file->move('uploads/messages/', $file_new_name);
            $filex = 'uploads/messages/' . $file_new_name ;
        }else{
            $filex = null ;
        }
        if($request->has('title')){
            $title = $request->title;
        }else{
            $title = null ;
        }

        // $the_company = Company::find( $request->receiver_id );
        //return $the_company;
        // $the_company_owner = User::find( $the_company->user->id );

        $new_message = Message::create([
            'sender_user_id'=>auth()->user()->id ,
            'receiver_user_id'=>$request->receiver_id,
            'title'=> $title,
            'file'=> $filex ,
            'text_content'=>$request->text_content,
        ]);

        return redirect()->back();

    }

    public function past_messages($sender_id , $receiver_id){
        //$x=[$sender_id,$receiver_id];
        //return $x ;
        $past_messages = Message::where('sender_user_id',$sender_id)->where('receiver_user_id',$receiver_id)->orderBy('id', 'desc')->get();
        return view('message.past_messages')->with('past_messages',$past_messages) ;
        $the_user = User::find(auth()->user()->id);
        // $the_user_conversation =

    }

    public function inbox(){

        $the_user = User::find(auth()->user()->id);
        $inbox_messages = $the_user->received_messages;
        //return $inbox_messages;
        return view('message.inbox')->with('inbox_messages',$inbox_messages);

    }

}
