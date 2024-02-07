@component('viewpack::components.content.input.frame.form-check')
    @slot('inputData', get_defined_vars()['__data'])
    @slot('input')
        <label>Gender</label><br/>
        <label class="form-radio-label">
            <input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
            <span class="form-radio-sign">Male</span>
        </label>
        <label class="form-radio-label ml-3">
            <input class="form-radio-input" type="radio" name="optionsRadios" value="">
            <span class="form-radio-sign">Female</span>
        </label>
    @endslot
@endcomponent
