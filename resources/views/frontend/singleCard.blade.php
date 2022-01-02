@extends('includes.app')

@section('customCss')
    <link rel="stylesheet" href="{{ asset('css/cardDetails/singleCard.css') }}">
@endsection

@section('content')


<section class="card-details">
    <div class="container">
        @if(!is_null($card->importand_notice))
        <div class="card message-card">
            <p><span class="important">Important: </span>{{ $card->importand_notice }} </p>
        </div>
        @endif
        <div class="card details-cards">
            <div class="img-and-details d-flex">
                <div class="">
                    <div class="logo-img">
                        <img src="{{ $card->logo }}" alt="">
                    </div>
                </div>
                <div class="details">
                    <div class="name-category d-flex align-items-end">
                        <h2 class="name">{{ $card->name  }}</h2>
                        <h5 class="category">({{ $card->service_type}})</h5>
                    </div>
                    <div class="small-desc">
                        {{ $card->description}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card coverCard details-cards">
            <div class="card-contents">
                <div class="coverImg">
                    <img src="{{ $card->banner_image }}" alt="">
                </div>
                <div class="side-details">
                    <div class="token-ends">
                        
                    @php
                        $different_days  = \Carbon\Carbon::parse($card->sale_start)->diffInDays($card->sale_end);
                    @endphp
                        <span>Token Sale <b class="token-ends-in">ends in <br>{{ $different_days }} day</b></span>
                    </div>
                    <div class="money-transfer">
                        <div class="total-reveived">
                            <b>${{ $card->price }}</b>
                        </div>
                        <h6>OF</h6>
                        <div class="total-amount">
                            <b> ${{ $card->previous_price }} <span class="percentage">({{ $card->diffrent_parcent }}%)</span></b>
                        </div>
                    </div>
                    <div class="website-link mb-3">
                        <a href="{{ $card->website_link }}"><button>WEBSITE</button></a>
                    </div>
                    <div class="whitepaper-link">
                        <a href="{{ $card->whitepaper }}"><button>WHITEPAPER</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card details-cards">
            <div class="card-titles">
                @php
                    $startMonth =\Carbon\Carbon::parse($card->sale_start)->format('M');
                    $startDate =\Carbon\Carbon::parse($card->sale_start)->format('d');
                    $endMonth = \Carbon\Carbon::parse($card->sale_end)->format('M');
                    $enddate = \Carbon\Carbon::parse($card->sale_end)->format('d');
                @endphp
                <h6>TOKEN SALE:  {{ $startDate }}  {{ $startMonth }} - {{ $enddate }} {{ $endMonth }} </h6>
            </div>

            <div class="small-details">
                <ul>
                    @if(!is_null($card->ticker))
                         <li>Ticker: <b>{{ $card->ticker }}</b></li>
                    @endif

                    <li>Token type: <b>{{ $card->token_type }}</b></li>
                    <li>ICO Token Price: <b>  {{ $card->ico_token_price }}</b></li>

                    @if(!is_null($card->usd_fund_goal))
                    <li>USDFundraising Goal: <b>{{ $card->usd_fund_goal }} TOKEN</b></li>
                    @endif

                    
                    @if(!is_null($card->total_tokens))
                    <li>UTotal Tokens:: <b>{{ $card->total_tokens }} TOKEN</b></li>
                    @endif

                </ul>
            </div>
        </div>
        <div class="card details-cards">
            <div class="card-titles">
                <h6>SHORT REVIEW</h6>
            </div>

            <div class="small-details">
                <ul>
                    <li>Role of Token: <b>{{ $card->role_of_token }}</b></li>
                </ul>
            </div>
        </div>
        <div class="card screenshot-cards details-cards">
            <div class="card-titles">
                <h6>SCREENSHOTS</h6>
            </div>

            @if(!$card->screnshots->isEmpty())
                @foreach ($card->screnshots as $screnshot )
                <div class="screenshot-container">
                    <div class="screenshot">
                        <div class="image">
                            <img src="{{ $screnshot->image }}" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>{{ $screnshot->name }}</span>
                        </div>
                    </div>
                
                </div>
                @endforeach

            @endif

            </div>
        </div>
    </div>
</section>




@endsection