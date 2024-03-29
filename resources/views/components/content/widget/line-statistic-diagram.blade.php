{{--

--}}
@php
    $id = $id ?? \Illuminate\Support\Str::random(10);
    $dataSets = [];
    foreach ($chartDatasets as $data) {
        $color = new \Cabard\Netbot\Tools\ColorHelper($data['color'] ?? '#ffa534');
        $color->asJs();

        $dataSets [] = [
                'label' => $data['name'] ?? '',
                "borderColor" => $color->getMain(),
                "pointBackgroundColor" => $color->changeBrightness(0, 60),
                "pointRadius" => 0,
                "backgroundColor" => $color->changeBrightness(0, 40),
                "legendColor" => $color->getMain(),
                "fill" => true,
                "borderWidth" => 2,
                "data" => $data['data'] ?? [],
        ];
    }
@endphp
<div class="card">
    <div class="card-header">
        <div class="card-head-row">
            <div class="card-title">{{ $name ?? 'Статистика' }}</div>
{{--            <div class="card-tools">--}}
{{--                <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">--}}
{{--                    <span class="btn-label">--}}
{{--                        <i class="fa fa-pencil"></i>--}}
{{--                    </span>--}}
{{--                    Export--}}
{{--                </a>--}}
{{--                <a href="#" class="btn btn-info btn-border btn-round btn-sm">--}}
{{--                    <span class="btn-label">--}}
{{--                        <i class="fa fa-print"></i>--}}
{{--                    </span>--}}
{{--                    Print--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="card-body">
        <div class="chart-container" style="min-height: 375px">
            <canvas id="{{ $id }}"></canvas>
        </div>
        <div id="{{ $id }}Legend"></div>
    </div>
</div>

@push('scripts')
    <script>
        var ctx = document.getElementById('{{ $id }}').getContext('2d');

        var statisticsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($chartLabels),
                datasets: @json($dataSets)
            },
            options : {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode:"nearest",
                    intersect: 0,
                    position:"nearest",
                    xPadding:10,
                    yPadding:10,
                    caretPadding:10
                },
                layout:{
                    padding:{left:5,right:5,top:15,bottom:15}
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontStyle: "500",
                            beginAtZero: false,
                            maxTicksLimit: 5,
                            padding: 10
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            padding: 10,
                            fontStyle: "500"
                        }
                    }]
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<ul class="' + chart.id + '-legend html-legend">');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                        text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
                        if (chart.data.datasets[i].label) {
                            text.push(chart.data.datasets[i].label);
                        }
                        text.push('</li>');
                    }
                    text.push('</ul>');
                    return text.join('');
                }
            }
        });


        var myLegendContainer = document.getElementById("{{ $id }}Legend");

        // generate HTML legend
        myLegendContainer.innerHTML = statisticsChart.generateLegend();

        // bind onClick event to all LI-tags of the legend
        var legendItems = myLegendContainer.getElementsByTagName('li');
        for (var i = 0; i < legendItems.length; i += 1) {
            legendItems[i].addEventListener("click", legendClickCallback, false);
        }
    </script>
@endpush
