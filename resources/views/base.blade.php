<!DOCTYPE html>
<html lang="english">

<head>
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="{{ asset('css/menu-mobile.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body>
    <div class="container">
        <div class="header-mobile">
            <div class="menu">
                <input id="toggle" type="checkbox">
                <label class="toggle-container" for="toggle">
                    <span class="button button-toggle"></span>
                </label>
                <nav class="nav">
                    <a class="nav-item <?= $pageName == 'index' ? 'active' : '' ?>" href="{{ route('index') }}">Home</a>
                    <a class="nav-item <?= $pageName == 'vocabulary' ? 'active' : '' ?>" href="{{ route('vocabulary') }}">Vocabulary</a>
                    <a class="nav-item <?= $pageName == 'grammar' ? 'active' : '' ?>" href="{{ route('grammar') }}">Grammar</span></a>
                    <a class="nav-item <?= $pageName == 'tests' ? 'active' : '' ?>" href="{{ route('tests') }}">Tests</a>
                </nav>
            </div>
            <span class="logo">Freenglish</span>
        </div>
        <div class="header">
            <span class="logo">Freenglish</span>
            <div class="menu">
                <a class="home" href="{{ route('index') }}">Home</a>
                <a class="vocabulary" href="{{ route('vocabulary') }}">Vocabulary</a>
                <a class="grammar" href="{{ route('grammar') }}">Grammar</a>
                <a class="tests" href="{{ route('tests') }}">Tests</a>
            </div>
        </div>

        @yield('content')

        <div class="footer">
            <div class="side-info">
                <span class="logo">Freenglish</span>
                <span class="slogan">
                    Improve your English with us!
                </span>
                <img src="{{ asset('img/socnet.svg') }}" class="socnet" />
                <span class="download">Download for:</span>
                <div class="mob-app">
                    <img src="{{ asset('img/googleplayicon.png') }}" class="googleplay" />
                    <img src="{{ asset('img/appstoreicon.png') }}" class="appstore" />
                </div>
            </div>
            <div class="sections">
                <div class="service-section">
                    <span class="service">Service</span>
                    <span class="download">Download</span>
                    <span class="vocabulary">Vocabulary</span>
                    <span class="grammar">Grammar</span>
                    <span class="tests">Tests</span>
                    <span class="resourses">Resourses</span>
                </div>
                <div class="company-section">
                    <span class="company">Company</span>
                    <span class="about-us">FAQ</span>
                    <span class="faq">About Us</span>
                    <span class="support">Support</span>
                </div>
                <div class="privacy-section">
                    <span class="privacy">Privacy</span>
                    <span class="terms-of-use">
                        <span>Terms of Use</span>
                        <br />
                        <span></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="footer-mobile">
            <img src="{{ asset('img/socnet.svg') }}" class="socnet" />
            <span class="logo">Freenglish</span>

            <span class="slogan">
                Improve your English with us!
            </span>
        </div>
    </div>
</body>

</html>