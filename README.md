# チーム開発2022サンプル

チーム開発用のサンプルです、これを使ってサクッと開発してください

# Note

ソースの取得
※コマンドを実行したフォルダにサンプルコードがダウンロードされます

```bash
git clone git@github.com:posse-ap/teamdev-2022-sample2.git
```

コンテナ起動

```bash
cd teamdev-2022-sample2
docker-compose build --no-cache
docker-compose up -d
```

ログインURL

```bash
http://localhost/
```

管理者画面ログイン情報

```bash
ブーザーへのログイン
メールアドレス：voozer-inc@voozer.com
パスワード：password

エージェント１（マイナビエージェント）へのログイン
メールアドレス：mynaviagent@mynavi.com
パスワード：password

エージェント2（キャリアエージェント）へのログイン
メールアドレス：careeragent@career.com
パスワード：password

エージェント3（ディグアップキャリア）へのログイン
メールアドレス：digupcareer@digupcareer.com
パスワード：password
```

データ初期化

```bash
./mysql/data を削除後、コンテナ再起動
./mysql/docker-entrypoint-initdb.d/init.sql が実行され初期データが投入されます
```
