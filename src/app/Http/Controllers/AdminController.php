<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;

class AdminController extends Controller
{
    public function admin()
    {
        $contacts = Contact::with('category')->paginate(7);
        $categories = Category::all();
        $csvData = Contact::all();
        return view('admin', compact('contacts', 'categories', 'csvData'));
    }
}
