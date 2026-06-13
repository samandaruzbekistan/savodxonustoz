<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\Public\ContactRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('public.contact.create');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        ContactMessage::create($request->safe()->only(['name', 'email', 'subject', 'message']));

        return redirect()->route('contact')
            ->with('success', 'Xabaringiz yuborildi. Tez orada siz bilan bog\'lanamiz.');
    }
}
