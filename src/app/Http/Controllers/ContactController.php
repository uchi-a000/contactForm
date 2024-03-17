<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\Category;

class ContactController extends Controller
{

    // 入力内容確認ページ
    public function confirm(ContactRequest $request)
    {
        $contacts = Contact::with('category')->get();

        $categories =  Category::all();
        // dd($contacts);

        return view('confirm', compact('contacts', 'categories'));
    }

    // DBに保存とthanksページ
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'detail']);
        Contact::create($contact);

        return redirect('thanks');
    }

    public function complete(Request $request)
    {
        // 修正ボタンをクリックされた場合
        if ($request->input('back') == 'back') {
            return redirect('/')
                ->withInput();
        }

        return view('/');
    }
}
