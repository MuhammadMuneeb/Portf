@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Portfolio</div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'saveportfolio', 'files'=> true])!!}

                      <div class="form-group">
                        {!! Form::label('Name', 'Project name') !!}
                        {!! Form::text('Name', null, ['class'=>'form-control']) !!}

                        {!! Form::label('Client_review', 'Client review') !!}
                        {!! Form::textarea('Client_review', null, ['class'=>'form-control']) !!}

                        {!! Form::label('Project_Date', 'Project Date') !!}
                        {!! Form::date('Project_Date', null, ['class'=>'form-control']) !!}

                        {!! Form::label('Technology_used', 'Technology used')!!}
                        {!! Form::text('Technology_used', null, ['class'=>'form-control'])!!}

                        {!! Form::label('Project_Link', 'Project link') !!}
                        {!! Form::text('Project_Link', null, ['class'=>'form-control'])!!}

                      </br>
                        {!! Form::label('Featured_Image_URL', 'Featured Image')!!}
                        {!! Form::text('Featured_Image_URL', null, ['class'=>'form-control']) !!}
                      </br>
                        {!! Form::label('Alt_Image_URL', 'Alt Image')!!}
                        {!! Form::text('Alt_Image_URL', null, ['class'=>'form-control']) !!}
                      </br>

                      </div>
                      <div class="form-group">
                        {!! Form::submit('Add Item', ['class'=>'btn btn-primary'])!!}
                      </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
