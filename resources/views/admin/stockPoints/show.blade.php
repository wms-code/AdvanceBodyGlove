@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.stockPoint.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.stockPoint.fields.id') }}
                        </th>
                        <td>
                            {{ $stockPoint->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.stockPoint.fields.name') }}
                        </th>
                        <td>
                            {{ $stockPoint->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.stockPoint.fields.rack') }}
                        </th>
                        <td>
                            {{ $stockPoint->rack }}
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