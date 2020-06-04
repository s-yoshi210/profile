<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>個人開発成果物</title>

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
    <main class="development mt-4">
        <div class="container text-center">
            <!-- タイトル -->
            <h1 class="mb-4">個人開発成果物</h1>
            <!-- コンテンツ -->
            <div class="row justify-content-center">
                <div class="col-md-10 py-4">
                    <div class="card text-left">
                        <div class="card-header font-weight-bold">
                            <i class="far fa-file-code mx-3"></i><span>個人紹介サイト</span>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th class="text-center">開発理由</th>
                                    <td>
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">内容</th>
                                    <td>
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">開発環境</th>
                                    <td>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</td>
                                </tr>
                                <tr>
                                    <th class="text-center">GitHub</th>
                                    <td><a href="https://github.com/s-yoshi210/profile">こちら</a></td>
                                </tr>
                                <tr>
                                    <th class="text-center">デモサイト</th>
                                    <td>
                                        <a href="#">https://xxxxxxxxx</a>
                                        <p>簡単ログイン機能を使用してください。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">コメント</th>
                                    <td>
                                        ccccccccccccccccccccccccccccccc
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 py-4">
                    <div class="card text-left">
                        <div class="card-header font-weight-bold">
                            <i class="far fa-file-code mx-3"></i><span>個人紹介サイト</span>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th class="text-center">開発理由</th>
                                    <td>
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">内容</th>
                                    <td>
                                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">開発環境</th>
                                    <td>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</td>
                                </tr>
                                <tr>
                                    <th class="text-center">GitHub</th>
                                    <td><a href="https://github.com/s-yoshi210/profile">こちら</a></td>
                                </tr>
                                <tr>
                                    <th class="text-center">デモサイト</th>
                                    <td>
                                        <a href="#">https://xxxxxxxxx</a>
                                        <p>簡単ログイン機能を使用してください。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">コメント</th>
                                    <td>
                                        ccccccccccccccccccccccccccccccc
                                    </td>
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
