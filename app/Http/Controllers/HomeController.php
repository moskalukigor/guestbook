<?php

namespace App\Http\Controllers;

use Illuminate\Cookie;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Message;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $type = '';
        $ascordesc = '';    
        switch($request['sort'])
        {
           case 'id_desc': $type = 'id'; $ascordesc = 'desc'; break;
           case 'name_desc': $type = 'name'; $ascordesc = 'desc';  break;
           case 'email_desc': $type = 'email'; $ascordesc = 'desc';  break;
           case 'created_at_desc': $type = 'created_at'; $ascordesc = 'desc';  break;
           case 'id_asc': $type = 'id'; $ascordesc = 'asc'; break;
           case 'name_asc': $type = 'name'; $ascordesc = 'asc';  break;
           case 'email_asc': $type = 'email'; $ascordesc = 'asc';  break;
           case 'created_at_asc': $type = 'created_at'; $ascordesc = 'asc';  break;
           default: $type = 'id'; $ascordesc = 'desc';
        }
        
//        $response = new \Illuminate\Http\Response();
//      $response->withCookie(cookie('name', 'my value', 60));
//      return $response;
        
        
     $data = [
            'title' => 'Гостьова книга',
            'messages' => Message::orderBy($type,$ascordesc)->paginate(15),
            'count' => Message::count(),
            ];
     
        return view('pages.messages.index',$data);
    }
    
//    public function sort()
//    {
//
//     
//        
//     $data = [
//            'title' => 'Гостьова книга',
//            'messages' => Message::orderBy($type,$ascordesc)->paginate(2),
//            'count' => Message::count(),
//            ];
//     
//        return view('pages.messages.index',$data);
//    }
//    
  
   
    
}

