<thead>
    <tr>
        @foreach($columns ?? [] as $td)
            <th scope="col">{{ $td['name'] ?? '' }}</th>
        @endforeach
    </tr>
</thead>
