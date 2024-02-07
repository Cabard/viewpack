<div
    @class([
        'form-group',
        'has-success' => $inputData['isSuccess'] ?? false,
        'has-error has-feedback' => !($inputData['isSuccess'] ?? true),
        $width ?? '',
        $extClasses ?? ''
    ])
    class="form-group
    {{ isset($isSuccess) ? ($isSuccess ? 'has-success' : 'has-error has-feedback') : '' }}
    {{ $width ?? '' }}
    {{ $extClasses ?? '' }}
    "
>
    {{ $input ?? '' }}
</div>
