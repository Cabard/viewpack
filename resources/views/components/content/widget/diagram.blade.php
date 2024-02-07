{{--

--}}
@php
    $id = $id ?? \Illuminate\Support\Str::random(10);
    $color = new \Cabard\Netbot\Tools\ColorHelper($rgbColor ?? '#ffa534');
    $color->asJs();
@endphp
{{--<div class="col-md-4">--}}
    <div class="card">
        <div class="card-body pb-0">
            <div class="h1 fw-bold float-right" style="color: {{ $color->getMain() }}">{{ $percent ?? '' }}</div>
            <h2 class="mb-2">{{ $value ?? '' }}</h2>
            <p class="text-muted">{{ $name ?? '' }}</p>
            <div class="pull-in sparkline-fix">
                <div id="{{ $id }}"></div>
            </div>
        </div>
    </div>
{{--</div>--}}

@push('scripts')
    <script>
        $('#{{ $id }}').sparkline(@json($chartData), {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '{{ $color->getMain() }}',
            fillColor: '{{ $color->changeBrightness(-50, 14) }}'
        });
    </script>
@endpush
