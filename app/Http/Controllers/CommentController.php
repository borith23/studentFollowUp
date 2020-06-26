<?php

namespace App\Http\Controllers;
use App\User;
use App\Student;
use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   
    public function addComment(Request $request, $id){
        $user = User::find(Auth::id());
        $student = Student::find($id);
        $comment = new Comment;
        $comment->comment = $request->get('comment');
        $comment->user_id = $user->id;
        $comment->student_id = $student->id;
        $comment->save();
        return redirect('students/'.$student->id); 

    }

    // public function update(  Request $request, $id)
    // {   

    //     $user_id = Auth::id();
    //     $comment = Comment::where('id', $id)->where('user_id',$user_id)->first();
    //     if(!is_null($comment)){
    //         $comment->comment = $request->get('comment');
    //         $comment ->save();
    //     }
    //         return back();
    // }

    // public function delete($id) {

    //     $user_id = Auth::id();
    //     $comment=Comment::where('id', $id)->where('user_id',$user_id)->first(); 
    //     if(!is_null($comment)){
    //     $comment->delete();
    //     }
        
    //     return back();
    
    // }
}