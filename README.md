# 生産管理システム 『PCOS』（※現在開発中）

## 概要
製造業で使用する生産管理のERPシステムです。  
『PCOS（ピコス）』という名前は、"Production Control Operation System"の頭文字から取っています。  
4か月間のプログラミング学習の集大成として、現在開発中です。

## 公開URL
現在開発中のため、ソースコードの公開のみ。完成後はAWSへデプロイ予定。

## 制作時期
2022年3月下旬～

## 開発環境
Linux(Ubuntu), Docker(LAMP環境), VScode, Git-flow

## 開発理由
筆者は大学卒業以来、一貫して製造業で生産管理業務に従事してきました。  
前職でも生産管理のERPシステムを使用して業務を行っていましたが、古いシステムのため下記のような問題を抱えていました。

- Internet Explorerでしか使用できない
- 全画面表示できないため、作業しづらい
- UIが見づらく、メニュー画面では初見でどのボタンに何の機能があるのか分からない
- マニュアルもないため、使用方法の習得は担当間の引継ぎにかかっている
- 生産・受注、進捗・在庫管理、部品発注がすべて別個のシステムに分かれており、一度に複数のシステムを立ち上げて作業する必要がある

そこで、前職までの経験 × 現在学んでいるITスキル の掛け合わせというテーマで、誰にでも扱える生産管理システムを開発することにしました。

## 使用技術
HTML, CSS, Bootstrap, PHP(Laravel), MySQL, Docker, Git-flow

## 主な機能（予定）
- ユーザー認証機能
    - ログイン・ログアウト
    - 新規ユーザー登録（メールアドレス認証付き）
    - パスワードリセット機能
- 生産登録
- 出荷登録
- 在庫照会
- 部品発注（完成品の生産計画から部品所用を計算し、自動発注する）
- 製品マスタ照会
- 部品マスタ照会
- ユーザー情報照会・変更
- 操作マニュアル

## こだわりポイント
- 開発環境としては、DockerでLAMP環境を構築しました。勉強のため、フリーで公開されているものではなく、自分で`Dockerfile`, `docker-compose.yml`ファイルを書き、イメージを作成しました。
- 個人開発ですが、より実務に近いチーム開発に慣れるために、疑似的なGit-flowを採用しています。`issues`で要件を定義し、`feature`ブランチを切って開発を行い、完成後はプルリクエストを出して`master`ブランチにマージするという流れまで一人で行っております。
