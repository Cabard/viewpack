@foreach($content['rows'] ?? [] as $row)
    @if(isset($row['title']))
        @include('viewpack::components.content.widget.title', $row['title'])
    @endif

    <div class="row {{ implode(' ', $row['classes'] ?? []) }}">
        @foreach($row['columns'] as $column)
            <div class="{{$column['width'] ?? 'col-12'}}">
                @foreach($column['widgets'] ?? [] as $widget)
                    @include('viewpack::components.content.widget.' . $widget['code'], $widget)
                @endforeach
            </div>
        @endforeach
    </div>
@endforeach
