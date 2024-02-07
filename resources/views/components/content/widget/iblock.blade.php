{{--

--}}
@php
    $positive = isset($positive) ? !!$positive : true;
@endphp
{{--<div class="col-6 col-sm-4 col-lg-2">--}}
    <div class="card">
        <div class="card-body p-3 text-center">
            <div class="text-right text-{{ $positive ? 'success' : 'danger' }}">
                {{ $percent ?? 0 }}%
                <i class="fa fa-chevron-{{ $positive ? 'up' : 'down' }}"></i>
            </div>
            <div class="h1 m-0">{{ $value ?? '' }}</div>
            <div class="text-muted mb-3">{{ $name ?? '' }}</div>
        </div>
    </div>
{{--</div>--}}
