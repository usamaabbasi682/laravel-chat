<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Enums\RoleEnum;
use App\Models\Message;
use App\Models\Conversation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chatUsers = Conversation::with('participant','initiator')->orderByDesc(
            Message::select('created_at')
            ->whereColumn('conversation_id', 'conversations.id')
            ->orderByDesc('created_at')
            ->limit(1)
        )->where(function($query) {
            $query->where('initiator_id', auth()->user()->id)
                ->orWhere('participant_id', auth()->user()->id);
        })->get();

        $participantIds = $chatUsers->pluck('participant')->flatten()->pluck('id')->filter()->unique();
        $iniiatorIds = $chatUsers->pluck('initiator')->flatten()->pluck('id')->filter()->unique();

        if (auth()->user()->hasRole(RoleEnum::DEVELOPER->value)) {
            $users = User::role(RoleEnum::AGENT->value)
            ->whereNotIn('id', $participantIds)
            ->whereNotIn('id', $iniiatorIds)
            ->get();
        } else {
            $users = User::role(RoleEnum::DEVELOPER->value)
            ->whereNotIn('id', $participantIds)
            ->whereNotIn('id', $iniiatorIds)
            ->get();
        }

        return view('home', compact('chatUsers', 'users'));
    }
}
