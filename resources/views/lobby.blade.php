@extends('template')

@section('title', 'Lobby')

@section('content')
    {{-- @for ($i = 1; $i <= 6; $i++)
    <img src={{ asset('assets/pokemon'.$i.'.jpg') }} class="card-img-top" alt="...">
    @endfor --}}
    <table style="background-color: #8D72E1">
        <tr>
            <td style="width: 85%">
                <div style="margin-left: 20px; margin-bottom: 30px ; color: aqua">
                    <h1>Heaven</h1>
                    <h2>Best Starting 6:</h2>
                </div>
                <div class="row">
                @forelse ($pokData as $pokemon)
                <div class="col-md-4"  >
                    <div class="card" style="height: 450px ; margin-bottom: 70px; margin-right: 10px; border-radius: 30px">
                    <img src="{{$pokemon->image_url}}" alt="" style="width: 50% ; margin:auto ; height: 40% ">
                    <div class="card-body" style="background-color: #BCEAD5 ; border-radius: 0 0 30px 30px">
                    <table>
                        <tr>
                            <h1 class="card-title">{{$pokemon->name}}</h1>
                            <h2 class="card-title">{{$pokemon->type}}</h2>
                        </tr>
                        <tr>
                        <td style="width: 50%">
                            <h3>Health    : 300</h3>
                            <h3>Attack    : 385</h3>
                            <h3>Defense   : 187</h3>
                        </td>
                        <td>
                            <h3>Sp-Attack : 405</h3>
                            <h3>Sp-Defense: 164</h3>
                            <h3>Speed     : 398</h3>
                        </td>
                    </tr>
                </table>
            </div>
                </div>
            </div>
            @empty
                <p>no pokemon</p>
            @endforelse
        </div>
            </td>
            <td style="background-color: #404258 ; color: white">
                <div style="position: absolute; top: 30px">
                    <div style="background-color: #BCEAD5">
                        <h1 style="background-color:#BCEAD5; color: black">Trainers Beat :</h1>
                    </div>
                    <h2>- Albert</h2>
                    <h2>- Steven</h2>
                    <h2>- Jack</h2>
                    <h2>- Ruffus    </h2>
                    <h2>- James</h2>
                    <h2>- Xorex</h2>
                    <h2>- Axel</h2>
                </div>
            </td>
        </tr>
    </table>        
    



   
    {{-- <div class="card " style="width: 35%;" >

        @forelse ($pokData as $pokemon)
        <img src="{{$pokemon->image_url}}" alt="" style="width: 50% ; margin:auto">
            <div class="card-body" >
                <table>
                    <tr>
                        <h1 class="card-title">{{$pokemon->name}}</h1>
                        <h2 class="card-title">{{$pokemon->type}}</h2>
                    </tr>
                    <tr>
                        <td style="width: 50%">
                            <h3>Health    : 300</h3>
                            <h3>Attack    : 385</h3>
                            <h3>Defense   : 187</h3>
                        </td>
                        <td>
                            <h3>Sp-Attack : 405</h3>
                            <h3>Sp-Defense: 164</h3>
                            <h3>Speed     : 398</h3>
                        </td>
                    </tr>
                </table>
            </div>
        @empty
            <p>no Pokemon</p>
        @endforelse
    </div> --}}
   


    {{-- <div class="row">
        <div class="col-m-6">
            
        </div>
    </div>
    </div> --}}
    {{-- @foreach ($pokData as $pokemon)
        <img src="{{$pokemon->image_url}}" alt="">
        <div class="desc">
            <h1>{{$pokemon->name}}</h1>
            <h2>{{$pokemon->type}}</h2>
            <h2>{{$pokemon->stats}}</h2>
        </div>
    @endforeach --}}
    {{-- @foreach ($pokemonData as $pokemon)
    <img src="{{$pokemon->image_url}}" alt="">    
    <h1>{{$pokemon->name}}</h1>
    <h2>{{$pokemon->type}}</h2>
    <h2>{{$pokemon->stats}}</h2>
    @endforeach --}}
@endsection