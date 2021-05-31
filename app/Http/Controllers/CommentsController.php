<?php

namespace App\Http\Controllers;

use App\Events\CommentEvent;
use Illuminate\Http\Request;
use App\User;
use App\Ticket;
use App\Comment;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function postComment(Request $request, AppMailer $mailer)
    {


        $ticket = Ticket::where('id', $request->input('ticket_id'))->first();
        $ticket->status = 1;
        $ticket->save();

        $this->validate($request, [
            'comment' => 'required'
        ]);

        $comment = Comment::create([
            'ticket_id' => $request->input('ticket_id'),
            'user_id' => Auth::user()->id,
            'user_type' => Auth::user()->role,
            'comment' => $request->input('comment'),
        ]);

        // send mail if the user commenting is not the ticket owner
        if ($comment->ticket->user->id !== Auth::user()->id) {
            $mailer->sendTicketComments($comment->ticket->user, Auth::user(), $comment->ticket, $comment);
        }
        //send comment event listener notification
        if (\auth()->user()->role != 'admin' || \auth()->user()->role != 'admin')
           event(new CommentEvent($comment));
        return redirect()->back()->with("status", "پاسخ شما با موفقیت ثبت شد.");
    }
}
