@component('viewpack::components.content.input.frame.form-group')
    @slot('inputData', get_defined_vars()['__data'])
    @slot('input')
        @php
            $id = $id ?? \Illuminate\Support\Str::random(10);
        @endphp

        <label for="input-{{ $id }}">{{ $label ?? '' }}</label>
        <input type="datetime-local"
               name="{{ $name }}"
               class="form-control"
               id="input-{{ $id }}"
               placeholder="{{ $placeholder ?? '' }}"
               value="{{ $value ?? '' }}"
            {{ ($disabled ?? false) ? 'disabled' : ''}}
        >
        @if (isset($underLabel))
            <small id="emailHelp2" class="form-text text-muted">{{ $underLabel }}</small>
        @endif
    @endslot
@endcomponent
