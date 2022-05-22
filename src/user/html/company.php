<?php

// echo 'わーーーひらけたーー';

require_once(__DIR__  . '/../../dbconnect.php');
require_once(__DIR__  . '/../app/config.php');

$pdo = getPdoInstance();
$id = $_GET["id"];

echo $id;
$agency_informations = get_agency_informations($pdo);

$stmt = $db->query("SELECT * FROM agency_information WHERE id = $id" );
$result = $stmt->fetch();
print_r($result)


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
    <link rel="stylesheet" href="../css/company.css">
    <title>企業ページ</title>
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
        <div class="text-center mt-5">
            <div class="company-title w-50">
                <?= $result['agency_name']?>
            </div>
            <img src="../img/posseLogo.png" alt="" class="mt-3">
            <div>
                <table class="table w-50 mt-5">
                    <thead>
                        <tr colspan="2">
                            <th scope="col">項目</th>
                            <th scope="col">特徴</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">得意業界</th>
                            <td><?= $result['agency_name']?></td>
                        </tr>
                        <tr>
                            <th scope="row">ES添削</th>
                            <td><?= $result['catch_copy']?></td>
                        </tr>
                        <tr>
                            <th scope="row">面接対策</th>
                            <td><?= $result['detail']?></td>
                        </tr>
                        <tr>
                            <th scope="row">即日連絡</th>
                            <td><?= $result['agency_name']?></td>
                        </tr>
                        <tr>
                            <th scope="row">担当者変更</th>
                            <td><?= $result['agency_name']?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="toppage.php">
                <button type="button" class="btn btn-success mt-5">トップページに戻る</button>
            </a>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>