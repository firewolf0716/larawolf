@for($action_key=1; $action_key<4; $action_key++)
<a href="{{ url('admin/'.$title['slug'].'/'.$actions[$action_key]['action'].'/'.$id) }}" 
    class="btn {{ $actions[$action_key]['class'] }} btn-mini">
    {{ $actions[$action_key]['label'] }}
</a> 
@endfor