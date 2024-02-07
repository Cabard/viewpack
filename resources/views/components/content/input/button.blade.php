<button class="btn btn-{{ $color ?? 'success' }}"
        @include('viewpack::attributes', $attributes ?? [])
>{{ $name }}</button>
