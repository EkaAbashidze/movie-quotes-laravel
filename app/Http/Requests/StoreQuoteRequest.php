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
            'quote.en' => 'required|string',
            'quote.ka' => 'required|string',
            'movie_id' => 'required|exists:movies,id',
            'thumbnail' => 'required',
        ];
    }
}