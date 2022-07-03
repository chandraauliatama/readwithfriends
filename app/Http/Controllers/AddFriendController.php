<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AddFriendController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'email' => ['required','exists:users,email', Rule::notIn([auth()->user()->email])]
        ]);

        $request->user()->addFriend(User::whereEmail($request->email)->first());

        return back();
    }
}
