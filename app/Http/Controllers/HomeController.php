<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }

    public function franchise()
    {
        return view('franchise');
    }

    public function about()
    {
        return view('about');
    }

    public function thankYou()
    {
        return view('thank-you');
    }

    public function submitInquiry(Request $request)
    {
        $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'mobileNumber' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'cityMunicipality' => ['required', 'string', 'max:255'],
            'budget' => ['required', 'string', 'max:50'],
            'packageTierSelect' => ['required', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:2000'],
            'consent' => ['accepted'],
        ]);

        return redirect()->route('thank-you');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'business_type' => ['required', 'string', 'max:255'],
        ]);

        return 'Generated successfully';
    }
}
