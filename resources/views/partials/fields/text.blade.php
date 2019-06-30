@php
    $db_field = $field['name'];
@endphp
<div class="control-group">
    <label class="control-label">{!! $field['label'] !!}</label>
    <div class="controls">
        <input 
            type="text" 
            name="{{ $field['name'] }}" 
            value="{{ $detail->$db_field ?? '' }}"
            @include('partials.inc.field_attributes')
        >
    </div>
</div>

