@push('scripts')
    <script>
        @if(Session::has('success'))
            $.notify({
                icon: 'flaticon-alarm-1',
                title: 'Успешно',
                message: '{{ Session::get('success') }}',
            },{
                type: 'success',
                placement: {
                    from: "bottom",
                    align: "right"
                },
                time: 1000,
            });
        @endif
        @if(Session::has('error'))
            $.notify({
                icon: 'flaticon-alarm-1',
                title: 'Ошибка',
                message: '{{ Session::get('error') }}',
            },{
                type: 'danger',
                placement: {
                    from: "bottom",
                    align: "right"
                },
                time: 1000,
            });
        @endif
        @if(Session::has('info'))
            $.notify({
                icon: 'flaticon-alarm-1',
                title: 'Информация',
                message: '{{ Session::get('info') }}',
            },{
                type: 'info',
                placement: {
                    from: "bottom",
                    align: "right"
                },
                time: 1000,
            });
        @endif
    </script>
@endpush
