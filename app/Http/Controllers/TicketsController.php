<?php

namespace App\Http\Controllers;

use App\Events\TicketEvent;
use Illuminate\Http\Request;
use App\Category;
use App\Ticket;
use App\User;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tickets = Ticket::paginate(10);
        $categories = Category::all();

        return view('tickets.index', compact('tickets', 'categories'));
    }

    public function userTickets()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
        $categories = Category::all();

       // return view('tickets.user_tickets', compact('tickets', 'categories'));
        return view('profile.tickets', compact('tickets', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('profile.create', compact('categories'));
    }

    public function store(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'priority' => 'required',
            'message' => 'required'
        ]);
        $ticket = new Ticket([
            'title' => $request->input('title'),
            'user_id' => Auth::user()->id,
            'ticket_id' => strtoupper(Str::random(10)),
            'category_id' => $request->input('category'),
            'priority' => $request->input('priority'),
            'message' => $request->input('message'),
            'status' => 1,
        ]);

        $ticket->save();

        event(new TicketEvent($ticket));

        $mailer->sendTicketInformation(Auth::user()->email, $ticket);
        return redirect()->back()->with("status", "تیکت با شماره : #$ticket->ticket_id ایجاد شد.");
    }

    public function show($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $comments = $ticket->comments;

        $category = $ticket->category;

        return view('profile.show', compact('ticket', 'category', 'comments'));
    }

    public function close($ticket_id, AppMailer $mailer)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status = 0;

        $ticket->save();

        $ticketOwner = $ticket->user;

        $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

        return redirect()->back()->with("status", "پاسخ شما با موفقیت ثبت شد.");
    }
}
