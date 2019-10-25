<?php

namespace App\Http\Requests;

use App\Colour;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyColourRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('colour_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:colours,id',
        ];
    }
}
