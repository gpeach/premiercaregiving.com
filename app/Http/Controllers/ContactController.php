<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:10',
        ]);

        // Build the message body
        $body = "Message: {$validated['message']}\n\n";
        if (!empty($validated['email'])) {
            $body .= "Email: {$validated['email']}\n";
        }
        if (!empty($validated['phone'])) {
            $body .= "Phone: {$validated['phone']}\n";
        }

        Mail::raw($body, function ($message) use ($validated) {
            $message->to('dan@premiercaregiving.com')
                ->subject('New Contact Message from ' . $validated['name']);

            if (!empty($validated['email'])) {
                $message->replyTo($validated['email']);
            }
        });

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
