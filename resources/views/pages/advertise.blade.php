@extends('includes.app')

@section('customCss')
<link rel="stylesheet" href="{{ asset('page/advertise.css') }}">

@endsection

@section('content')

<section class="about-page">
    <div class="container">
        <div class="contents">
            <div class="title">
                <h1>ICO Bulls ADVERTISING</h1>

            </div>
            <div class="row adertising-content">
                <div class="col-md-8">
                    <div class="top-content">
                        <p>ICO drops is one of the most popular ICO databases. Our audience is ICO investors from USA, Russia, China and Japan.</p>
                        <p>
                            Our team manually selects the most <strong>interesting ICOs</strong>. Only approved ICOs may take part in our ad program. No premium (paid) listings are allowed.


                        </p>
                        <p>If anyone if asking you money for listing on ICODrops - be careful, it is a scam! The only existing domain is: icodrops.com.</p>
                        <p>Your project will receive immediate attention from the <strong>target audience</strong>.</p>

                    </div>
                </div>
                <div class="col-md-4 top-card">
                    <div class="card mb-3" style="max-width: auto;">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="https://icodrops.com/wp-content/themes/ico-drops-2-0/img/lightning.svg" class="img-fluid rounded-start" alt="...">

                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">INSTANT ATTENTION</h5>

                                    <p class="card-text">Be sure that your project will be immediately noticed by the target audience</p>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: auto;">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="https://icodrops.com/wp-content/themes/ico-drops-2-0/img/pin.svg" class="img-fluid rounded-start" alt="...">


                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">INSTANT ATTENTION</h5>

                                    <p class="card-text">Be sure that your project will be immediately noticed by the target audience</p>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <section id="FORMATS">
                <h2>3 FORMATS</h2>
                <div class="row row-cols-1 row-cols-md-2 g-4 format">


                    <div class="col bottom-card">
                        <div class="card">
                            <img src="{{ asset("images/logo/pinned-card.png") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">PINNED CARD</h5>
                                <ul>
                                    <li>Pinned on the top of the ICO lists.</li>

                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col bottom-card">
                        <div class="card">
                            <img src="{{ asset("images/logo/pinned-card.png") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">PINNED CARD</h5>
                                <ul>
                                    <li>Pinned on the top of the ICO lists.</li>

                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col bottom-card">
                        <div class="card">
                            <img src="{{ asset("images/logo/pinned-card.png") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">PINNED CARD</h5>
                                <ul>
                                    <li>Pinned on the top of the ICO lists.</li>

                                </ul>


                            </div>
                        </div>
                    </div>


                </div>



            </section>

            <section id="ADVERTISING_CONTACTS">

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 last-card">
                            <div class="card mb-3" style="max-width: auto;">
                                <div class="row g-0 d-flex justify-center align-items-center">
                                    <div class="col-md-2">
                                        <img src="https://icodrops.com/wp-content/themes/ico-drops-2-0/img/Email.svg" class="img-fluid rounded-start" alt="...">


                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Email</h5>

                                            <p class="card-text">ENGLISH/RUSSIAN</p>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 last-card">
                            <div class="card mb-3" style="max-width: auto;">
                                <div class="row g-0 d-flex justify-center align-items-center">
                                    <div class="col-md-2">
                                        <img src="https://icodrops.com/wp-content/themes/ico-drops-2-0/img/Email.svg" class="img-fluid rounded-start" alt="...">


                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">Email</h5>

                                            <p class="card-text">ENGLISH/RUSSIAN</p>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
`1
                    </div>
                </div>

            </section>










            <div class="home-button">
                <button>Back To Home</button>
            </div>
        </div>
    </div>
</section>


@endsection
