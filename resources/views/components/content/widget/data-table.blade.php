{{--

--}}
@php
    $id = $id ?? \Illuminate\Support\Str::random(10);
@endphp
@include('viewpack::components.content.widget.table')

@push('scripts')
    <script >
        $(document).ready(function() {
            // Add Row
            $('#{{$id}}-table').DataTable({
                "pageLength": 10,
                "language": {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/ru.json',
                }
            });

            var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#{{$id}}-table').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>
@endpush
