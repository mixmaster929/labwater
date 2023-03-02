@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.company.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.companies.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">{{ trans('cruds.company.fields.name') }}*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}" required>
                    @if($errors->has('name'))
                        <em class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.company.fields.name_helper') }}
                    </p>
                </div>
                <div class="col-md-6 form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
                    <label for="user_id">{{ trans('cruds.company.fields.assign_to_admin') }}*
                    <select name="user_id" id="user_id" class="form-control select2" required>
                        @foreach($users as $id => $user)
                            <option value="{{ $user->id }}">{{ $user->name }}({{ $user->email }})</option>
                        @endforeach
                    </select>
                    @if($errors->has('user_id'))
                        <em class="invalid-feedback">
                            {{ $errors->first('user_id') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.user.fields.roles_helper') }}
                    </p>
                </div>
            </div>
            <div class="form-group {{ $errors->has('info') ? 'has-error' : '' }}">
                <label for="info">{{ trans('cruds.company.fields.info') }}*</label>
                <textarea required id="info" name="info" class="form-control ">{{ old('info', isset($product) ? $product->info : '') }}</textarea>
                @if($errors->has('info'))
                    <em class="invalid-feedback">
                        {{ $errors->first('info') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.company.fields.description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('main_photo') ? 'has-error' : '' }}">
                <label for="main_photo">{{ trans('cruds.company.fields.main_photo') }}</label>
                <div class="needsclick dropzone" id="main_photo-dropzone">

                </div>
                @if($errors->has('main_photo'))
                    <em class="invalid-feedback">
                        {{ $errors->first('main_photo') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.company.fields.main_photo_helper') }}
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
<script>
    Dropzone.options.mainPhotoDropzone = {
    url: '{{ route('admin.companies.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="main_photo"]').remove()
      $('form').append('<input type="hidden" name="main_photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="main_photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
    @if(isset($product) && $product->main_photo)
        var file = {!! json_encode($product->main_photo) !!}
            this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, '{{ $product->main_photo->getUrl('thumb') }}')
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="main_photo" value="' + file.file_name + '">')
        this.options.maxFiles = this.options.maxFiles - 1
    @endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@stop