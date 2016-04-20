<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Message;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
   
     $data = [
            'title' => 'Гостьова книга',
            'messages' => Message::latest()->paginate(2),
            'count' => Message::count(),
            ];
    
    
    

        return view('pages.messages.index',$data);
    }
    
    public function edit($id)
    {
        $data = [
            'title' => 'Гостьова книга (Редагування)',
            'pagetitle' => 'Гостьова книга (Редагування)',
            'messages' => Message::find($id),
        ];
        return view('pages.messages.edit',$data);
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:120|min:4',
            'email' => 'required|email|max:120|min:4',
            'homepahe' => 'max:120',
            'message' => 'max:1024',
            
        ]);
        
        $ipaddress = getenv('REMOTE_ADDR');
        $browserInfo = $request->server('HTTP_USER_AGENT');
        dd($browserInfo + $ipaddress);
        
        $name = $request['name'];
        $email = $request['email'];
        $homepage = $request['homepage'];
        $message = $request['message'];

        $usr = new User;
        
//        $msg = new Message;
//        $msg->name = $name;
//        $msg->email = $email;
//        $msg->homepage = $homepage;
//        $msg->message = $message;
//        $msg->save();
        
        $data = [
            'title' => 'Гостьова книга',
            'messages' => Message::latest()->paginate(2),
            'count' => Message::count(),
        ];
        
        return view('pages.messages.index',$data);
    }
    
   
    
}

