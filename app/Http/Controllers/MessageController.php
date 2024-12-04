<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; // Make sure to import your Message model

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a new message instance and save it to the database
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->message, // Assuming 'content' is the column name in your database
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
