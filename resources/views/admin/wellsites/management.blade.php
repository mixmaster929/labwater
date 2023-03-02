@extends('layouts.admin')
@section('styles')

@stop

@section('content')

<div class="card">
    <div class="card-header">
        Set Alarms & Notifications
    </div>

    <div class="card-body">
        <form action="{{ route("admin.well_sites.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('value1') ? 'has-error' : '' }}">
                <label for="value1">Meter1*</label>
                <input type="text" id="value1" name="value1" class="form-control" value="{{ old('value1', isset($wellsite) ? $wellsite->value1 : '') }}" required>
                @if($errors->has('value1'))
                    <em class="invalid-feedback">
                        {{ $errors->first('value1') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.wellsite.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('value2') ? 'has-error' : '' }}">
                <label for="value2">Meter2*</label>
                <input type="text" id="value2" name="value2" class="form-control" value="{{ old('value2', isset($wellsite) ? $wellsite->value2 : '') }}" required>
                @if($errors->has('value2'))
                    <em class="invalid-feedback">
                        {{ $errors->first('value2') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.wellsite.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('value3') ? 'has-error' : '' }}">
                <label for="value3">Meter3*</label>
                <input type="text" id="value3" name="value3" class="form-control" value="{{ old('value3', isset($wellsite) ? $wellsite->value3 : '') }}" required>
                @if($errors->has('value3'))
                    <em class="invalid-feedback">
                        {{ $errors->first('value3') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.wellsite.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('value4') ? 'has-error' : '' }}">
                <label for="value4">Meter4*</label>
                <input type="text" id="value4" name="value4" class="form-control" value="{{ old('value4', isset($wellsite) ? $wellsite->value4 : '') }}" required>
                @if($errors->has('value4'))
                    <em class="invalid-feedback">
                        {{ $errors->first('value4') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.wellsite.fields.name_helper') }}
                </p>
            </div>
            <input type="text" value="{{ $wellsite->id }}" name="wellsite" id="wellsite" hidden/>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                <a class="btn btn-primary" href="{{ url()->previous() }}">{{ trans('global.back_to_list') }}</a>
            </div>
        </form>
    </div>
</div>
@endsection