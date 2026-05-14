# NumberGame

# Japanese
## 概要
NumberGame は、PHP の基礎を学ぶための数当てゲームです。1 から 10 までの数字を選択して送信すると、サーバー側でランダムに生成された答えと照合し、正誤と正解を表示します。
## 使用技術
- 言語: PHP, HTML
- ライブラリ/フレームワーク: なし
- データベース: なし
- その他: Web ブラウザ, PHP 実行環境
## 使い方
### 前提条件
- PHP が実行できる環境が必要です。
- Web サーバーまたは PHP の組み込みサーバーを利用してください。
### インストール方法
```bash
git clone https://github.com/username/project.git
cd project
```
### 基本的な使い方
```bash
php -S localhost:8000
```
ブラウザで `http://localhost:8000/index.html` にアクセスし、1 から 10 の数字を選択して送信してください。
## 主な機能
- 1 から 10 までの数値を選択して送信できる入力画面
- サーバー側での乱数生成による正誤判定
- 判定結果と正解の表示
- 再挑戦用のリンク表示
## 設定
環境変数や設定ファイルは使用していません。必要に応じて `result.php` の乱数範囲を変更すると、出題範囲を調整できます。
## APIリファレンス / ドキュメント
外部 API は使用していません。画面遷移は `index.html` から `result.php` へのフォーム送信のみで構成されています。
## ライセンス
Unlicense

# English
## Overview
NumberGame is a simple number guessing game built to practice PHP fundamentals. The user selects a number from 1 to 10, submits the form, and the server compares the selection against a randomly generated answer before displaying the result.
## Technologies Used
- Language: PHP, HTML
- Libraries / Frameworks: None
- Database: None
- Other: Web browser, PHP runtime environment
## Usage
### Prerequisites
- A PHP-capable environment is required.
- Use either a web server or the built-in PHP development server.
### Installation
```bash
git clone https://github.com/username/project.git
cd project
```
### Basic Usage
```bash
php -S localhost:8000
```
Open `http://localhost:8000/index.html` in your browser, choose a number from 1 to 10, and submit the form.
## Main Features
- Number selection form for values from 1 to 10
- Server-side random answer generation and validation
- Display of the result and the correct answer
- A link for trying again
## Configuration
No environment variables or configuration files are used. If needed, you can adjust the question range by changing the random range in `result.php`.
## API Reference / Documentation
No external APIs are used. The application flow consists only of form submission from `index.html` to `result.php`.
## License
Unlicense