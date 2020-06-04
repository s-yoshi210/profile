<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>プロフィール</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">

        <!-- ヘッダー -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link px-4" href="/">プロフィール</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="/skill">スキルセット</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="/actual_results">過去実績</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="/development">個人開発成果物</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="/contact">お問い合わせ</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- メイン -->
        <main class="profile mt-4 mt-md-5">
            <div class="container text-center">
                <!-- タイトル -->
                <h1>プロフィール</h1>
                <!-- コンテンツ -->
                <div class="row justify-content-center mt-md-5">
                    <div class="col-md-5">
                        <img src="/images/猫.png" class="rounded-circle" alt="">
                    </div>
                    <div class="col-md-5 mt-3 text-left">
                        <div class="row">
                            <div class="col-md-12 minh-300">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="col-md-12">
                                <table class="table text-center">
                                    <tr>
                                        <th>GitHub</th>
                                        <td><a href="https://github.com/s-yoshi210">s-yoshi210</a></td>
                                    </tr>
                                    <tr>
                                        <th>Twitter</th>
                                        <td><a href="https://twitter.com/SYoshi210">Yoshi</a></td>
                                    </tr>
                                    <tr>
                                        <th>Qiita</th>
                                        <td><a href="https://qiita.com/s-yoshi210">s-yoshi210</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- フッター -->
        <footer class="py-3 bg-dark text-light">
            <div class="container text-center">
                <p><small>Copyright &copy;2020 Yoshitaka Shimazu, All Rights Reserved.</small></p>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
