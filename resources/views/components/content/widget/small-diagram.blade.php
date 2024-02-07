{{--

--}}
{{--<div class="col-md-4">--}}
    <div class="card card-default">
        <div class="card-body pb-0">
            <div class="h1 fw-bold float-right">-3%</div>
            <h2 class="mb-2">27</h2>
            <p>New Users</p>
            <div class="pull-in sparkline-fix chart-as-background">
                <div id="lineChart5"></div>
            </div>
        </div>
    </div>
{{--</div>--}}
@push('scripts')
    <script>
        $('#lineChart5').sparkline([99,125,122,105,110,124,115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: 'rgba(255, 255, 255, .5)',
            fillColor: 'rgba(255, 255, 255, .15)'
        });
    </script>
@endpush
