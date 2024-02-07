{{--

--}}
@php
    $id = $id ?? \Illuminate\Support\Str::random(10);
@endphp

<div class="card">
    @isset($name)
        <div class="card-header">
            <h4 class="card-title">{{ $name }}</h4>
        </div>
    @endisset
    <div class="card-body">
        <ul class="nav nav-pills nav-secondary" id="{{ $id }}-tab" role="tablist">
            @foreach($tabs as $tab)
                @php
                    $tabId = $tab['id'] ?? $loop->iteration;
                @endphp
                <li class="nav-item">
                    <a class="nav-link @if ($loop->first) active @endif"
                       data-toggle="pill"
                       role="tab"
                       aria-selected="{{ $loop->first ? 'true' : 'false' }}"

                       id="{{ $id }}-{{ $tabId }}-tab"
                       href="#{{ $id }}-{{ $tabId }}"
                       aria-controls="{{ $id }}-{{ $tabId }}"

                    >{{ $tab['name'] }}</a>
                </li>
            @endforeach
        </ul>
        <div class="tab-content mt-2 mb-3" id="{{ $id }}-tabContent">
            @foreach($tabs as $tab)
                @php
                    $tabId = $tab['id'] ?? $loop->iteration;
                @endphp

                <div class="tab-pane fade @if ($loop->first) show active @endif" id="{{ $id }}-{{ $tabId }}" role="tabpanel" aria-labelledby="{{ $id }}-{{ $tabId }}-tab">
                    @include('viewpack::components.content', ['content' => $tab['content'] ?? []])
                </div>
            @endforeach
        </div>
    </div>
</div>
