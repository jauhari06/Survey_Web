<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Landing Page</title>
</head>

<body>
    <section class="navigation">
        <div class="container">
            <div class="box-navigation">
                <div class="logo">
                    <img src="assets/512px-Logo_Universitas_Brawijaya.svg.png" alt="" />
                    <div class="logo-text">
                        <h1>UNIVERSITAS BRAWIJAYA</h1>
                        <h2>FAKULTAS VOKASI</h2>
                    </div>
                </div>
                <div class="admin-login">
                    <a href="{{ url('/login') }}"><i class="fas fa-user"></i> Admin</a>
                </div>
            </div>
            <div class="survey-link">
                <a href="{{ url('/survey') }}">
                    <span class="material-symbols-rounded">navigate_next</span>
                    <p>Mulai Survei</p>
                </a>
            </div>
            <div class="welcome-text">
                <h1>SELAMAT DATANG DI</h1>
                <h2 class="welcome_text">
                    Survey Kepuasan Civitas Akademik Vokasi UB
                </h2>
            </div>
        </div>
        <div class="line"></div>
        <div class="copyright-container">
            <p class="copyright">&#169; 2023 TI VOK-UB</p>
        </div>
    </section>
</body>

</html>