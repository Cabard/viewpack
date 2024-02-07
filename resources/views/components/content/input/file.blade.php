@component('viewpack::components.content.input.frame.form-group')
    @slot('inputData', get_defined_vars()['__data'])
    @slot('input')
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    @endslot
@endcomponent
