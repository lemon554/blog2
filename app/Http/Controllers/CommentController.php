<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogComment;
//コメント投稿のコントローラー
class CommentController extends Controller
{
    
<<<<<<< HEAD
    public function fuck(){
        dd("fuck");
=======
    public function bbaaab2aaaa(){
        dd("更新2bbaaaaabbb");
>>>>>>> cecbfe1573a39ae5b9efb9dfad4cda1d72825aeb
                
            }
//コメント投稿
    public function postComment(Request $request)
    {
        $name = $request->input('name');

   
        $data = ([

            'article_id'  => $request->input('article_id'),
                
            'comment_content' => $request->input('comment_content'),
            'comment_name' => $request->input('comment_name'),
            'comment_date' => now(),
        ]);

        BlogComment::create($data);

        return redirect()->back();
    }
   

}
