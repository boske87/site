@extends('admin.layouts.admin')

@section('content')

    <h1></h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
    </ol>

    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead"> Dodavanje slika za <a href="{{ route('admin.devojka', $user->id) }}"> {{$user->fullName}}</a></p>
        </div>
    </div>
    @include('admin.layouts.crud.flash_message')

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">

                    <fieldset>

                    {!! Form::open(['route' => ['admin.devojka.galerija.add', $user->id], 'files' => true, 'class' => 'form-horizontal']) !!}

                        @include('admin.layouts.modules.file_input', [
                                         'label' => 'Image',
                                         'inputName' => 'imageName',
                                         'directory' => 'img/gallery',
                                         'hint'=>'Upload the highest resolution possible for optimal results'
                                       ])

                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::hidden('_token',csrf_token()) !!}
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{route('admin.devojke')}}" class="btn btn-link pull-right">Cancel</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </fieldset>
                </div>
            </div>
        </div></div>
@endsection
