@extends('admin.layouts.admin')

@section('content')
    <style>
        select.color-list option.option2
        {
            background-color: #007700;
        }
    </style>
    <h1>Detalji ponude br - {{$item->id}}</h1>


    <div class="cms-options">
        <div class="cms-options-title-action">
            <p class="cms-options-title lead"></p>
        </div>
    </div>
    @include('admin.layouts.crud.validation_flash_error')
    <ul id="forms-tabs" class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1">Basic</a></li>
    </ul>
    {!! Form::model($item, ['method' => 'PATCH', 'route' => ['admin.men-id.update', $item->id], 'files' => true, 'class' => 'form-horizontal']) !!}
    @if($item->offerType == 1 )
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <fieldset>
                        <div class="form-group{!! $errors ->has('offerFrom') ? ' has-error' : '' !!}">
                            {!! Form::label('offerFrom', 'Ponuda od korisnika:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('offerFrom', $item->offerByMan->name, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('offerFrom', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('offerType') ? ' has-error' : '' !!}">
                            {!! Form::label('offerType', 'Tip ponude:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('offerType', $item->offerType == 0 ? 'Izlazak' : 'Putovanje', ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('offerType', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Username Form Input -->
                        <div class="form-group{!! $errors ->has('city') ? ' has-error' : '' !!}">
                            {!! Form::label('city', 'Grad', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('city', $item->city, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('city', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Username Form Input -->
                        <div class="form-group{!! $errors ->has('place') ? ' has-error' : '' !!}">
                            {!! Form::label('place', 'Nacin putovanja', ['class' => 'col-sm-2 control-label','disabled']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('place', $item->travelOption, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('place', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>


                        <div class="form-group{!! $errors ->has('year') ? ' has-error' : '' !!}">
                            {!! Form::label('year', 'Hotel', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('year', $item->place, ['class' => 'form-control', 'number','disabled']) !!}
                                {!! $errors ->first('year', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('job') ? ' has-error' : '' !!}">
                            {!! Form::label('job', 'Datum odlaska', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('job', $item->timeOfferStart, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('job', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('phone') ? ' has-error' : '' !!}">
                            {!! Form::label('phone', 'Datum povratka', ['class' => 'col-sm-2 control-label','disabled']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone', $item->timeOfferReturn, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('phone') ? ' has-error' : '' !!}">
                            {!! Form::label('phone', 'Broj devojaka', ['class' => 'col-sm-2 control-label','disabled']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone', $item->maxGirls, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('phone') ? ' has-error' : '' !!}">
                            {!! Form::label('phone', 'Cena', ['class' => 'col-sm-2 control-label','disabled']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone', $item->price, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                    </fieldset>
                </div>
                <!-- =tab-2-->
            </div>
            <!-- =tab-content -->
            <div class="row">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="{{route('admin.men')}}" class="btn btn-link pull-right">Vracanje nazad</a>
                </div>
            </div>
        </div>

    </div>


    @else
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <fieldset>
                        <div class="form-group{!! $errors ->has('offerFrom') ? ' has-error' : '' !!}">
                            {!! Form::label('offerFrom', 'Ponuda od korisnika:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('offerFrom', $item->offerByMan->name, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('offerFrom', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('offerType') ? ' has-error' : '' !!}">
                            {!! Form::label('offerType', 'Tip ponude:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('offerType', $item->offerType == 0 ? 'Izlazak' : 'Putovanje', ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('offerType', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Username Form Input -->
                        <div class="form-group{!! $errors ->has('city') ? ' has-error' : '' !!}">
                            {!! Form::label('city', 'Grad', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('city', $item->city, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('city', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Username Form Input -->
                        <div class="form-group{!! $errors ->has('place') ? ' has-error' : '' !!}">
                            {!! Form::label('place', 'Mesto na koje se izlazi', ['class' => 'col-sm-2 control-label','disabled']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('place', $item->place, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('place', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>


                        <div class="form-group{!! $errors ->has('year') ? ' has-error' : '' !!}">
                            {!! Form::label('year', 'Adresa mesta na koje se izlazi', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('year', $item->placeAddress, ['class' => 'form-control', 'number','disabled']) !!}
                                {!! $errors ->first('year', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('job') ? ' has-error' : '' !!}">
                            {!! Form::label('job', 'Datum i vreme', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('job', $item->timeOfferStart.' do '.$item->timeOfferReturn, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('job', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('phone') ? ' has-error' : '' !!}">
                            {!! Form::label('phone', 'Vremenski period', ['class' => 'col-sm-2 control-label','disabled']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone', $item->timeOfferRange, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('phone') ? ' has-error' : '' !!}">
                            {!! Form::label('phone', 'Broj devojaka', ['class' => 'col-sm-2 control-label','disabled']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone', $item->maxGirls, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{!! $errors ->has('phone') ? ' has-error' : '' !!}">
                            {!! Form::label('phone', 'Cena', ['class' => 'col-sm-2 control-label','disabled']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone', $item->price, ['class' => 'form-control','disabled']) !!}
                                {!! $errors ->first('phone', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                    </fieldset>
                </div>
                <!-- =tab-2-->
            </div>
            <!-- =tab-content -->
            <div class="row">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="{{route('admin.men')}}" class="btn btn-link pull-right">Vracanje nazad</a>
                </div>
            </div>
        </div>

    </div>
    @endif
    {!! Form::close() !!}
@stop
