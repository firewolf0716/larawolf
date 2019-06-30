{{-- Show the errors, if any --}}

@if($errors->any())
<div class="row-fluid">
  <h4>{{ 'Errors!' }}</h4>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
