@extends('admin.layouts.admin')

@section('content')
    <style>
        select.color-list option.option2
        {
            background-color: #007700;
        }
    </style>
    <h1>User Page</h1>

    <ol class="breadcrumb">
        <li>User Page</li>
        <li class="active">Edit User</li>
    </ol>

    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead">User Page</p>
        </div>
    </div>
    @include('admin.layouts.crud.validation_flash_error')
    <ul id="forms-tabs" class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1">Basic</a></li>
    </ul>
    {!! Form::open(['route' => 'admin.devojke.add', 'files' => true, 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <fieldset>
                        <div class="form-group{!! $errors ->has('fullName') ? ' has-error' : '' !!}">
                            {!! Form::label('fullName', 'Ime i prezime', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('fullName', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('fullName', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('name') ? ' has-error' : '' !!}">
                            {!! Form::label('nadimak', 'Nadimak', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('name', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Username Form Input -->
                        <div class="form-group{!! $errors ->has('email') ? ' has-error' : '' !!}">
                            {!! Form::label('email', 'Email Adresa', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Username Form Input -->
                        <div class="form-group{!! $errors ->has('password') ? ' has-error' : '' !!}">
                            {!! Form::label('password', 'Sifra', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('password', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>


                        <div class="form-group{!! $errors ->has('city') ? ' has-error' : '' !!}">
                            {!! Form::label('city', 'Grad', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('city', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('city', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('height') ? ' has-error' : '' !!}">
                            {!! Form::label('height', 'Visina cm', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::number('height', null, ['class' => 'form-control', 'number']) !!}
                                {!! $errors ->first('height', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{!! $errors ->has('weight') ? ' has-error' : '' !!}">
                            {!! Form::label('weight', 'Tezina Kg', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::number('weight', null, ['class' => 'form-control', 'number']) !!}
                                {!! $errors ->first('weight', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('year') ? ' has-error' : '' !!}">
                            {!! Form::label('year', 'Godiste', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::number('year', null, ['class' => 'form-control', 'number']) !!}
                                {!! $errors ->first('year', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('job') ? ' has-error' : '' !!}">
                            {!! Form::label('job', 'Zanimanje', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('job', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('job', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{!! $errors ->has('lang') ? ' has-error' : '' !!}">
                            {!! Form::label('lang', 'Jezici', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('lang', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('lang', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('phone') ? ' has-error' : '' !!}">
                            {!! Form::label('phone', 'Broj telefona', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('stars') ? ' has-error' : '' !!}">
                            {!! Form::label('stars', 'Broj zvezdica', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::number('stars', null, ['class' => 'form-control']) !!}
                                {!! $errors ->first('stars', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                    </fieldset>
                </div>
                <!-- =tab-2-->
            </div>
            <!-- =tab-content -->
            <div class="row">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>

    </div>
    {!! Form::close() !!}
@stop
