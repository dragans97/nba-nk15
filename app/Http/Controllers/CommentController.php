<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Team;
use App\Comment;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;



class CommentController extends Controller
{
    public function store(Team $team, CommentRequest $request)

    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $comment = $team->comments()->create($data);
        
        Mail::to($team->email)->send(new CommentReceived($comment));

        return back();
    }
}
