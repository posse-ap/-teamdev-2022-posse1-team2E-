<?php

echo 'わーーーひらけたーー';

require_once(__DIR__  .'/../app/config.php');

$pdo = getPdoInstance();

$agency_informations = get_agency_informations($pdo);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/toppage.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Craft</title>
</head>

<body>
    <header>
        <div class="headerTitle text-center fs-2">
            Craft
        </div>
        <div class="navigations mt-4">
            <ul class="d-flex justify-content-center mb-0">
                <a href="" class="navigation me-5">
                    <li>就活サイト</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>就活支援サービス</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>自己分析診断ツール</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>ES添削サービス</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>就活エージェント</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>就職の教科書とは</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>お問い合わせ</li>
                </a>
            </ul>
        </div>
    </header>
    <main>
        <div class="first-view">
            <img src="../img/firstview.jpg" alt="first-view" class="first-view-img">
        </div>
        <div class="main-container d-flex raw">
            <div class="main-left-content col-md-3">
                <div class="mt-5 ms-5 me-5 p-3 search">
                    <div class="search-title p-1 text-center">業種</div>
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            コンサル
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            エンジニア
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            メーカー
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            金融
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            商社
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ベンチャー
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            サービス
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            インフラ
                        </label>
                    </div>
                </div>
                <div class="mt-4 ms-5 me-5 p-3 search">
                    <div class="search-title p-1 text-center">文理</div>
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            文系
                        </label>
                    </div>
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            理系
                        </label>
                    </div>
                </div>
                <div class="mt-4 ms-5 me-5 p-3 search">
                    <div class="search-title p-1 text-center">特徴</div>
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ES添削あり
                        </label>
                    </div>
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            面接対策あり
                        </label>
                    </div>
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            即日連絡
                        </label>
                    </div>
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            オンライン可能
                        </label>
                    </div>
                    <div class="form-check mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            担当者変更可能
                        </label>
                    </div>
                </div>
            </div>
            <div class="main-center-content col-md-6">
                <div class="mt-3 text-center drop-down p-1">
                    <div>並び替え</div>
                    <select name="change">
                        <option value="recommend">おすすめ</option>
                        <option value="name">五十音</option>
                        <option value="number">実績数</option>
                    </select>
                </div>
                <?php foreach ($agency_informations as $agency_information): ?>
                    <div class="mt-4 ms-5 me-5 mb-5 p-3 company-content-wrapper">
                        <div class="d-flex company-content">
                            <a href="">
                                <div class="logo-container p-1">
                                    <img src="../img/posseLogo.png" alt="" class="logo">
                                </div>
                            </a>
                            <div>
                                <a href="" class="text-decoration-none">
                                    <div class="company-content-title p-1"><?= h($agency_information->agency_name); ?></div>
                                </a>
                                <div class="p-3 company-content-paragraph">
                                <?= h($agency_information->catch_copy); ?>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="m-5 p-3 company-content-wrapper">
                    <div class="d-flex company-content">
                        <a href="">
                            <div class="logo-container p-1">
                                <img src="../img/posseLogo.png" alt="" class="logo">
                            </div>
                        </a>
                        <div>
                            <a href="" class="text-decoration-none">
                                <div class="company-content-title p-1">株式会社POSSE</div>
                            </a>
                            <div class="p-3 company-content-paragraph">
                                学生プログラミングコミュニティ「POSSE」では、プロのエンジニアが作成したカリキュラムをもとに、未経験からチーム学習・チーム開発を行い技術の習得と実践経験を積んでいきます。
                                そして高いITスキルを持った人材を輩出することで、社会の発展に寄与することを目指します。
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="m-5 p-3 company-content-wrapper">
                    <div class="d-flex company-content">
                        <a href="">
                            <div class="logo-container p-1">
                                <img src="../img/posseLogo.png" alt="" class="logo">
                            </div>
                        </a>
                        <div>
                            <a href="" class="text-decoration-none">
                                <div class="company-content-title p-1">株式会社POSSE</div>
                            </a>
                            <div class="p-3 company-content-paragraph">
                                学生プログラミングコミュニティ「POSSE」では、プロのエンジニアが作成したカリキュラムをもとに、未経験からチーム学習・チーム開発を行い技術の習得と実践経験を積んでいきます。
                                そして高いITスキルを持った人材を輩出することで、社会の発展に寄与することを目指します。
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="m-5 p-3 company-content-wrapper">
                    <div class="d-flex company-content">
                        <a href="">
                            <div class="logo-container p-1">
                                <img src="../img/posseLogo.png" alt="" class="logo">
                            </div>
                        </a>
                        <div>
                            <a href="" class="text-decoration-none">
                                <div class="company-content-title p-1">株式会社POSSE</div>
                            </a>
                            <div class="p-3 company-content-paragraph">
                                学生プログラミングコミュニティ「POSSE」では、プロのエンジニアが作成したカリキュラムをもとに、未経験からチーム学習・チーム開発を行い技術の習得と実践経験を積んでいきます。
                                そして高いITスキルを持った人材を輩出することで、社会の発展に寄与することを目指します。kkk
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="main-right-content col-md-3">
                <div class="d-flex checked-content m-5 p-3">
                    <div class="me-2">
                        <img src="../img/posseLogo.png" alt="" class="checked-logo">
                    </div>
                    <div class="checked-paragraph">
                        株式会社POSSE
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center icons">
            <a href="">
                <span class="material-icons">
                    navigate_before
                </span>
            </a>
            <a href="" class="m-1">
                <div>
                    1
                </div>
            </a>
            <a href="" class="m-1">
                <div>
                    2
                </div>
            </a>
            <a href="" class="m-1">
                <div>
                    3
                </div>
            </a>
            <a href="">
                <span class="material-icons">
                    navigate_next
                </span>
            </a>
        </div>
        <div class="text-center">
            <a href="">
                <button type="button" class="btn btn-success m-5">比較する</button>
            </a>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="../js/toppage.js"></script>
</body>

</html>