{{-- Show the inputs --}}
@foreach ($fields as $field)
    @include('partials.fields'.'.'.$field['type'], ['field' => $field])
@endforeach