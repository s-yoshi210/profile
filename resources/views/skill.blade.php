<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>スキルセット</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-light">
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
    <main class="skill my-4">
        <div class="container text-center">
            <!-- タイトル -->
            <h1 class="mb-4">スキルセット</h1>
            <!-- コンテンツ -->
            <div class="row justify-content-center">
                <div class="col-md-6 py-3">
                    <div class="card">
                        <div class="card-header bg-primary text-white font-weight-bold">
                            <i class="fas fa-desktop mr-3"></i><span>フロントエンド</span>
                        </div>
                        <div class="card-body">
                            <p>案件で使用していました。</p>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">技術</th>
                                        <th scope="col">経験年数</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>JavaScript</td>
                                        <td>5年</td>
                                    </tr>
                                    <tr>
                                        <td>jQuery</td>
                                        <td>5年</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card">
                        <div class="card-header bg-success text-white font-weight-bold">
                            <i class="fas fa-desktop mr-3"></i><span>バックエンド</span>
                        </div>
                        <div class="card-body">
                            <p>案件で使用していました。</p>
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">技術</th>
                                    <th scope="col">経験年数</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>JavaScript</td>
                                    <td>5年</td>
                                </tr>
                                <tr>
                                    <td>jQuery</td>
                                    <td>5年</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card">
                        <div class="card-header bg-secondary text-white font-weight-bold">
                            <i class="fas fa-desktop mr-3"></i><span>DB</span>
                        </div>
                        <div class="card-body">
                            <p>案件で使用していました。</p>
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">技術</th>
                                    <th scope="col">経験年数</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>JavaScript</td>
                                    <td>5年</td>
                                </tr>
                                <tr>
                                    <td>jQuery</td>
                                    <td>5年</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card">
                        <div class="card-header bg-warning text-white font-weight-bold">
                            <i class="fas fa-desktop mr-3"></i><span>デザイン</span>
                        </div>
                        <div class="card-body">
                            <p>案件で使用していました。</p>
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">技術</th>
                                    <th scope="col">経験年数</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>JavaScript</td>
                                    <td>5年</td>
                                </tr>
                                <tr>
                                    <td>jQuery</td>
                                    <td>5年</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card">
                        <div class="card-header bg-info text-white font-weight-bold">
                            <i class="fas fa-desktop mr-3"></i><span>インフラ・サーバー</span>
                        </div>
                        <div class="card-body">
                            <p>案件で使用していました。</p>
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">技術</th>
                                    <th scope="col">経験年数</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>JavaScript</td>
                                    <td>5年</td>
                                </tr>
                                <tr>
                                    <td>jQuery</td>
                                    <td>5年</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card">
                        <div class="card-header bg-danger text-white font-weight-bold">
                            <i class="fas fa-desktop mr-3"></i><span>その他</span>
                        </div>
                        <div class="card-body">
                            <p>案件で使用していました。</p>
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">技術</th>
                                    <th scope="col">経験年数</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>JavaScript</td>
                                    <td>5年</td>
                                </tr>
                                <tr>
                                    <td>jQuery</td>
                                    <td>5年</td>
                                </tr>
                                </tbody>
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
