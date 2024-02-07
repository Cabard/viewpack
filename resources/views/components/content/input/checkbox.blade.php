@component('viewpack::components.content.input.frame.form-check')
    @slot('inputData', get_defined_vars()['__data'])
    @slot('input')
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="1" name="{{ $name ?? '' }}"
                   @if(isset($value) && $value)
                       checked="checked"
                   @endif
            >
            <span class="form-check-sign">{{ $label ?? '' }}</span>
        </label>
    @endslot
@endcomponent
