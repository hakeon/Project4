/Applications/MAMP/htdocs/Project4/app/views/projects/create.blade.php
@section('main')
    <h2>Create Project</h2>

    {{ Form::model(new Project, ['route' => ['projects.store']]) }}
        @include('projects/partials/_form', ['submit_text' => 'Create Project'])
    {{ Form::close() }}
@stop