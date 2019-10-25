<?php

namespace App\Http\Requests;

use App\Account;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreAccountRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('account_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'accounts_category' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'accounts_report'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'phone'             => [
                'min:10',
                'max:12',
            ],
            'mobile'            => [
                'min:10',
                'max:12',
            ],
            'vat_no'            => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
