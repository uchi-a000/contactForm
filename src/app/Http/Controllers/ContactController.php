<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contacts = $request->all();
        $category =  Category::find($request->category_id);
        return view('confirm', compact('contacts', 'category'));
    }

    public function store(ContactRequest $request)
    {
        if ($request->input('back')) {
            return redirect('/')->withInput();
        }

        // 3つの電話番号を結合して一つの文字列にする
        $tel = $request->tel_1 . $request->tel_2 . $request->tel_3;

        Contact::create([
            'category_id' => $request->category_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'tel' => $tel, // 結合した$tel変数を直接指定
            'address' => $request->address,
            'building' => $request->building,
            'detail' => $request->detail,
        ]);
        return redirect('thanks');
    }
}
