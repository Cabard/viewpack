{{--

--}}
{{--<div class="col-12 col-sm-6 col-md-3">--}}
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h5><b>{{ $name }}</b></h5>
                    <p class="text-muted">{{ $label ?? '' }}</p>
                </div>
                <h3 class="text-{{ $color ?? 'info' }} fw-bold">{{ $value ?? '' }}</h3>
            </div>
            <div class="progress progress-sm">
                <div class="progress-bar bg-{{ $color ?? 'info' }}" style="width: {{ $percent ?? 0 }}%;" role="progressbar" aria-valuenow="{{ $percent ?? 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <p class="text-muted mb-0">{{ $progressLabel ?? '' }}</p>
                <p class="text-muted mb-0">{{ $percent ?? 0 }}%</p>
            </div>
        </div>
    </div>
{{--</div>--}}
