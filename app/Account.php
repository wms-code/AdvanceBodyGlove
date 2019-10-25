<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'accounts';

    public static $searchable = [
        'name',
        'short_name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const ACCOUNTS_GROUPS_SELECT = [
        '1' => 'test',
        '2' => 'test2',
    ];

    const OPENING_BALANCE_TYPE_RADIO = [
        '1' => 'on',
        '0' => 'off',
    ];

    protected $fillable = [
        'cst',
        'name',
        'phone',
        'tngst',
        'gst_no',
        'vat_no',
        'mobile',
        'remarks',
        'address',
        'address_1',
        'address_2',
        'updated_at',
        'created_at',
        'deleted_at',
        'short_name',
        'credit_limit',
        'total_debits',
        'total_credits',
        'contact_person',
        'opening_balance',
        'closing_balance',
        'accounts_report',
        'accounts_groups',
        'delivery_address',
        'accounts_category',
        'opening_balance_type',
    ];
}
