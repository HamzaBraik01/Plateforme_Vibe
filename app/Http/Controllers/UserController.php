<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $currentUserId = Auth::id(); // Get the ID of the authenticated user

        if ($query) {
            // Search users by pseudo or email, excluding the current user
            $users = User::where('id', '!=', $currentUserId)
                ->where(function ($q) use ($query) {
                    $q->where('pseudo', 'like', "%{$query}%")
                        ->orWhere('email', 'like', "%{$query}%");
                })
                ->get();
        } else {
            // Fetch all users except the current user if no query is provided
            $users = User::where('id', '!=', $currentUserId)->get();
        }

        // Return the dashboard view with the users
        return view('dashboard', compact('users'));
    }
}
