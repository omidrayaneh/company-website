<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Events\TicketEvent;
use App\File;
use App\Http\Controllers\Admin\FileController;
use App\Repositories\Eloquent\UploadFileRepository;
use Illuminate\Http\Request;
use App\Category;
use App\Ticket;
use App\User;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TicketsController extends Controller
{

    /**
     * @var UploadFileRepository
     */
    private $uploadFile;

    public function __construct(UploadFileRepository $uploadFile)
    {
        $this->middleware('auth');
        $this->uploadFile = $uploadFile;
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
            'file_id' => $request->input('file_id'),
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
        $ticket = Ticket::with('user','comments','category','file','comments.file')->where('ticket_id', $ticket_id)->first();
        return view('profile.show', compact('ticket'));
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
