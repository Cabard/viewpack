<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            @if (isset($user))
                @include('viewpack::components.sidebar.user', $user)
            @endif

            @if (isset($items))
            <ul class="nav nav-primary">
                @foreach($items as $item)
                    @php
                        $view = 'viewpack::components.sidebar.' . ($item['code'] ?? '');
                    @endphp
                    @if (view()->exists($view))
                        @include($view, $item)
                    @endif
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
<!-- End Sidebar -->
