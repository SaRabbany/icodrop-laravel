@extends('includes.app')
@section('content')

<section class="home-card-section">
    <div class="container cards-row">
        <div class="active-ico cards">
            <div class="title">
                <h2>ACTIVE ICO</h2>
            </div>



            @foreach ($active as $active_card)

            {{-- <a > --}}

            <div class="card">
                <div class="upper d-flex justify-content-between">

                    <div class="left-side d-flex">
                        <div class="image">
                            <img src="{{ $active_card->logo }}" alt="">
                        </div>
                        <div class="info">
                            <div class="name">
                                <h5>{{ $active_card->name }}</h5>
                            </div>
                            <div class="service-name">
                                <span> {{ $active_card->service_type }}</span>
                            </div>
                            <div class="money d-flex">
                                <div class="received">
                                    <span>${{ $active_card->price }} </span>
                                </div>
                                <div class="total">
                                    <span>/ ${{ $active_card->previous_price }}</span>
                                </div>
                            </div>
                            <div class="percentage">
                                <span>{{ $active_card->diffrent_parcent }}%</span>
                            </div>
                        </div>
                    </div>



                    <div class="heart-icon">
                        <i class="far fa-heart heart-i heartIconHeart" item-id="{{ $active_card->id }}"></i>

                        <div class="heart-count">
                            <p style="line-height: .7" id="icoNumber-{{ $active_card->id }}">{{ $active_card->heart }}</p>
                        </div>
                    </div>


                </div>
                <div class="bottom">
                    <div class="rate-time d-flex justify-content-between">
                        <div>
                            <a href="{{ route('singleCard', $active_card->id) }}"> <button class="details-btn">Details </button></a>



                        </div>

                        <div class="timeLeft">

                            @php
                            $different_days = \Carbon\Carbon::parse($active_card->sale_start)->diffInDays($active_card->sale_end);

                            @endphp
                            <span> {{ $different_days }} day left </span>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

            @if(!$active->isEmpty())
            <div class="page-redirect-btn">
                <button>
                    <a href="{{ route('active_ico') }}">VIEW ALL ACTIVE ICO</a>
                </button>
            </div>
            @endif


        </div>


        <div class="upcoming-ico cards">
            <div class="title">
                <h2>UPCOMING ICO</h2>
            </div>



            @foreach ($UpComing as $UpComing_card)

            {{-- <a > --}}
            <div class="card">
                <div class="upper d-flex justify-content-between">

                    <div class="image">
                        <img src="{{ $UpComing_card->logo }}" alt="">
                    </div>
                    <div class="info">
                        <div class="name">
                            <h5>{{ $UpComing_card->name }}</h5>
                        </div>
                        <div class="service-name">
                            <span> {{ $UpComing_card->service_type }}</span>
                        </div>
                        <div class="money d-flex">
                            <div class="received">
                                <span>${{ $UpComing_card->price }} </span>
                            </div>
                            <div class="total">
                                <span>/ ${{ $UpComing_card->previous_price }}</span>
                            </div>
                        </div>
                        <div class="percentage">
                            <span>{{ $UpComing_card->diffrent_parcent }}%</span>
                        </div>
                    </div>
                    <div class="heart-icon">
                        <i class="far fa-heart heart-i heartIconHeart" item-id="{{ $UpComing_card->id }}"></i>

                        <div class="heart-count">
                            <p style="line-height: .7" id="icoNumber-{{ $UpComing_card->id }}">{{ $UpComing_card->heart }}</p>




                        </div>
                    </div>

                </div>
                <div class="bottom">
                    <div class="rate-time d-flex justify-content-between">
                        <div>
                            <a href="{{ route('singleCard', $UpComing_card->id) }}"> <button class=" details-btn">Details </button></a>

                        </div>
                        <div class="timeLeft">

                            @php
                            $different_days = \Carbon\Carbon::parse($UpComing_card->sale_start)->diffInDays($UpComing_card->sale_end);

                            @endphp
                            <span> {{ $different_days }} day left </span>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach

            @if(!$UpComing->isEmpty())
            <div class="page-redirect-btn">
                <button>
                    <a href="{{ route('UpComing_ico') }}">VIEW ALL Upcoming ICO</a>
                </button>
            </div>
            @endif

        </div>



        <div class="ended-ico cards">
            <div class="title">
                <h2>ENDED ICO</h2>
            </div>
            @foreach ($Ended as $Ended_card)
            <div class="card">
                <div class="upper d-flex justify-content-between">

                    <div class="image">
                        <img src="{{ $Ended_card->logo }}" class="img-fluid" alt="">
                    </div>
                    <div class="info">
                        <div class="name">
                            <h5>{{ $Ended_card->name }}</h5>
                        </div>
                        <div class="service-name">
                            <span> {{ $Ended_card->service_type }}</span>
                        </div>
                        <div class="money d-flex">
                            <div class="received">
                                <span>${{ $Ended_card->price }} </span>
                            </div>
                            <div class="total">
                                <span>/ ${{ $Ended_card->previous_price }}</span>
                            </div>
                        </div>
                        <div class="percentage">
                            <span>{{ $Ended_card->diffrent_parcent }}%</span>
                        </div>
                    </div>


                    <div class="heart-icon">
                        <i class="far fa-heart heart-i heartIconHeart" item-id="{{ $Ended_card->id }}"></i>

                        <div class="heart-count">
                            <p style="line-height: .7" id="icoNumber-{{ $Ended_card->id }}">{{ $Ended_card->heart }}</p>

                        </div>
                    </div>

                </div>
                <div class="bottom">

                    <div class="rate-time d-flex justify-content-between">
                        <div>
                            <a href="{{ route('singleCard', $Ended_card->id) }}"> <button class="details-btn">Details </button></a>
                        </div>
                        <div class="timeLeft">
                            @php
                            $different_days = \Carbon\Carbon::parse($Ended_card->sale_start)->diffInDays($Ended_card->sale_end);
                            @endphp
                            <span> {{ $different_days }} day left </span>
                        </div>
                    </div>
                </div>
            </div>
            </a>

            @endforeach

            @if(!$Ended->isEmpty())
            <div class="page-redirect-btn">
                <button>
                    <a href="{{ route('Ended_ico') }}">VIEW ALL Ended ICO</a>
                </button>
            </div>

            @endif


        </div>




    </div>



</section>


<script src="{{ asset('js/heart.js') }}"></script>

@endsection


@section('customJs')
<script>
    $(document).ready(function() {

        $('.heartIconHeart').on('click', function() {

            const itemId = $(this).attr('item-id');
            const previousNumber = parseInt($("#icoNumber-" + itemId).text());

            if ($(this).hasClass('heart-bg')) {

                const route = '{{ route('index') }}';
                const url = route + "/api/" + "update-heart-plus";

                $.ajax({
                    url: url
                    , dataType: "json"
                    , type: "POST"
                    , data: {
                        itemId: itemId
                    }
                    , success: function(data) {
                        $("#icoNumber-" + itemId).text(previousNumber + 1);

                    }
                });


            } else {

                const route = '{{ route('index') }}';
                const url = route + "/api/" + "update-heart-minus";

                $.ajax({
                    url: url
                    , dataType: "json"
                    , type: "POST"
                    , data: {
                        itemId: itemId
                    }
                    , success: function(data) {
                        $("#icoNumber-" + itemId).text(previousNumber - 1);

                    }
                });



            }



        });


    });

</script>

@endsection
