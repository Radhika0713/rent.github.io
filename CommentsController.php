<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentsController extends Controller
{
  public function data()
    {
	$c=Comment::all();
	return view('Comment',compact('c'));
    } 

   public function formdata()
{
request()->validate(
['Name'=>'required',
'Comment'=>'required',

]);
	$c=new Comment();
	$c->id=request('Name');
	$c->title=request('Comment');
	
	return redirect('Comment');
}

}
