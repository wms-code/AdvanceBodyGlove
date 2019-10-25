@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.stockPoint.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.stock-points.update", [$stockPoint->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.stockPoint.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($stockPoint) ? $stockPoint->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.stockPoint.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('rack') ? 'has-error' : '' }}">
                <label for="rack">{{ trans('cruds.stockPoint.fields.rack') }}</label>
                <input type="text" id="rack" name="rack" class="form-control" value="{{ old('rack', isset($stockPoint) ? $stockPoint->rack : '') }}">
                @if($errors->has('rack'))
                    <em class="invalid-feedback">
                        {{ $errors->first('rack') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.stockPoint.fields.rack_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection