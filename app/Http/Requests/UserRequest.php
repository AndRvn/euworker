<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = $this->request->get('id');

        return [
            'name'     => 'required|max:50',
            'email'    => 'required|email|max:50|unique:users,email,' . $id . ',id',
            'password' => empty($id) ? 'required|string|min:6|max:25|confirmed' : '',
        ];
    }

}
