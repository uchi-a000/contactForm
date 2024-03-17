<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    // 入力フォーム
    public function index()
    {
        return view('index');
    }

    // // 入力内容確認ページ
    // public function confirm(ContactRequest $request)
    // {
    //     $categories = Category::all();
    //     // dd($categories);

    //     $category = $request->all();

    //     return view('confirm', compact('categories'));
    // }


    // // DBに保存とthanksページ
    // public function store(Request $request)
    // {
    //     $category = $request->only(['content']);
    //     Category::create($category);

    //     return view('thanks');
    // }
}
