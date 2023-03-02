@extends('layouts.admin')
@section('styles')
<link href="{{ asset('css/mobiscroll.javascript.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('cruds.wellsite.title') }} {{ trans('global.list') }}
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 form-group {{ $errors->has('wellsite') ? 'has-error' : '' }}">
                <label for="wellsite">{{ trans('cruds.wellsite.title') }} {{ trans('global.list') }}
                <select name="wellsite" id="wellsite" class="form-control select2" required>
                    @foreach($wellsites as $id => $each)
                        <option value="{{ $each->id }}" {{ $each->id === intVal($wellsite->id)? 'selected' : '' }}>{{ $each->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('wellsite'))
                    <em class="invalid-feedback">
                        {{ $errors->first('wellsite') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.roles_helper') }}
                </p>
            </div>
            <div class="col-md-6 form-group {{ $errors->has('filters') ? 'has-error' : '' }}">
                <div style="display: flex;">    
                    <div style="margin-right: 20px;">
                        <label for="filters">Filter Options
                        <select name="filters" id="filters" class="form-control select2" required>
                            <option value="0">Today</option>
                            <option value="1">Prior Day</option>
                            <option value="2">Week to Date</option>
                            <option value="3">Month to Date</option>
                            <option value="4">Custom</option>
                        </select>
                    </div>
                    <div >
                        <input style="margin-top: 20px;" mbsc-input id="datepickers" />
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Product">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Time
                        </th>
                        <th>
                            Reading
                        </th>
                        <th>
                            Usage
                        </th>
                        <th>
                            Chlorine Residuals
                        </th>
                        <th>
                            Chlorine
                        </th>
                        <th>
                            Poly
                        </th>
                        <th>
                            User
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($data as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $product->record_time ?? '' }}
                            </td>
                            <td>
                                {{ $product->value1 ?? '' }}
                            </td>
                            <td>
                                {{ $product->value2 ?? '' }}
                            </td>
                            <td>
                                {{ $product->value3 ?? '' }}
                            </td>
                            <td>
                                {{ $product->value4 ?? '' }}
                            </td>
                            <td>
                                {{ $product->value1 ?? '' }}
                            </td>
                            <td>
                                {{ $product->value1 ?? '' }}
                            </td>
                            <td>
                                {{ $product->value1 ?? '' }}
                            </td>
                            <td>
                                
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
<script src="{{ asset('js/mobiscroll.javascript.min.js') }}"></script>

<script>
    mobiscroll.setOptions({
        locale: mobiscroll.localeEn,      // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                     // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'dark'   
    });

    var now = new Date();


    mobiscroll.datepicker('#datepickers', {
        controls: ['calendar'],           // More info about controls: https://docs.mobiscroll.com/5-21-2/javascript/calendar#opt-controls
        dateFormat: 'DD.MM.YYYY',         // More info about dateFormat: https://docs.mobiscroll.com/5-21-2/javascript/calendar#localization-dateFormat
        onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/5-21-2/javascript/calendar#event-onInit
            inst.setVal(now, true);
        }
    });

    $('select#filters').on('change', function() {
        var id =  this.value;
        console.log(id);
        switch (id) {
            case "0":
                mobiscroll.datepicker('#datepickers', {
                    controls: ['calendar'],           // More info about controls: https://docs.mobiscroll.com/5-21-2/javascript/calendar#opt-controls
                    onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/5-21-2/javascript/calendar#event-onInit
                        inst.setVal(now, true);
                    }
                });
                break;
            case "1":
                mobiscroll.datepicker('#datepickers', {
                    controls: ['calendar'],           // More info about controls: https://docs.mobiscroll.com/5-21-2/javascript/calendar#opt-controls
                    dateFormat: 'MM/YYYY',            // More info about dateFormat: https://docs.mobiscroll.com/5-21-2/javascript/calendar#localization-dateFormat
                    onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/5-21-2/javascript/calendar#event-onInit
                        inst.setVal(now, true);
                    }
                });

            case "2":
            mobiscroll.datepicker('#datepickers', {
                controls: ['calendar'],           // More info about controls: https://docs.mobiscroll.com/5-21-2/javascript/calendar#opt-controls
                dateFormat: 'MMMM',            // More info about dateFormat: https://docs.mobiscroll.com/5-21-2/javascript/calendar#localization-dateFormat
                onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/5-21-2/javascript/calendar#event-onInit
                    inst.setVal(now, true);
                }
            });

            case "3":
                mobiscroll.datepicker('#datepickers', {
                    controls: ['calendar'],           // More info about controls: https://docs.mobiscroll.com/5-21-2/javascript/calendar#opt-controls
                    dateFormat: 'MM/YYYY',            // More info about dateFormat: https://docs.mobiscroll.com/5-21-2/javascript/calendar#localization-dateFormat
                    onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/5-21-2/javascript/calendar#event-onInit
                        inst.setVal(now, true);
                    }
                });
            case "4":
            mobiscroll.datepicker('#datepickers', {
                controls: ['calendar'],           // More info about controls: https://docs.mobiscroll.com/5-21-2/javascript/calendar#opt-controls
                dateFormat: 'MM/YYYY',            // More info about dateFormat: https://docs.mobiscroll.com/5-21-2/javascript/calendar#localization-dateFormat
                onInit: function (event, inst) {  // More info about onInit: https://docs.mobiscroll.com/5-21-2/javascript/calendar#event-onInit
                    inst.setVal(now, true);
                }
            });
            default:
                break;
        }
        // var url = "{{ route('admin.well_sites.index', ['id' => 'ids']) }}";
        // url = url.replace('ids', id);
	    // location.href = url;
    });
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        $.extend(true, $.fn.dataTable.defaults, {
            order: [[ 1, 'desc' ]],
            pageLength: 100,
        });
    })

    $('select#wellsite').on('change', function() {
        console.log(this.value)
        var id =  this.value;
        var url = "{{ route('admin.customers.index', ['id' => 'ids']) }}";
        url = url.replace('ids', id);
	    location.href = url;
    });

    window.setTimeout( function() {
        window.location.reload();
    }, 60000);

</script>
@endsection