@extends('layouts.admin')
@section('styles')

@stop

@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.wellsite.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route('admin.wellsites.update', [$wellsite->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.wellsite.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($wellsite) ? $wellsite->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.wellsite.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('info') ? 'has-error' : '' }}">
                <label for="info">{{ trans('cruds.wellsite.fields.info') }}*</label>
                <input type="text" id="info" name="info" class="form-control" value="{{ old('info', isset($wellsite) ? $wellsite->name : '') }}" required>
                @if($errors->has('info'))
                    <em class="invalid-feedback">
                        {{ $errors->first('info') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.wellsite.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.wellsite.fields.address') }}*</label>
                @if(!isset($wellsite))
                <strong id="waiting">Waiting...</strong>
                <div class="spinner-grow text-primary" role="status" id="waiting_status">
                    <span class="sr-only">Waiting...</span>
                </div>
                @else
                <strong>Connnected</strong>
                @endif
                <input hidden type="text" id="address" name="address" class="form-control " value="{{ isset($wellsite) && $wellsite->address? $wellsite->address : '' }}">
                <input disabled type="text" id="address" name="address" class="form-control " value="{{ isset($wellsite) && $wellsite->address? $wellsite->address : '' }}">
                @if($errors->has('address'))
                    <em class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.wellsite.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('company_id') ? 'has-error' : '' }}">
                <label for="company_id">{{ trans('cruds.wellsite.fields.assign_to_company') }}*
                <select name="company_id" id="company_id" class="form-control select2" required>
                    @foreach($companies as $id => $each)
                        <option value="{{ $each->id }}" {{ $each->id === $wellsite->company->id? 'selected' : '' }}>{{ $each->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('company_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('company_id') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.roles_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        var data = {!! json_encode($wellsite) !!}

        if(data === '' || data === null || data === undefined || data === 'undefined'){
            sendRequest();
            function sendRequest(){
                var flag = false;
                $.ajax({
                    url: "create",
                    type: 'GET',
                    success: function(data){
                        if(Object.keys(data).length>0){
                            location.reload();
                        }
                    },
                    complete: function() {
                        setInterval(sendRequest, 5000); // The interval set to 5 seconds
                    }
                });
            };
        }
    });
</script>
@stop