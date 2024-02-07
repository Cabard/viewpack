<li class="nav-item">
    <a href="widgets.html">
        <i class="fas {{ $faIcon ?? 'fa-layer-group' }}"></i>
        <p>{{ __($name ?? 'Ссылка') }}</p>
        @include('viewpack::components.sidebar.badge')
    </a>
</li>
