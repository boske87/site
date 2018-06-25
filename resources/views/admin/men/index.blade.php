@extends('admin/layouts/crud/index')

@section('index_header')
    <h1>Devojke</h1>


    <div class="cms-options">
        <div class="cms-options-title-action">
            @include('admin.layouts.crud.flash_message')
            <h3 class="cms-options-title">Lista muskaraca</h3>
            {!! link_to_route('admin.men.add', 'Dodaj muskarca', null, ['class' => 'cms-options-action btn btn-lg btn-primary']) !!}
        </div>

    </div> <!-- =cms-options -->
@stop

@section('index_content')
    <span id="tableName" style="display: none; visibility: hidden;">frontGallery</span>
    <div class="table-responsive">
        @if($items->count()>0)
            <table id="sortable-table" class="table">
                <thead>
                <tr>
                    <th>Ime i prezime</th>
                    <th>Status naloga</th>
                    <th>Poslate ponude</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr id="{{ $item->id }}" class="{{ $item->deleted_at ? 'danger' : ''}}">
                        <td>{{$item->fullName}}</td>
                        @if($item->status == 1)
                            <td style="color: red">Suspendovan</td>
                        @else
                            <td style="color: green">Aktivan</td>
                        @endif
                        <td><a href="{{route('admin.men.offers', $item->id)}}">Pogledajte poslate ponude</a></td>
                        <td class="cms-column-actions">
                            <div class="btn-group btn-group-xs cms-table-actions">
                                <a href="{{ route('admin.men-id', $item->id) }}" type="button" class="btn btn-default"><span class="entypo entypo-pencil"></span></a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.men.delete', $item->id], 'onsubmit' => "return confirm('Are you sure you want to DELETE this item?')"]) !!}
                                <button type="submit" class="btn btn-default"><span class="entypo entypo-cross"></span></button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

        @else

            <p class="alert alert-warning">There are no items.</p>
        @endif

    </div>
@endsection

