@component('viewpack::components.content.input.frame.form-group')
    @slot('inputData', get_defined_vars()['__data'])
    @slot('input')
        @php
            $id = $id ?? \Illuminate\Support\Str::random(10);
        @endphp

        <label for="{{ $id }}">{{ $label ?? '' }}</label>
        <textarea class="form-control" id="{{ $id }}" rows="5"
                  name="{{ $name }}"
        >{{ $value ?? '' }}</textarea>
        @if (isset($underLabel))
            <small id="emailHelp2" class="form-text text-muted">{{ $underLabel }}</small>
        @endif
    @endslot
@endcomponent
