<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AcceptFriendRequestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, User $friend)
    {
        $request->user()->pendingFriendsOf()->updateExistingPivot($friend, [
            'accepted' => true,
        ]);

        return back();
    }
}
