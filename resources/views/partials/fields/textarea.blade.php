@php
    $db_field = $field['name'];
@endphp

<div class="control-group">
    <label class="control-label">{!! $field['label'] !!}</label>
    <div class="controls">
        <textarea 
            name="{{ $field['name'] }}" 
            @include('partials.inc.field_attributes')
        >{{ $detail->$db_field ?? '' }}</textarea>
    </div>
</div>