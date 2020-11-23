{!! Form::open(['route' => ['socials.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('socials.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('socials.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
   
</div>
{!! Form::close() !!}
