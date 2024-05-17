<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show the form
    public function index()
    {
        return view('index');
    }

    // Handle the form submission
    public function handleForm(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Process the request (e.g., save data to database, send an email, etc.)
        $data = $request->all();

        // For demonstration, we'll just return the data
        return response()->json(['message' => 'Form submitted successfully', 'data' => $data]);
    }
}
