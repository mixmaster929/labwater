@extends('layouts.admin')
@section('content')
@can('product_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.wellsites.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.wellsite.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.wellsite.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Product">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.wellsite.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.wellsite.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.wellsite.fields.info') }}
                        </th>
                        <th>
                            {{ trans('cruds.wellsite.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.wellsite.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.wellsite.fields.company') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                @can('product_create')
                <div class="form-group {{ $errors->has('company_id') ? 'has-error' : '' }}">
                    <label for="company_id">{{ trans('cruds.company.fields.list') }}
                    <select name="company" id="company" class="form-control select2" required>
                        @foreach($companies as $id => $company)
                            <option value="{{ $company->id }}" {{ $company->id === intVal($company_id)? 'selected' : '' }}>{{ $company->name }}</option>
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
                @endcan
                @can('company_access')
                <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                    <label for="user">{{ trans('cruds.employee.name') }} {{ trans('global.list') }}
                    <select name="user" id="user" class="form-control select2" required>
                    <option value="0">All</option>
                        @foreach($users as $id => $each)
                            <option value="{{ $each->id }}" {{ $each->id === intVal($user_id)? 'selected' : '' }}>{{ $each->name }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('user'))
                        <em class="invalid-feedback">
                            {{ $errors->first('user') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.user.fields.roles_helper') }}
                    </p>
                </div>
                @endcan
                <tbody>
                    @foreach($wellsites as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $product->id ?? '' }}
                            </td>
                            <td>
                                {{ $product->name ?? '' }}
                            </td>
                            <td>
                                {{ $product->info ?? '' }}
                            </td>
                            <td>
                                {{ $product->status ? 'Connected' : 'Disconnected' }}
                            </td>
                            <td>
                                {{ $product->address ?? '' }}
                            </td>
                            <td>
                                {{ $product->company ? $product->company->name : '' }}
                            </td>
                            <td>
                                @can('product_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.wellsites.show', $product->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('product_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.wellsites.edit', $product->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('product_delete')
                                    <form action="{{ route('admin.wellsites.destroy', $product->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                                @can('company_access')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.well_sites.management', $product->id) }}">
                                        {{ trans('global.manage') }}
                                    </a>
                                   
                                    <button type="button" class="btn btn-xs {{count($product->users)>0? 'btn-info' : 'btn-danger'}}" data-toggle="modal" data-target="#exampleModalCenter_{{$product->id}}">
                                    {{ count($product->users)>0? "Assigned/Edit" : trans('global.assign_to_employee') }}
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter_{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Assign to user.</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route("admin.well_sites.assign_to_employee") }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <select name="uuser" id="uuser" class="form-control select2" required>
                                                        @foreach($users as $id => $each)
                                                            <option value="{{ $each->id }}" {{ $each->id === intVal($user_id)? 'selected' : '' }}>{{ $each->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <input hidden type="text" name="wellsite" id="wellsite" value="{{ $product->id }}" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
    @can('product_create')
    $('select').on('change', function() {
        var id =  this.value;
        var url = "{{ route('admin.wellsites.index', ['id' => 'ids']) }}";
        url = url.replace('ids', id);
	    location.href = url;
    });
    @endcan
    @can('company_access')
    $('select#user').on('change', function() {
        var id =  this.value;
        var url = "{{ route('admin.well_sites.index', ['id' => 'ids']) }}";
        url = url.replace('ids', id);
	    location.href = url;
    });
    @endcan
</script>
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        @can('product_delete')
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.wellsites.massDestroy') }}",
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
            order: [[ 1, 'desc' ]],
            pageLength: 100,
        });
        $('.datatable-Product:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
    })

</script>
@endsection