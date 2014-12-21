/Applications/MAMP/htdocs/Project4/app/views/projects/index.blade.php

@section('content')
    <h2>Projects</h2>
    @if ( !$projects->count() )
        You have no projects
    @else
        <ul class="List-group">
            @foreach( $projects as $project )
                <li class="list-group-item">
                    <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                        {{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) }}
                            {{ link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) }},

                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                </li>
            @endforeach
        </ul>
    @endif

    <p>{{ link_to_route('projects.create', 'Create Project') }}</p>
@stop