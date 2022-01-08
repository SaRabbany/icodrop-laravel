<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../page/card-details.css') }}">
<link rel="icon" type="image/png" href="{{ asset('images/logo/LogoDrops.png') }}" />



    @yield('customCss')
</head>
<body>

    @include('includes.navbar')


    @yield('content')

    <section class="card-details">
        <div class="container">
            <div class="card message-card">
                <p><span class="important">Important: </span> Astra Guild Ventures will hold a Public Sale on the 10. Dec. Astra Guild Venture will hold a Initial Dex Offering on the 19. Dec. The IDO will happen on Copper. Astra Guild Venture will hold a Token Generation Event on the 23. Dec. (Details).</p>
            </div>
            <div class="card details-cards">
                <div class="img-and-details d-flex">
                    <div class="">
                        <div class="logo-img">
                            <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                        </div>
                    </div>
                    <div class="details">
                        <div class="name-category d-flex align-items-end">
                            <h2 class="name">pSTAKE</h2>
                            <h5 class="category">(Blockchain Service)</h5>
                        </div>
                        <div class="small-desc">
                            MeanFi is a self-custody, permissionless and trustless web3 banking application powered by the Mean Protocol, and facilitates everyday banking and retail investment banking workflows to people and businesses around the world.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card coverCard details-cards">
                <div class="card-contents">
                    <div class="coverImg">
                        <img src="../images/cover.png" alt="">
                    </div>
                    <div class="side-details">
                        <div class="token-ends">
                            <span>Token Sale <b class="token-ends-in">ends in <br>16 hours</b></span>
                        </div>
                        <div class="money-transfer">
                            <div class="total-reveived">
                                <b>$8,300,000</b>
                            </div>
                            <h6>OF</h6>
                            <div class="total-amount">
                                <b>$18, 300, 000 <span class="percentage">(18%)</span></b>
                            </div>
                        </div>
                        <div class="website-link mb-3">
                            <a href=""><button>WEBSITE</button></a>
                        </div>
                        <div class="whitepaper-link">
                            <a href=""><button>WHITEPAPER</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card details-cards">
                <div class="card-titles">
                    <h6>TOKEN SALE: 10 DEC - 24 DEC</h6>
                </div>

                <div class="small-details">
                    <ul>
                        <li>Ticker: <b>AGV</b></li>
                        <li>Token type: <b>ERC20</b></li>
                        <li>ICO Token Price: <b>1 AGV = 0.2 USD</b></li>
                        <li>USDFundraising Goal: <b>50,000,000 TOKEN</b></li>
                        <li>Total Tokens: <b>2,000,000,000</b></li>
                    </ul>
                </div>
            </div>
            <div class="card details-cards">
                <div class="card-titles">
                    <h6>SHORT REVIEW</h6>
                </div>

                <div class="small-details">
                    <ul>
                        <li>Role of Token: <b>UTILITY</b></li>
                    </ul>
                </div>
            </div>
            <div class="card screenshot-cards details-cards">
                <div class="card-titles">
                    <h6>SCREENSHOTS</h6>
                </div>

                <div class="screenshot-container">
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                    <div class="screenshot">
                        <div class="image">
                            <img src="../images/cover.png" alt="">
                        </div>
                        <div class="screenshot-name">
                            <span>Main Page</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>
