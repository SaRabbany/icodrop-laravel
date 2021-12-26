<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../page/ico-pages.css') }}">


    @yield('customCss')
</head>
<body>

    @include('includes.navbar')


    @yield('content')

    <section class="active-ico-page ico-container">
        <div class="container">
            <div class="title">
                <h2>ACTIVE ICO</h2>
            </div>
            <div class="title-box">
                <div class="row">
                    <div class="col-lg-4">
                        <span class="project">PROJECT</span>
                    </div>
                    <div class="col-lg-2">
                        <span class="interest-title">INTEREST</span>
                    </div>
                    <div class="col-lg-2">
                        <span class="category-title">CATEGORY</span>
                    </div>
                    <div class="col-lg-2">
                        <span class="received-title">RECEIVED</span>
                    </div>
                    <div class="col-lg-2">
                        <span class="end-date-title">ENDED DATE</span>
                    </div>
                </div>
            </div>
            <div class="ico-details">
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
                <a class="ico">
                    <div class="row align-items-center">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="img">
                                <img src="../images/pSTAKE_logo-150x150.jpeg" alt="">
                            </div>
                            <div class="info">
                                <div class="name">
                                    <h6>pSTAKE</h6>
                                </div>
                                <div class="desc">
                                    <span>Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 interest">
                            <span>Not Rated</span>
                        </div>
                        <div class="col-lg-2 category">
                            <span>Protocol</span>
                        </div>
                        <div class="col-lg-2 received">
                            <span>$18, 000, 000</span>
                        </div>
                        <div class="col-lg-2 end-date">
                            <span>22 jan</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>







    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>
