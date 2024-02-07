{{--

--}}
<div class="card">
    @isset($name)
        <div class="card-header">
            <h4 class="card-title">{{ $name }}</h4>
        </div>
    @endisset
    <div class="card-body">
        {{ $content ?? '' }}
    </div>
</div>
