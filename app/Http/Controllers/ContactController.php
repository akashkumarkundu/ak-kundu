<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the Contacts page.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'card_number' => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'inquiry_type' => 'nullable|string|max:100',
            'message' => 'required|string|min:10|max:5000',
        ]);

        return back()->with('success', 'Thank you for reaching out to Lumina Online Library! A research librarian will respond to your query within 4 hours.');
    }
}
