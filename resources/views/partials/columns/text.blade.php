@php
    $db_field = $column['name'];
    $value = $detail->$db_field;
@endphp

<span>{{ str_limit(strip_tags($value), array_key_exists('limit', $column) ? $column['limit'] : 50, "[...]") }}</span>

