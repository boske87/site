@extends('admin/layouts/crud/index')

@section('index_header')
    <h1>Devojke</h1>


    <div class="cms-options">
        <div class="cms-options-title-action">
            @include('admin.layouts.crud.flash_message')
            <h3 class="cms-options-title">Devojka - -> <a href="{{ route('admin.devojka', $user->id) }}"> {{$user->fullName}}</a></h3>

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
                    <th>Ponuda od</th>
                    <th>Tip ponude</th>
                    <th>Status ponude</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)

                    <tr id="{{ $item->id }}" class="{{ $item->deleted_at ? 'danger' : ''}}">
                        <td> <a href="{{ route('admin.men-id', $item->offer->offerByMan->id) }}">{{$item->offer->offerByMan->name}}</a></td>
                            <td style="color: red">{{ $item->offer->offerType == 0 ? 'Izlazak' : 'Putovanje' }}</td>
                        <td> @if($item->status == 0 )
                                Ponuda je na cekanju
                            @elseif($item->status == 1 )
                                Odbijena
                            @else
                                Prihvacena
                            @endif
                        </td>
                        <td class="cms-column-actions">
                            <div class="btn-group btn-group-xs cms-table-actions">
                                <a href="{{ route('admin.girl.offer', $item->offerId) }}" type="button" class="btn btn-default"><span class="entypo entypo-pencil"></span></a>

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

