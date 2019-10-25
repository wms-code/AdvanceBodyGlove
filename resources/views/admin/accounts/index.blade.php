@extends('layouts.admin')
@section('content')
@can('account_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.accounts.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.account.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Account', 'route' => 'admin.accounts.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.account.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Account">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.account.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.accounts_groups') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.accounts_category') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.accounts_report') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.short_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.contact_person') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.address_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.address_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.delivery_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.mobile') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.tngst') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.cst') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.gst_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.vat_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.opening_balance') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.closing_balance') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.total_debits') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.total_credits') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.credit_limit') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.opening_balance_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.account.fields.remarks') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($accounts as $key => $account)
                        <tr data-entry-id="{{ $account->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $account->id ?? '' }}
                            </td>
                            <td>
                                {{ App\Account::ACCOUNTS_GROUPS_SELECT[$account->accounts_groups] ?? '' }}
                            </td>
                            <td>
                                {{ $account->accounts_category ?? '' }}
                            </td>
                            <td>
                                {{ $account->accounts_report ?? '' }}
                            </td>
                            <td>
                                {{ $account->name ?? '' }}
                            </td>
                            <td>
                                {{ $account->short_name ?? '' }}
                            </td>
                            <td>
                                {{ $account->contact_person ?? '' }}
                            </td>
                            <td>
                                {{ $account->address ?? '' }}
                            </td>
                            <td>
                                {{ $account->address_1 ?? '' }}
                            </td>
                            <td>
                                {{ $account->address_2 ?? '' }}
                            </td>
                            <td>
                                {{ $account->delivery_address ?? '' }}
                            </td>
                            <td>
                                {{ $account->phone ?? '' }}
                            </td>
                            <td>
                                {{ $account->mobile ?? '' }}
                            </td>
                            <td>
                                {{ $account->tngst ?? '' }}
                            </td>
                            <td>
                                {{ $account->cst ?? '' }}
                            </td>
                            <td>
                                {{ $account->gst_no ?? '' }}
                            </td>
                            <td>
                                {{ $account->vat_no ?? '' }}
                            </td>
                            <td>
                                {{ $account->opening_balance ?? '' }}
                            </td>
                            <td>
                                {{ $account->closing_balance ?? '' }}
                            </td>
                            <td>
                                {{ $account->total_debits ?? '' }}
                            </td>
                            <td>
                                {{ $account->total_credits ?? '' }}
                            </td>
                            <td>
                                {{ $account->credit_limit ?? '' }}
                            </td>
                            <td>
                                {{ App\Account::OPENING_BALANCE_TYPE_RADIO[$account->opening_balance_type] ?? '' }}
                            </td>
                            <td>
                                {{ $account->remarks ?? '' }}
                            </td>
                            <td>
                                @can('account_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.accounts.show', $account->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('account_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.accounts.edit', $account->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('account_delete')
                                    <form action="{{ route('admin.accounts.destroy', $account->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('account_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.accounts.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 5, 'asc' ]],
    pageLength: 100,
  });
  $('.datatable-Account:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection