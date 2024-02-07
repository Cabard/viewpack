<li class="mx-4 mt-2">
    <a href="{{ $url ?? '#' }}" class="btn btn-primary btn-block">
        @if (isset($faIcon))
            <span class="btn-label mr-2">
                <i class="fa {{ $faIcon }}"></i>
            </span>
        @endif
        {{ __($name ?? 'Кнопка') }}
    </a>
</li>
