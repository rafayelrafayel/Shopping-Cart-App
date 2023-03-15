<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add to cart</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div class="bg-white">
        <header>
            <nav class="navbar">
                <div class="left">
                    <div class="menu-open">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 12H18V10H0V12ZM0 7H18V5H0V7ZM0 0V2H18V0H0Z" fill="white" />
                        </svg>
                    </div>
                    <div class="logo">
                        <span>Shopping App</span>
                    </div>
                </div>
                <div class="right">
                    <div class="search">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z"
                                fill="white" />
                        </svg>

                    </div>
                    <div class="settings">
                        <svg class="settings-open" width="4" height="16" viewBox="0 0 4 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4ZM2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM2 12C0.9 12 0 12.9 0 14C0 15.1 0.9 16 2 16C3.1 16 4 15.1 4 14C4 12.9 3.1 12 2 12Z"
                                fill="white" />
                        </svg>
                        <div class="settings-options">
                            <ul>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Log out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
        </header>

        <main class="my-8">
            @yield('content')
        </main>
    </div>

</body>
<footer>
    <div class="footer-menu">
        <a href="{{ route('products.list') }}">
            <svg width="49" height="35" viewBox="0 0 49 35" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="49" height="35" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_103_144" transform="matrix(0.00793651 0 0 0.0111111 0.142857 0)" />
                    </pattern>
                    <image id="image0_103_144" width="90" height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAADX0lEQVR4nO3cvYscZRzA8e9jJJcDT2w9MFUsBEG0yZ8Qi6hg5UtSiJDW0s6XbtW/QMVYmKSUBBTEKoXIaREiQgqxschdGQiB+IZfi92FY3Obnd1n5rcv8/s01+w8M/O9h7l7dmYXUkoppZTSIeoJ9SN1Xz1QB+qJZR/XRlF31T0fdEM9uezj2wjq8+ofR0Qeu62eXvZxrjX1vHr/IZHH7qvnGo55/NAlaPIXNlCPd31eK0M9pn7SIPCkj9VjM8YezBhjEHWeS6XuqNcWiDz2nfrEQ8afnMmTDiLPdynUU+qtishjv6nPTNnHTNHnHUo9o95pIfLYXfWlI/bT39DqBfWfFiOP/au+O7Gv/oVWt9QvOwg86Yq6PdrnTMvu0iqnL0K6ckM92eSFXZxv6WLQWRwuML4GdoN3vd9kn6WU1ruEh1ZfB74AtqP33VQXoR9pe8BpHC5CBsAVVjhyVx6N2Im6A1wGHvh3qy86D60+DVwDjlxA9EWnlw71DPAzPY8MHYZW3wG+Baa+79Anrf91dXjX43Og0duWK2q7lPJnmwO2OqPVXeA66x0Z4EdbvnPT2oxWXwCuAk+1NeaSHQCvllL22hislRk9WoT8wOZEBngSuK6+1cZgVaF7sAjZAi6qn6pV/wovfOlQHwcu0Z9FyPfAa6WUO4tsvFDoHi9CfgdeKaXcmnfDuS8d6ov0dxFyCthTX553w7lCjxYh39DvRcgOcFX9YJ6NGl06HD7rcBF4c4ED22SXgLdLKX/PemHTGf0hGfko5xi2manpjL5N/N2QdXFQSpnZJuyN/w32X5MXNQ39VcWBbLpGbZqudt4b/TxPXkLG9hlGfr/Ji6veVOrq1vyqqrlpm9foIBk6SIYOkqGDZOggGTpIhg6SoYOEPHs3j7ae5Fy1xVTO6CAZOkiGDpKhg2ToIBk6SIYOkqGDZOggGTpIhg6SoYNk6CAZOkiGDpKhg2ToIBk6SIYOkqGDZOggGTpIhg5S+1zHPeCxNg5kbNWexzjkbs3GtTN67o/qrrGqc60Nfbly+3VSda61n2HZAn4CnqsZZw3cBE43+YTsNFUzupTyF3AW+KVmnBV3EzhbExla+qqf0cy+ALwBPEvLfyCX4B7wK8MvfPmsNnJKKaWUUkoppZTSpvkfnqqllceXlrcAAAAASUVORK5CYII=" />
                </defs>
            </svg>
        </a>
        <a href="{{ route('cart.store') }}">

            <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="36" height="35" fill="url(#pattern1)" />
                <defs>
                    <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_103_145" transform="matrix(0.0108025 0 0 0.0111111 0.0138889 0)" />
                    </pattern>
                    <image id="image0_103_145" width="90" height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAAEB0lEQVR4nO2cTYgcRRTH/2/FhIgGkb3I6lUJnrwEPXtRvAbxnEsuiQoK3r15E1QQb4pevEr8zAYETVZUNiCIHzlG/EpWcTdCItmfh+6FQbp6enqqurpr3g8Ghqnqeq//U/26XlV1S47jOI7jOIMD3AG8DvxFmGvAJnAKOJLb50kCvNEicBOXgeO5/Z4UwBrwz4JCA1wHHs3t/9ixgy/AmqQ9SX3Cwc+SjpnZbizHSmPt4IuZ7Ut6u2c7G5LORPFoFQCOAK8Cf/YIIT/l9r8YgNuAp1vEPpbbx6IAvg4I/UJu38bK2vwqjZwN/P5kX0ecBoDjgR79L3B3bv+KgWrM/WtA7Kdy+zdGeoWOeij4YaDYw0dMgBOBHv07VfLjxAA4CtwIiP1Ibv/GRu+eZ2Z/S/oiUOzh438se4n7MG8IgAcDoWMfuC+3f2NiqR5tZj9IutxUJOmJZdouDZtfpR3gFUnPRvBlyuyomvl80cxuNlWIMQz7IEIbU+ceSc9JejlUIUaPPizpqqQ7l22rAK6Z2XpTwdI92sxuSPp02XYKIahnrAzOw0fF56GCWEKflUSktqZM8MqOIrSZ/SJpO0ZbE+eTUEHMyZ9QlrgqXKnzikZc6Hh81FYYU+ivJP0Wsb2p0TryiiZ0vRjQ+q8WzL6k820VYk/Qr2r4+MbMrrZViC30x5Iac/3CCY42Dogq9JzFgJKZmxmnWNtbtfBxXdLWvEou9PKcr+d7WokutJl9r+bFgFLpNKGWalvAKk0yzb0RSumEXpXw0Zp2z5JK6M8krcLu/84JWhKh65vDZoq2R0bnBY+UW7dKDx9z0+5ZUgtd8mLA3LR7lmRCr8BiQKfRxgGpd32WHD4WWpB2ofvRKe2eJbXQpS4GdEq7Z0kqdMGLAQvvYxliZ36J4WOhG6EUYUvYPICjkv6QdCi1rYG4Ymb3L3pQ8h5d4GJAr1A41EM9JYWPXvsMk4cOSQIekNRplmvk3JR0r5ntLHrgID3azH6UdHEIW4l5v4/I0kA9WpKAxySdG8peAm5JetjMvu1z8GAPXprZpqQ3h7KXgJf6ijw4wO3Ae4EnucbMa8BgV38UqB7Yf57qpVdjZwc4GeO8s/1LwLqkk5Iel/SQpHUNGMoC3FKVXF1SNSR9y1/I5TiO4ziOsxDAYeAZYAvYqz9bwBmqx5+LspsFYAO41JIwbAMbpdjNQt2j2k529qSj9bBcdrNBddl25fTU7WYD+HKBE442l53Lbs65jl11f8fHnpndNWW7uSdxurI/dbs5hf4uUd1R2s0p9DsL1H23ALt5oBpmbXe4IW0D0Tbf5LKbFarEoe2kUyYsg9vNCnAIOA1cBHbrz4X6t2Q9Kpddx3Ecx3Ecx3Gc0fEfYNIu96XZHgAAAAAASUVORK5CYII=" />
                </defs>
            </svg>
        </a>



    </div>
</footer>

</html>
