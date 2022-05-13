<?php



require_once(__DIR__  . '/../app/config.php');

$pdo = getPdoInstance();

$agency_informations = get_agency_informations($pdo);
$industry_conditions = get_industry_conditions($pdo);
$major_conditions = get_major_conditions($pdo);
$feature_conditions = get_feature_conditions($pdo);

// if(isset($_POST["sort_change"])) {
//     // セレクトボックスで選択された値を受け取る

//     $sort_change = $_POST["sort_change"];
//     // 受け取った値を画面に出力
//     echo $sort_change;
    
//   }

$stmt = $pdo->query("SELECT * FROM agency_information 
JOIN agency_industry AS itt ON  agency_information.id = itt.agency_id
JOIN industry_condition ON itt.industry_id = industry_condition.id
JOIN agency_major AS ittt ON  agency_information.id = ittt.agency_id
JOIN major_condition ON ittt.major_id = major_condition.id
JOIN agency_feature AS itti ON  agency_information.id = itti.agency_id
JOIN feature_condition ON itti.feature_id = feature_condition.id
WHERE industry_condition.id IN (2)  AND major_condition.id IN (2) AND feature_condition.id IN (2)
GROUP BY agency_information.id");

$agency_information = $stmt->fetchAll();

print_r($agency_information);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <form method="post" action="../app/user-functions.php">
                <div class="mt-5 ms-5 me-5 p-3 search">
                    <div class="search-title p-1 text-center">業種</div>
                    <?php foreach ($industry_conditions as $industry_condition) : ?>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" name="industry[]" value="<?= $industry_condition->id  ?>" id="flexCheckDefault<?= $industry_condition->id  ?>">
                                <?= h($industry_condition->industry); ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </form>
            
 
                <div class="mt-4 ms-5 me-5 p-3 search">
                    <div class="search-title p-1 text-center">文理</div>
                    <?php foreach ($major_conditions as $major_condition) : ?>
                        <div class="form-check mt-1">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" name="major[]" value="<?= $major_condition->id  ?>" id="flexCheckDefault">
                                <?= h($major_condition->major); ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-4 ms-5 me-5 p-3 search">
                    <div class="search-title p-1 text-center">特徴</div>
                    <?php foreach ($feature_conditions as $feature_condition) : ?>
                        <div class="form-check mt-1">
                            <label class="form-check-label" for="flexCheckDefault">
                                <input class="form-check-input" type="checkbox" name="feature[]" value="<?= $feature_condition->id ?>" id="flexCheckDefault">
                                <?= h($feature_condition->feature); ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div> 
            <!-- </form>
            <input type="submit" value="絞り込む"> -->
                
            </div>
            <div class="main-center-content col-md-6">
             <?php foreach ($agency_informations as $agency_information) : ?> 
                    <div class="mt-4 ms-5 me-5 mb-5 p-3 company-content-wrapper">
                        <div class="d-flex company-content">
                            <a href="">
                                <div class="logo-container p-1">
                                    <img src="../uploaded_img/agency<?= h($agency_information->id); ?>.png" alt="">
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
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault<?= h($agency_information->id);?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="main-right-content col-md-3">
            <?php foreach ($agency_informations as $agency_information) : ?>
                <a href="./company.html" class="text-decoration-none">
                    <div class="d-flex checked-content m-5 p-3">
                        <div class="me-2">
                        <img src="../uploaded_img/agency<?= h($agency_information->id); ?>.png" alt="">
                        </div>
                        <div class="checked-paragraph">
                            <?= h($agency_information->agency_name); ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
            </div>
        </div>
        <!-- <div class="d-flex justify-content-center icons">
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
        </div> -->
        <div class="text-center">
            <a href="">
                <button type="button" class="btn btn-success m-5">比較する</button>
            </a>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/toppage.js"></script>
</body>

</html>