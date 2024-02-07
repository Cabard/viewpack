<div class="form-button-action">
    @isset($value['show'])
        <button type="button" data-toggle="tooltip" title=""
                class="btn btn-link btn-primary btn-lg"
                data-original-title="{{ $value['show']['label'] ?? 'Открыть элемент' }}"
                @include('viewpack::attributes', $value['show'] ?? [])
                @isset($value['show']['route']['name'])
                onclick="location.href='{{ route($value['show']['route']['name'],
                        \Cabard\Netbot\Tools\Helper::prepareParamsForTableTemplateRoute($element, $value['show']['route']['params'] ?? [])
                    ) }}'"
            @endisset
        >
            <i class="fa fa-eye"></i>
        </button>
    @endisset
    @isset($value['edit'])
        <button type="button" data-toggle="tooltip" title=""
                class="btn btn-link btn-primary btn-lg"
                data-original-title="{{ $value['edit']['label'] ?? 'Изменить элемент' }}"
                @include('viewpack::attributes', $value['edit'] ?? [])
                @isset($value['edit']['route']['name'])
                onclick="location.href='{{ route($value['edit']['route']['name'],
                        \Cabard\Netbot\Tools\Helper::prepareParamsForTableTemplateRoute($element, $value['edit']['route']['params'] ?? [])
                    ) }}'"
            @endisset
        >
            <i class="fa fa-edit"></i>
        </button>
    @endisset
    @isset($value['delete'])
        <button type="button" data-toggle="tooltip" title=""
                class="btn btn-link btn-danger"
                data-original-title="{{ $value['delete']['label'] ?? 'Удалить элемент' }}"
                @include('viewpack::attributes', $value['delete'] ?? [])
                @isset($value['delete']['route']['name'])
                    onclick="confirm('Подтвердите удаление') ? fetch('{{ route($value['delete']['route']['name'],
                        array_merge(
                            ['_token' => csrf_token()],
                            \Cabard\Netbot\Tools\Helper::prepareParamsForTableTemplateRoute($element, $value['delete']['route']['params'] ?? [])
                        )
                    ) }}', {method: 'DELETE'}).then(response => response.ok ? location.reload() : alert('Ошибка')) : null"
                @endisset
        >
            <i class="fa fa-times"></i>
        </button>
    @endisset
</div>
