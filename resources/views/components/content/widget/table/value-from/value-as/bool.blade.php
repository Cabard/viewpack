@if ($value ?? true)
    <span class="d-none">1</span>
    <i class="fas fa-check text-success"></i>
@else
    <span class="d-none">0</span>
    <i class="fas fa-times text-danger"></i>
@endif
