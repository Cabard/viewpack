{{--

--}}
@php
    $id = $id ?? \Illuminate\Support\Str::random(10);
@endphp
<div class="card">
    @if(isset($name) || isset($buttons))
        <div class="card-header">
            <div class="d-flex align-items-center">
                @isset($name)
                    <div class="card-title">{{ $name }}</div>
                @endisset
                @isset($buttons)
                    <div class="ml-auto">
                        @foreach($buttons as $button)
                            <button class="btn btn-primary btn-round @if (!$loop->first) ml-5 @endif"
                                @include('viewpack::attributes', $button ?? [])
                            >
                                <i class="fa fa-plus"></i>
                                {{ $button['name'] }}
                            </button>
                        @endforeach
                    </div>
                @endisset
            </div>
        </div>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table id="{{$id}}-table" class="table table-hover table-striped">
                @if (!isset($disableHeader) || !$disableHeader)
                    @include('viewpack::components.content.widget.table.header')
                @endif
                @if (!isset($disableFooter) || !$disableFooter)
                    @include('viewpack::components.content.widget.table.footer')
                @endif
                @isset($elements)
                    <tbody>
                        @foreach($elements as $element)
                            <tr>
                                @foreach($columns ?? [] as $column)
                                    <td>
                                        @include('viewpack::components.content.widget.table.value-from.' . ($column['valueFrom'] ?? 'value'), [
                                            'element' => $element,
                                            'column' => $column
                                        ])
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                @endisset
            </table>
        </div>
    </div>
</div>
