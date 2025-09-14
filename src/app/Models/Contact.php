<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
        'is_resolved',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getGenderNameAttribute()
    {
        return [1 => '男性', 2 => '女性', 3 => 'その他'][$this->gender] ?? '不明';
    }
}
