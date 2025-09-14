<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $contacts = Contact::with('category')
        ->orderBy('is_resolved')
        ->orderBy('created_at', 'asc')
        ->paginate(10);
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    // リセットボタン実装、検索で呼び出す
    public function search(Request $request)
    {
        if ($request->has('reset')) {
            return redirect('/admin')->withInput();
        }
        $query = Contact::query();

        $query = $this->getSearchQuery($request, $query);

        $contacts = $query->paginate(7);
        $csvData = $query->get();
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories', 'csvData'));
    }

    // 検索部分
    private function getSearchQuery($request, $query)
    {
        if (!empty($request->keyword)) {
            $query->where(function ($q) use ($request) {
                $q->where('first_name', 'like', '%' . $request->keyword . '%')
                    ->orWhere('last_name', 'like', '%' . $request->keyword . '%')
                    ->orWhere('email', 'like', '%' . $request->keyword . '%');
            });
        }

        if (!empty($request->gender)) {
            $query->where('gender', '=', $request->gender);
        }

        if (!empty($request->category_id)) {
            $query->where('category_id', '=', $request->category_id);
        }

        if (!empty($request->date)) {
            $query->whereDate('created_at', '=', $request->date);
        }

        return $query;
    }

    public function resolve(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->update(['is_resolved' => true]);
        return redirect('/admin');
    }
}
