@component('viewpack::components.content.input.frame.form-group')
    @slot('inputData', get_defined_vars()['__data'])
    @slot('input')
        @php
            $id = $id ?? \Illuminate\Support\Str::random(10);
        @endphp

        <label for="{{ $id }}">{{ $label ?? '' }}</label>
        <select class="form-control" id="{{ $id }}"
            {{ ($disabled ?? false) ? 'disabled' : ''}}
            {{ ($multiple ?? false) ? 'multiple' : ''}}
            name="{{ $name }}"
        >
            @foreach($options ?? [] as $option)
                <option value="{{ $option['value'] }}"
                        @isset($value)
                            @if ((is_array($value) && in_array($option['value'], $value))
                                || ($option['value'] == $value)
                            )
                                selected="selected"
                            @endif
                        @endisset
                >
                    {{ $option['label'] }}
                </option>
            @endforeach
        </select>
        @if (isset($underLabel))
            <small id="emailHelp2" class="form-text text-muted">{{ $underLabel }}</small>
        @endif
    @endslot
@endcomponent
