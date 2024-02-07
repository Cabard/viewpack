@php
    $id = $id ?? \Illuminate\Support\Str::random(10);
@endphp
<li class="nav-item {{ isset($active) && $active ? 'active submenu' : '' }}">
    <a data-toggle="collapse" href="#{{$id}}"
       {!! isset($active) && $active ? 'class="collapsed" aria-expanded="true"' : '' !!}
    >
        <i class="fas {{ $faIcon ?? 'fa-layer-group' }}"></i>
        <p>{{ __($name ?? 'Пункт') }}</p>
        <span class="caret"></span>
        @include('viewpack::components.sidebar.badge')
    </a>
    <div class="collapse {{ isset($active) && $active ? 'show' : '' }}" id="{{$id}}">
        @if (isset($items) && !empty($items))
            <ul class="nav nav-collapse">
                @foreach($items ?? [] as $item)
                    @php $hasSubItems = isset($item['items']) && !empty($item['items']); @endphp
                    <li class="{{ isset($item['active']) && $item['active'] ? 'active submenu' : '' }}"
                        {!! isset($item['active']) && $item['active'] ? 'class="collapsed" aria-expanded="true"' : '' !!}
                    >
                        <a
                            @if ($hasSubItems)
                                data-toggle="collapse" href="#{{$id}}-{{$loop->iteration}}"
                            @else
                                href="{{ $item['url'] ?? '#' }}"
                            @endif
                        >
                            <span class="sub-item">{{ __($item['name'] ?? 'Подпункт') }}</span>
                            @if ($hasSubItems) <span class="caret"></span> @endif
                            @include('viewpack::components.sidebar.badge', $item)
                        </a>
                        @if ($hasSubItems)
                            <div class="collapse {{ isset($item['active']) && $item['active'] ? 'show' : '' }}" id="{{$id}}-{{$loop->iteration}}">
                                <ul class="nav nav-collapse subnav">
                                    @foreach($item['items'] ?? [] as $subItem)
                                        <li class="{{ isset($subItem['active']) && $subItem['active'] ? 'active' : '' }}">
                                            <a href="{{ $subItem['url'] ?? '#' }}">
                                                <span class="sub-item">{{ __($subItem['name'] ?? 'Подпункт 2') }}</span>
                                                @include('viewpack::components.sidebar.badge', $subItem)
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</li>
