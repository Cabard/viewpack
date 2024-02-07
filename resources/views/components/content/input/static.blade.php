@component('viewpack::components.content.input.frame.form-group')
    @slot('inputData', get_defined_vars()['__data'])
    @slot('input')
        <label class="control-label">
            {{ $label ?? '' }}
        </label>
        <p class="form-control-static">{{ $value ?? '' }}</p>
    @endslot
@endcomponent
