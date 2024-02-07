@include('viewpack::components.content.widget.table.value-from.value-as.' .
    ($column['valueAs'] ?? 'string'), [
        'value' => \Illuminate\Support\Arr::get($element, $column['value'])
    ]
)
