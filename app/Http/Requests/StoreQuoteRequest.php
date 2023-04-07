<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'quote' => 'required|string',
            'movie' => 'required_without:new-movie|nullable|exists:movies,id',
            'new-movie' => 'required_without:movie|nullable|string|max:255',
        ];
    }
}
