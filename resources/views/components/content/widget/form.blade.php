{{--

--}}
@php
    $method = strtoupper($method ?? 'POST');
    if (!isset($csrf) && $method != 'GET') {
        $csrf = true;
    }
@endphp
<div class="card">
    <form method="{{ in_array($method, ['GET', 'POST']) ? $method : 'POST' }}" action="{{ $action ?? '#' }}"
        @include('viewpack::attributes', $attributes ?? [])
    >
        @if (isset($name))
            <div class="card-header">
                <div class="card-title">{{ $name }}</div>
            </div>
        @endif
        <div class="card-body">
            @foreach($rows ?? [] as $row)
                <div class="row">
                    @foreach($row['columns'] as $column)
                        <div class="{{$column['width'] ?? 'col-12'}}">
                            @foreach($column['inputs'] ?? [] as $input)

                                @isset($input['name'])
                                    @error($input['name'])
                                        @php
                                            $input['underLabel'] = $message;
                                            $input['isSuccess'] = false;
                                        @endphp
                                    @enderror
                                @endisset

                                @php
                                    $view = 'viewpack::components.content.input.' . $input['type'];
                                @endphp
                                @if (view()->exists($view))
                                    @include($view, $input)
                                @else
                                    @include('viewpack::components.content.input.text', $input)
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        @if (isset($buttons))
            <div class="card-action">
                @foreach($buttons as $button)
                    @include('viewpack::components.content.input.button', $button)
                @endforeach
            </div>
        @endif


        @if (!in_array($method, ['GET', 'POST']))
            @method($method)
        @endif
        @if ($csrf)
            @csrf
        @endif
    </form>
</div>


{{--<script>--}}
{{--    document.addEventListener("submit", function(e){--}}
{{--        const form = e.target.closest('form[data-action="send-ajax"]');--}}
{{--        if(!form){ return; }--}}
{{--        e.preventDefault();--}}

{{--        const formData = new FormData(this); // Получаем данные из формы--}}

{{--        const options = {--}}
{{--            method: form.getAttribute('method'),--}}
{{--            body: formData,--}}
{{--        };--}}

{{--        fetch(form.getAttribute('action'), options)--}}
{{--            .then(response => {--}}
{{--                if (!response.ok) {--}}
{{--                    throw new Error('Network response was not ok');--}}
{{--                }--}}
{{--                return response.json();--}}
{{--            })--}}
{{--            .then(data => {--}}
{{--                console.log('Форма отправлена успешно', data);--}}
{{--            })--}}
{{--            .catch(error => {--}}
{{--                console.error('Ошибка при отправке формы', error);--}}
{{--            });--}}
{{--    });--}}
{{--</script>--}}
