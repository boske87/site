@extends('admin/layouts/crud/index')

@section('index_header')
    <h1>Devojke</h1>


    <div class="cms-options">
        <div class="cms-options-title-action">
            @include('admin.layouts.crud.flash_message')
            <h3 class="cms-options-title">Muskarac - -> <a href="{{ route('admin.men-id', $user->id) }}"> {{$user->fullName}}</a></h3>

        </div>

    </div> <!-- =cms-options -->
@stop

@section('index_content')
    <span id="tableName" style="display: none; visibility: hidden;">frontGallery</span>
    <div class="table-responsive">
        @if($offers->count()>0)
            <table id="sortable-table" class="table">
                <thead>
                <tr>
                    <th>Ponuda za</th>
                    <th>Tip ponude</th>
                    <th>Status ponude</th>
                    <th>Vreme ponude</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($offers as $key=>$oneOffer)
                    @foreach($oneOffer->myOffers as $offerOne)
                    <tr id="{{$key}}" style="background-color: {{ $key % 2 == 0 ? '#ffffff': '#adabab' }};">
                        <td><a href="{{route('admin.devojka',$offerOne->offerToGirl->id)}}" >{{$offerOne->offerToGirl->name}}</a></td>
                            <td style="color: red">{{ $oneOffer->offerType == 0 ? 'Izlazak' : 'Putovanje' }}</td>
                        <td>
                            @if($offerOne->status == 0 )
                                Ponuda je na cekanju
                            @elseif($offerOne->status == 1 )
                                <p style="color: red">Odbijena</p>
                            @else
                                <p style="color: green">Prihvacena</p>
                            @endif

                        </td>
                        <td>{{$oneOffer->created_at}}</td>
                        <td class="cms-column-actions">
                            <div class="btn-group btn-group-xs cms-table-actions">
                                <a href="{{ route('admin.girl.offer', $offerOne->offerId) }}" type="button" class="btn btn-default"><span class="entypo entypo-pencil"></span></a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                @endforeach

                </tbody>
            </table>

        @else

            <p class="alert alert-warning">There are no items.</p>
        @endif

    </div>
@endsection

