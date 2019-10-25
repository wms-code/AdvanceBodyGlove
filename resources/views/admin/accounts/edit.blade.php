@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.account.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.accounts.update", [$account->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('accounts_groups') ? 'has-error' : '' }}">
                <label for="accounts_groups">{{ trans('cruds.account.fields.accounts_groups') }}</label>
                <select id="accounts_groups" name="accounts_groups" class="form-control">
                    <option value="" disabled {{ old('accounts_groups', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Account::ACCOUNTS_GROUPS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('accounts_groups', $account->accounts_groups) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('accounts_groups'))
                    <em class="invalid-feedback">
                        {{ $errors->first('accounts_groups') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('accounts_category') ? 'has-error' : '' }}">
                <label for="accounts_category">{{ trans('cruds.account.fields.accounts_category') }}</label>
                <input type="number" id="accounts_category" name="accounts_category" class="form-control" value="{{ old('accounts_category', isset($account) ? $account->accounts_category : '') }}" step="1">
                @if($errors->has('accounts_category'))
                    <em class="invalid-feedback">
                        {{ $errors->first('accounts_category') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.accounts_category_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('accounts_report') ? 'has-error' : '' }}">
                <label for="accounts_report">{{ trans('cruds.account.fields.accounts_report') }}</label>
                <input type="number" id="accounts_report" name="accounts_report" class="form-control" value="{{ old('accounts_report', isset($account) ? $account->accounts_report : '') }}" step="1">
                @if($errors->has('accounts_report'))
                    <em class="invalid-feedback">
                        {{ $errors->first('accounts_report') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.accounts_report_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.account.fields.name') }}</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($account) ? $account->name : '') }}">
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('short_name') ? 'has-error' : '' }}">
                <label for="short_name">{{ trans('cruds.account.fields.short_name') }}</label>
                <input type="text" id="short_name" name="short_name" class="form-control" value="{{ old('short_name', isset($account) ? $account->short_name : '') }}">
                @if($errors->has('short_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('short_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.short_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('contact_person') ? 'has-error' : '' }}">
                <label for="contact_person">{{ trans('cruds.account.fields.contact_person') }}</label>
                <input type="text" id="contact_person" name="contact_person" class="form-control" value="{{ old('contact_person', isset($account) ? $account->contact_person : '') }}">
                @if($errors->has('contact_person'))
                    <em class="invalid-feedback">
                        {{ $errors->first('contact_person') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.contact_person_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.account.fields.address') }}</label>
                <textarea id="address" name="address" class="form-control ">{{ old('address', isset($account) ? $account->address : '') }}</textarea>
                @if($errors->has('address'))
                    <em class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address_1') ? 'has-error' : '' }}">
                <label for="address_1">{{ trans('cruds.account.fields.address_1') }}</label>
                <textarea id="address_1" name="address_1" class="form-control ">{{ old('address_1', isset($account) ? $account->address_1 : '') }}</textarea>
                @if($errors->has('address_1'))
                    <em class="invalid-feedback">
                        {{ $errors->first('address_1') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.address_1_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address_2') ? 'has-error' : '' }}">
                <label for="address_2">{{ trans('cruds.account.fields.address_2') }}</label>
                <textarea id="address_2" name="address_2" class="form-control ">{{ old('address_2', isset($account) ? $account->address_2 : '') }}</textarea>
                @if($errors->has('address_2'))
                    <em class="invalid-feedback">
                        {{ $errors->first('address_2') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.address_2_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('delivery_address') ? 'has-error' : '' }}">
                <label for="delivery_address">{{ trans('cruds.account.fields.delivery_address') }}</label>
                <textarea id="delivery_address" name="delivery_address" class="form-control ">{{ old('delivery_address', isset($account) ? $account->delivery_address : '') }}</textarea>
                @if($errors->has('delivery_address'))
                    <em class="invalid-feedback">
                        {{ $errors->first('delivery_address') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.delivery_address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="phone">{{ trans('cruds.account.fields.phone') }}</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($account) ? $account->phone : '') }}">
                @if($errors->has('phone'))
                    <em class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.phone_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
                <label for="mobile">{{ trans('cruds.account.fields.mobile') }}</label>
                <input type="text" id="mobile" name="mobile" class="form-control" value="{{ old('mobile', isset($account) ? $account->mobile : '') }}">
                @if($errors->has('mobile'))
                    <em class="invalid-feedback">
                        {{ $errors->first('mobile') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.mobile_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('tngst') ? 'has-error' : '' }}">
                <label for="tngst">{{ trans('cruds.account.fields.tngst') }}</label>
                <input type="text" id="tngst" name="tngst" class="form-control" value="{{ old('tngst', isset($account) ? $account->tngst : '') }}">
                @if($errors->has('tngst'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tngst') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.tngst_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('cst') ? 'has-error' : '' }}">
                <label for="cst">{{ trans('cruds.account.fields.cst') }}</label>
                <input type="text" id="cst" name="cst" class="form-control" value="{{ old('cst', isset($account) ? $account->cst : '') }}">
                @if($errors->has('cst'))
                    <em class="invalid-feedback">
                        {{ $errors->first('cst') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.cst_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('gst_no') ? 'has-error' : '' }}">
                <label for="gst_no">{{ trans('cruds.account.fields.gst_no') }}</label>
                <input type="text" id="gst_no" name="gst_no" class="form-control" value="{{ old('gst_no', isset($account) ? $account->gst_no : '') }}">
                @if($errors->has('gst_no'))
                    <em class="invalid-feedback">
                        {{ $errors->first('gst_no') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.gst_no_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('vat_no') ? 'has-error' : '' }}">
                <label for="vat_no">{{ trans('cruds.account.fields.vat_no') }}</label>
                <input type="number" id="vat_no" name="vat_no" class="form-control" value="{{ old('vat_no', isset($account) ? $account->vat_no : '') }}" step="1">
                @if($errors->has('vat_no'))
                    <em class="invalid-feedback">
                        {{ $errors->first('vat_no') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.vat_no_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('opening_balance') ? 'has-error' : '' }}">
                <label for="opening_balance">{{ trans('cruds.account.fields.opening_balance') }}</label>
                <input type="number" id="opening_balance" name="opening_balance" class="form-control" value="{{ old('opening_balance', isset($account) ? $account->opening_balance : '') }}" step="0.01">
                @if($errors->has('opening_balance'))
                    <em class="invalid-feedback">
                        {{ $errors->first('opening_balance') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.opening_balance_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('closing_balance') ? 'has-error' : '' }}">
                <label for="closing_balance">{{ trans('cruds.account.fields.closing_balance') }}</label>
                <input type="number" id="closing_balance" name="closing_balance" class="form-control" value="{{ old('closing_balance', isset($account) ? $account->closing_balance : '') }}" step="0.01">
                @if($errors->has('closing_balance'))
                    <em class="invalid-feedback">
                        {{ $errors->first('closing_balance') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.closing_balance_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('total_debits') ? 'has-error' : '' }}">
                <label for="total_debits">{{ trans('cruds.account.fields.total_debits') }}</label>
                <input type="number" id="total_debits" name="total_debits" class="form-control" value="{{ old('total_debits', isset($account) ? $account->total_debits : '') }}" step="0.01">
                @if($errors->has('total_debits'))
                    <em class="invalid-feedback">
                        {{ $errors->first('total_debits') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.total_debits_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('total_credits') ? 'has-error' : '' }}">
                <label for="total_credits">{{ trans('cruds.account.fields.total_credits') }}</label>
                <input type="number" id="total_credits" name="total_credits" class="form-control" value="{{ old('total_credits', isset($account) ? $account->total_credits : '') }}" step="0.01">
                @if($errors->has('total_credits'))
                    <em class="invalid-feedback">
                        {{ $errors->first('total_credits') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.total_credits_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('credit_limit') ? 'has-error' : '' }}">
                <label for="credit_limit">{{ trans('cruds.account.fields.credit_limit') }}</label>
                <input type="number" id="credit_limit" name="credit_limit" class="form-control" value="{{ old('credit_limit', isset($account) ? $account->credit_limit : '') }}" step="0.01">
                @if($errors->has('credit_limit'))
                    <em class="invalid-feedback">
                        {{ $errors->first('credit_limit') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.credit_limit_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('opening_balance_type') ? 'has-error' : '' }}">
                <label>{{ trans('cruds.account.fields.opening_balance_type') }}</label>
                @foreach(App\Account::OPENING_BALANCE_TYPE_RADIO as $key => $label)
                    <div>
                        <input id="opening_balance_type_{{ $key }}" name="opening_balance_type" type="radio" value="{{ $key }}" {{ old('opening_balance_type', $account->opening_balance_type) === (string)$key ? 'checked' : '' }}>
                        <label for="opening_balance_type_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('opening_balance_type'))
                    <em class="invalid-feedback">
                        {{ $errors->first('opening_balance_type') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('remarks') ? 'has-error' : '' }}">
                <label for="remarks">{{ trans('cruds.account.fields.remarks') }}</label>
                <input type="text" id="remarks" name="remarks" class="form-control" value="{{ old('remarks', isset($account) ? $account->remarks : '') }}">
                @if($errors->has('remarks'))
                    <em class="invalid-feedback">
                        {{ $errors->first('remarks') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.account.fields.remarks_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection