<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>お問い合わせ</title>

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
    <main class="contact mt-4">
        <div class="container">
            <!-- タイトル -->
            <h1 class="mb-4">お問い合わせ</h1>
            <!-- コンテンツ -->
            <div class="row justify-content-center">
                <div class="col-md-9 py-4">
                    <form action="" method="post">
                        <div class="form-group row mb-3">
                            <label for="inputName" class="col-md-3 col-form-label text-left text-md-right">お名前</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputMailAddress" class="col-md-3 col-form-label text-left text-md-right">メールアドレス</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="inputMailAddress">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputContent" class="col-md-3 col-form-label text-left text-md-right">お問い合わせ内容</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="inputContent" cols="30" rows="7"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg my-1">送信</button>
                    </form>

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
