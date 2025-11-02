<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Risk Analiz')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mix.css') }}">
</head>

<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="{{ url('/') }}" class="logo">
                <img class="logo" src="https://www.riskanaliz.com.tr/wp-content/uploads/2025/04/risk-.png" alt="">
            </a>

            <nav class="nav-links">
                <a href="{{ url('/') }}">Ana Sayfa</a>
                <a href="{{ url('/hakkimizda') }}">Hakkımızda</a>

                <!-- Check -->
                <a href="{{ route('check.get') }}">Çek Analizi</a>

                <!-- Kredi -->
                <a href="{{ route('credit.get') }}">Bireysel Kredi Risk Analizi</a>
                <a href="{{ route('credit.get') }}">Kurumsal Kredi Risk Analizi</a>

                
                <a href="{{ route('dealer.get') }}">Bireysel Başvuru</a>
                <a href="{{ url('/iletisim') }}">İletişim</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-content">
            <p>© {{ date('Y') }} Risk Analiz. Tüm hakları saklıdır.</p>
            <div class="social">
                <a href="#"><img src="/images/facebook.svg" alt="Facebook"></a>
                <a href="#"><img src="/images/linkedin.svg" alt="LinkedIn"></a>
                <a href="#"><img src="/images/twitter.svg" alt="Twitter"></a>
            </div>
        </div>
    </footer>

</body>

</html>
