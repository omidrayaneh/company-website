<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Mailers\AppMailer;
use Illuminate\Http\Request;
use App\Category;
use App\Ticket;
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
        $unreads =collect();
        foreach (auth()->user()->unreadNotifications as $notification) {
            if ($notification->type == 'App\Notifications\TicketAlert')
                $unreads->push($notification);
        }
        $categories = Category::all();
        return view('admin.tickets.index', compact('tickets', 'categories','unreads'));
    }

    public function edit($id)
    {

        $ticket = Ticket::with('comments','user')->findOrFail($id);
        return view('admin.tickets.edit',compact(['ticket']));
    }

    public function update(Request $request,$id)
    {

    }

    public function userTickets()
    {
//        $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
//        $categories = Category::all();
//
//        return view('tickets.user_tickets', compact('tickets', 'categories'));
    }

    public function create()
    {
//        $categories = Category::all();
//
//        return view('tickets.create', compact('categories'));
    }

    public function store(TicketRequest $request, AppMailer $mailer)
    {
//        $inputs = $request->only(['title', 'category', 'status']);
//        $ticket = new Ticket([
//            'title' => $inputs('title'),
//            'user_id' => Auth::user()->id,
//            'ticket_id' => strtoupper(Str::random(10)),
//            'category_id' => $request->input('category'),
//            'priority' => $request->input('priority'),
//            'message' => $request->input('message'),
//            'status' => 1,
//        ]);
//
//        $ticket->save();
//
//     //   $mailer->sendTicketInformation(Auth::user(), $ticket);
//        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
    }

    public function show($ticket_id)
    {
//        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();
//
//        $comments = $ticket->comments;
//
//        $category = $ticket->category;

      //  return view('tickets.show', compact('ticket', 'category', 'comments'));
    }

    public function close($ticket_id, AppMailer $mailer)
    {
//        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();
//
//        $ticket->status = 0;
//
//        $ticket->save();
//
//        $ticketOwner = $ticket->user;
//
//       // $mailer->sendTicketStatusNotification($ticketOwner, $ticket);
//
//        return redirect()->back()->with("status", "تیکت بسته شد.");
    }
}
