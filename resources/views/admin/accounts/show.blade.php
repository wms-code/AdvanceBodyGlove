@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.account.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.id') }}
                        </th>
                        <td>
                            {{ $account->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.accounts_groups') }}
                        </th>
                        <td>
                            {{ App\Account::ACCOUNTS_GROUPS_SELECT[$account->accounts_groups] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.accounts_category') }}
                        </th>
                        <td>
                            {{ $account->accounts_category }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.accounts_report') }}
                        </th>
                        <td>
                            {{ $account->accounts_report }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.name') }}
                        </th>
                        <td>
                            {{ $account->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.short_name') }}
                        </th>
                        <td>
                            {{ $account->short_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.contact_person') }}
                        </th>
                        <td>
                            {{ $account->contact_person }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.address') }}
                        </th>
                        <td>
                            {!! $account->address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.address_1') }}
                        </th>
                        <td>
                            {!! $account->address_1 !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.address_2') }}
                        </th>
                        <td>
                            {!! $account->address_2 !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.delivery_address') }}
                        </th>
                        <td>
                            {!! $account->delivery_address !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.phone') }}
                        </th>
                        <td>
                            {{ $account->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.mobile') }}
                        </th>
                        <td>
                            {{ $account->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.tngst') }}
                        </th>
                        <td>
                            {{ $account->tngst }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.cst') }}
                        </th>
                        <td>
                            {{ $account->cst }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.gst_no') }}
                        </th>
                        <td>
                            {{ $account->gst_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.vat_no') }}
                        </th>
                        <td>
                            {{ $account->vat_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.opening_balance') }}
                        </th>
                        <td>
                            ${{ $account->opening_balance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.closing_balance') }}
                        </th>
                        <td>
                            ${{ $account->closing_balance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.total_debits') }}
                        </th>
                        <td>
                            ${{ $account->total_debits }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.total_credits') }}
                        </th>
                        <td>
                            ${{ $account->total_credits }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.credit_limit') }}
                        </th>
                        <td>
                            ${{ $account->credit_limit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.opening_balance_type') }}
                        </th>
                        <td>
                            {{ App\Account::OPENING_BALANCE_TYPE_RADIO[$account->opening_balance_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.account.fields.remarks') }}
                        </th>
                        <td>
                            {{ $account->remarks }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection