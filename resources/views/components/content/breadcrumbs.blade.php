@if (isset($breadcrumbs))
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="{{ route('cnb.lk.home') }}">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        @foreach($breadcrumbs as $breadcrumb)
            <li class="nav-item">
                <a href="{{ !$loop->last ? $breadcrumb['url'] : '#' }}">{{ __($breadcrumb['name']) }}</a>
            </li>
            @if (!$loop->last)
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
            @endif
        @endforeach
    </ul>
@endif
