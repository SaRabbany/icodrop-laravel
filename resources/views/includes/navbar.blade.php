<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <div class="logo">
                <img src="{{ asset('images/logo/LogoDrops.png') }}" alt="">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <img src="menu.svg" alt="">
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ asset('/') }}">HOME</a>
                <a class="nav-link" href="{{ asset('/about') }}">ABOUT</a>
                <a class="nav-link" aria-current="page" href="{{ asset ('/active-ico-list') }}">ACTIVE ICO</a>
                <a class="nav-link" href="{{ asset ('/upcoming-ico-list') }}">UPCOMING ICO</a>
                <a class="nav-link" href="{{ asset('/ended-ico-list') }}">ENDED ICO</a>
                <a class="nav-link" href="{{ asset('/whitelist') }}">WHITELIST</a>
            </div>
        </div>
    </div>
</nav>
<header>
    <div class="container">
        <div class="situation d-flex">
            <span class="">BTC $49143 <span class="greenNumber">+07%</span></span>
            <span>ETH $4002  <span class="redNumber">-0.6%</span></span>
        </div>
        <div class="smallDesc">
            <p><span class="redNumber">*</span> DISCLAIMER: All information including our "Interest Level" rating, is provided merely for informational purposes. ICO Drops does not provide investment advice </p>
        </div>
    </div>
</header>
