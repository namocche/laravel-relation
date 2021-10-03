<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class TestController extends Controller
//  {
//       public function index() 
// {
//         $item = [
//             'content' => '自由に入力してください',
//         ];
//         return view('index', $item);
//     }
//     public function post(Request $request)
//     {
//         $content = $request->content;
//         $item = [
//             'content' => $content . 'と入力しましたね'
//         ];
//         return view('index', $item);
//     }
// }

{
    public function index(Request $request)
    {
        return view('index', ['txt' => 'フォームを入力']);
    }
    public function post(ClientRequest $request)
    {
        return view('index', ['txt' => '正しい入力です']);
    }
}

