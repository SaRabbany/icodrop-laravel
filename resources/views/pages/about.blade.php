@extends('includes.app')

        @section('customCss')
            <link rel="stylesheet" href="{{ asset('page/about.css') }}">
        @endsection

@section('content')

    <section class="about-page">
        <div class="container">
            <div class="contents">
                <div class="title">
                    <h2>ABOUT US</h2>
                </div>
                <div class="about-1st-desc">
                    <p>ICODrops is our view on the constantly growing ICO world. We’ve created and are constantly updating three useful lists: Active ICOs, Upcoming ICOs and Ended ICOs for everyone who is interested in ICOs and wants to stay current on the topic. The lists look like a kanban board (Inbox, In Progress, Done).</p>
                </div>
                <div class="ico-numbers my-5 d-flex justify-content-center flex-wrap">
                    <div class="ico-number active">
                        <div class="number">
                            <h3>32</h3>
                        </div>
                        <div class="target">
                            <span>Active ICO's</span>
                        </div>
                    </div>
                    <div class="ico-number ended">
                        <div class="number">
                            <h3>32</h3>
                        </div>
                        <div class="target">
                            <span>Ended ICO's</span>
                        </div>
                    </div>
                    <div class="ico-number upcoming">
                        <div class="number">
                            <h3>32</h3>
                        </div>
                        <div class="target">
                            <span>Upcoming ICO's</span>
                        </div>
                    </div>
                </div>


                <div class="title">
                    <h2>OUR FEATURES</h2>
                </div>

                <div class="page-details">
                    <ul>
                        <li><a class="link" href="">Bounty list</a> for bounty lovers</li>
                        <li><a class="link" href="">Twitter</a> with latest ICO news</li>
                        <li><a class="link" href="">Telegram</a> for bounty lovers</li>
                        <li>Info and analysis for each project</li>
                        <li><a class="link" href="">Bounty list</a> for bounty lovers</li>
                        <li><a class="link" href="">Twitter</a> with latest ICO news</li>
                        <li><a class="link" href="">Telegram</a> for bounty lovers</li>
                        <li>Info and analysis for each project</li>
                    </ul>
                </div>

                <div class="mt-5 title">
                    <h2>MEDIA</h2>
                </div>
                <div class="media-logo">
                    <img src="../LogoDrops.png" alt="">
                </div>

                <div class="mt-5 title">
                    <h2>FAQ</h2>
                </div>
                <div class="faq-cards">
                    <div class="card">
                        <div class="question">
                            <h4>What is ICO?</h4>
                        </div>
                        <div class="ans">
                            <p>An ICO (Initial Coin Offering or Token Sale) is a type of fundraising where in exchange for money (Bitcoin, Ethereum or fiat money) investors receive tokens (coins). Projects that launch an ICO promise an investor that tokens will have value and can be used after the ICO.

                                What is PRE, Pre-sale, Pre-ICO</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="question">
                            <h4>What is ICO?</h4>
                        </div>
                        <div class="ans">
                            <p>An ICO (Initial Coin Offering or Token Sale) is a type of fundraising where in exchange for money (Bitcoin, Ethereum or fiat money) investors receive tokens (coins). Projects that launch an ICO promise an investor that tokens will have value and can be used after the ICO.

                                What is PRE, Pre-sale, Pre-ICO</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="question">
                            <h4>What is ICO?</h4>
                        </div>
                        <div class="ans">
                            <p>An ICO (Initial Coin Offering or Token Sale) is a type of fundraising where in exchange for money (Bitcoin, Ethereum or fiat money) investors receive tokens (coins). Projects that launch an ICO promise an investor that tokens will have value and can be used after the ICO.

                                What is PRE, Pre-sale, Pre-ICO</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="question">
                            <h4>What is ICO?</h4>
                        </div>
                        <div class="ans">
                            <p>An ICO (Initial Coin Offering or Token Sale) is a type of fundraising where in exchange for money (Bitcoin, Ethereum or fiat money) investors receive tokens (coins). Projects that launch an ICO promise an investor that tokens will have value and can be used after the ICO.

                                What is PRE, Pre-sale, Pre-ICO</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="question">
                            <h4>What is ICO?</h4>
                        </div>
                        <div class="ans">
                            <p>An ICO (Initial Coin Offering or Token Sale) is a type of fundraising where in exchange for money (Bitcoin, Ethereum or fiat money) investors receive tokens (coins). Projects that launch an ICO promise an investor that tokens will have value and can be used after the ICO.

                                What is PRE, Pre-sale, Pre-ICO</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="question">
                            <h4>What is ICO?</h4>
                        </div>
                        <div class="ans">
                            <p>An ICO (Initial Coin Offering or Token Sale) is a type of fundraising where in exchange for money (Bitcoin, Ethereum or fiat money) investors receive tokens (coins). Projects that launch an ICO promise an investor that tokens will have value and can be used after the ICO.

                                What is PRE, Pre-sale, Pre-ICO</p>
                        </div>
                    </div>
                </div>


                <div class="home-button">
                    <button>Back To Home</button>
                </div>
            </div>
        </div>
    </section>


@endsection
