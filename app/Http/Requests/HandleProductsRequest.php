<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HandleProductsRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $imageStatus = request()->isMethod('post') ? 'required' : 'optional';

        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => "nullable|image"
        ];
    }
}
