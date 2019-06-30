@php
    $db_field = $column['name'];
    $value = $detail->$db_field;
@endphp

<span>{!! $value !!}</span>