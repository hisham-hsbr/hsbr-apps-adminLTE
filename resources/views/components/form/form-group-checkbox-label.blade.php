@props(['label_for', 'label_name', 'input_type', 'input_name', 'input_class','input_style', 'input_id', 'input_value',
'input_placeholder','input_add'])
<div class="form-group mb-0">
    <div class="custom-control custom-checkbox">
        <input type="{{ $input_type }}" name="{{ $input_name }}" class="custom-control-input {{ $input_class }}"
            style="{{ $input_style }}" value="{{ $input_value }}" {{ $input_add }} id="{{ $input_id }}">
        <label class="custom-control-label" for="{{ $label_for }}">{{ $label_name }}</label>
    </div>
</div>