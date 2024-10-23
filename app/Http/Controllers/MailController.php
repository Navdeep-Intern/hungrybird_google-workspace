<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'workmail' => 'required|email|max:255',
            'mobileno' => 'required|numeric|digits:10',
            'nooflicense' => 'required|numeric',
        ]);

        // Prepare the email data
        $data = [
            'name' => $request->name,
            'workmail' => $request->workmail,
            'mobileno' => $request->mobileno,
            'nooflicense' => $request->nooflicense,
        ];

        // Send the email directly
        Mail::raw("New Contact Submission\n\n" .
            "Name: {$data['name']}\n" .
            "Work Email: {$data['workmail']}\n" .
            "Mobile No: {$data['mobileno']}\n" .
            "No. of licenses: {$data['nooflicense']}", function ($message) use ($data) {
                $message->from($data['workmail'], $data['name']);
                $message->to('intern@hungrybirdit.com');
                $message->subject('New Contact Submission');
            });

        return back()->with('success', 'Email sent successfully!');
    }
}
