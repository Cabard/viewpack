{{--

--}}
@php
    $id = $id ?? \Illuminate\Support\Str::random(10);
    $color = new \Cabard\Netbot\Tools\ColorHelper($rgbColor ?? '#ffa534');
    $color->asJs();
@endphp
<div class="card card-primary">
    <div class="card-header">
        <div class="card-title">{{ $name }}</div>
        <div class="card-category">{{ $label ?? '' }}</div>
    </div>
    <div class="card-body pb-0">
        <div class="mb-4 mt-2">
            <h1>{{ $value ?? '' }}</h1>
        </div>
        <div class="pull-in">
            <canvas id="{{ $id }}"></canvas>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var dailySalesChart = document.getElementById('{{$id}}').getContext('2d');

        var myDailySalesChart = new Chart(dailySalesChart, {
            type: 'line',
            data: {
                labels:@json($chartLabels ?? []),
                datasets:[ {
                    label: "{{ $chartDataName ?? '' }}", fill: !0, backgroundColor: "rgba(255,255,255,0.2)", borderColor: "#fff", borderCapStyle: "butt", borderDash: [], borderDashOffset: 0, pointBorderColor: "#fff", pointBackgroundColor: "#fff", pointBorderWidth: 1, pointHoverRadius: 5, pointHoverBackgroundColor: "#fff", pointHoverBorderColor: "#fff", pointHoverBorderWidth: 1, pointRadius: 1, pointHitRadius: 5,
                    data: @json($chartData ?? [])
                }]
            },
            options : {
                maintainAspectRatio:!1, legend: {
                    display: !1
                }
                , animation: {
                    easing: "easeInOutBack"
                }
                , scales: {
                    yAxes:[ {
                        display:!1, ticks: {
                            fontColor: "rgba(0,0,0,0.5)", fontStyle: "bold", beginAtZero: !0, maxTicksLimit: 10, padding: 0
                        }
                        , gridLines: {
                            drawTicks: !1, display: !1
                        }
                    }
                    ], xAxes:[ {
                        display:!1, gridLines: {
                            zeroLineColor: "transparent"
                        }
                        , ticks: {
                            padding: -20, fontColor: "rgba(255,255,255,0.2)", fontStyle: "bold"
                        }
                    }
                    ]
                }
            }
        });
    </script>
@endpush
