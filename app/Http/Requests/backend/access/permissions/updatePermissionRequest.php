<?php

namespace App\Http\Requests\backend\access\permissions;

use Illuminate\Foundation\Http\FormRequest;

class updatePermissionRequest extends FormRequest
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
            // TODO: Make name unique
            'name' => 'required|alpha_dash|max:30',
            'display_name' => 'required|unique:roles,display_name|max:30',
            'description' => 'required|max:255'
        ];
    }
}
