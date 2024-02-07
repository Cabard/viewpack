@include('viewpack::components.content.widget.table.value-from.value-as.' .
    ($column['valueAs'] ?? 'string'), [
        'value' => $column['value'] ?? ''
    ]
)
