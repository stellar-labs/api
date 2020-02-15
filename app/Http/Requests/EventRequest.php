<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            "continent" => "sometimes|exists:continent,id"
        ];
    }
}
