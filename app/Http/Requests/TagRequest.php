<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'name' => 'required|min:1|unique:tags',
            'icon' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '必须填写分类名称',
            'name.unique' => '分类重名，请重新填写',
            'icon.required' => '必须选择一个分类图标'
        ];
    }
}
