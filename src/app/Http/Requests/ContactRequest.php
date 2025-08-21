<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'   => ['required'],
            'last_name'    => ['required'],
            'gender'       => ['required'],
            'email'        => ['required', 'email', 'unique:contacts,email'],
            'tel_1'         => ['required', 'digits_between:1,5'],
            'tel_2'         => ['required', 'digits_between:1,5'],
            'tel_3'         => ['required', 'digits_between:1,5'],
            'address'      => ['required'],
            'category_id'  => ['required'],
            'detail'       => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式を入力してください',
            'email.unique' => 'このメールアドレスは既に登録されています',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $tel = $this->input('tel_1') . $this->input('tel_2') . $this->input('tel_3');

            if (!preg_match('/^\d+$/', $tel)) {
                $validator->errors()->add('tel', '電話番号は半角数字で入力してください');
            }
        });
    }
}
