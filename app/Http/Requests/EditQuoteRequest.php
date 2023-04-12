<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditQuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'quote_en' => 'required|string',
            'quote_ka' => 'required|string',
            'movie_id' => 'required|exists:movies,id',
            'thumbnail' => 'nullable',
        ];
    }
}