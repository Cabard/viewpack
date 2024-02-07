{{--

--}}
{{--<div class="col-sm-6 col-md-3">--}}
    <div class="card card-stats card-{{ $bgColor ?? '' }} card-round">
        <div class="card-body">
            <div class="row {{ isset($faBgColor) ? 'align-items-center' : '' }}">
                <div class="{{ isset($faBgColor) ? 'col-icon' : 'col-5' }}">
                    <div class="icon-big text-center {{ isset($faBgColor) ? 'bubble-shadow-small icon-'.$faBgColor : '' }}">
                        <i class="{{ $faIcon ?? 'flaticon-users' }} {{ isset($faColor) ? 'text-'.$faColor : '' }}"></i>
                    </div>
                </div>
                <div class="col-7 col-stats">
                    <div class="numbers">
                        <p class="card-category">{{ $name ?? '' }}</p>
                        <h4 class="card-title">{{ $value ?? '' }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--</div>--}}
