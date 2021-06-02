<?php

namespace App\Providers;

use App\Comment;
use App\Company;
use App\Menu;
use App\Photo;
use App\Ticket;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('layouts.parts.*',function($view){
            $logo= Photo::where([['status',1],['place' , __('logo')]] )->first();
            $menus=  Menu::with(['childrenRecursive','posts'])
                ->where('parent_id', null)
                ->get();
            $view->with('logo',$logo);
            $view->with('menus',$menus);
        });

        View::composer('admin.*',function ($view){
            $unread_tickets =collect();
            foreach (auth()->user()->unreadNotifications as $notification) {
                if ($notification->type == 'App\Notifications\TicketAlert')
                    $unread_tickets->push($notification);
            }
            $view->with('unread_tickets',$unread_tickets);
        });
        View::composer('admin.*',function ($view){
            $unread_comments =collect();
            foreach (auth()->user()->unreadNotifications as $notification) {
                if ($notification->type == 'App\Notifications\CommentAlert')
                    $unread_comments->push($notification);
            }
            $view->with('unread_comments',$unread_comments);
        });
        View::composer('admin.*',function ($view){
            $unread_contacts =collect();
            foreach (auth()->user()->unreadNotifications as $notification) {
                if ($notification->type == 'App\Notifications\ContactAlert')
                    $unread_contacts->push($notification);
            }
            $view->with('unread_contacts',$unread_contacts);
        });
        View::composer('*',function($view){
            $company= Company::where('status',1)->first();
            $view->with('company',$company);
        });
        View::composer('profile.*',function($view){
            $closed_tickets = Ticket::where('status',0)->get();
            $view->with('closed_tickets',$closed_tickets);
        });
        View::composer('profile.*',function($view){
            $open_tickets = Ticket::where('status',1)->get();
            $view->with('open_tickets',$open_tickets);
        });
        View::composer('profile.*',function($view){
//            $admin_comment = Ticket::with('comments')->whereHas('comments',function ($q){
//               // $q->where('user_type','admin')->orWhere('user_type','manager');
//            })->where('status',1)->latest()->first();
            $admin_comment=  Comment::where([['user_type','admin']])->orWhere([['user_type','manager']])->get();
            $view->with('admin_comment',$admin_comment);
        });
        View::composer('profile.*',function($view){
//            $user_comment = Ticket::whereHas('comments',function ($q){
//                $q->where('end','=',0);
//            })->where('status',1)->latest()->first();
            $user_comment =Comment::where([['user_type','user']])->get();
            $view->with('user_comment',$user_comment);
        });
    }
}
