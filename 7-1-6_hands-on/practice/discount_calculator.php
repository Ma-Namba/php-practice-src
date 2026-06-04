<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>課題１～４</title>
    </head>

    <body>
        <h1>課題１～４</h1>
            <h2>課題1: 割引計算プログラム</h2>
                <h3>要件: </h3>
                    <ul>
                        <li>元の価格: 5000円</li>
                        <li>割引率: 20%</li>
                        <li>割引後の価格を計算して表示</li>
                    </ul>

                <h3>結果: </h3>
                <?php
                //変数の定義(定数)
                $original_price = 5000;
                $discount_rate = 0.20;
                //変数の定義(計算式)
                $discount_amount = $original_price * $discount_rate;
                $final_price = $original_price - $discount_amount;
                //結果の表示
                echo "<div class='line'>割引後の結果: {$final_price}円</div>";
                ?>

            <h2>課題2: 偶数・奇数判定プログラム</h2>
                <h3>要件: </h3>
                    <ul>
                        <li>変数</li>
                        <li>$numberに任意の整数を代入</li>
                        <li>偶数なら「○○は偶数です」、奇数なら「○○は奇数です」と表示</li>
                    </ul>
                <h3>結果: </h3>
                <!-- discount_calculator.phpというファイルに、データを送信するフォーム　-->
                <form action ="discount_calculator.php" method="post">
                <label for="number">任意の整数(0~1000000): </label><br>
                <input type="number" name="number" min="0" max="1000000" placeholder="任意の整数">
                <!-- 送信ボタン -->
                <button type="submit">入力完了</button>
                </form>

                <?php
                $number = 0;
                //任意の整数データを受けとる
                $number = $_POST["number"];
                //htmlspecialchars()でエスケープ処理を行う
                $safe_number = htmlspecialchars($number, ENT_QUOTES,'UTF-8');
                if ($number % 2 == 0) {
                    echo "{$safe_number}は偶数です。";
                } else {
                    echo "{$safe_number}は奇数です。";
                }
                ?>

            <h2>課題3: 複数条件の判定</h2>
                <h3>要件: </h3>
                    <ul>
                        <li>年齢が18歳以上 かつ 会員である場合: 「割引が適用されます」</li>
                        <li>年齢が65歳以上 または 学生である場合: 「シニア・学生割引が適用されます」</li>
                    </ul>
                <h3>結果: </h3>
                <!-- discount_calculator.phpというファイルに、データを送信するフォーム　-->
                <form action ="discount_calculator.php" method="post">
                <label for ="age">年齢: </label>
                <input type="number" name="age" min="0" max="200" placeholder="年齢"></input><br>

                <label for ="membership">会員登録はお済ですか？: </label><br>
                <input type="radio" name="membership" id="member" value="member" checked>はい</input><br>
                <input type="radio" name="membership" id="non-member" value="non-member" checked>いいえ</input><br>

                <label for ="student">在学生ですか？</label><br>
                <input type="radio" name="student" id="student" value="student" checked>はい</input><br>
                <input type="radio" name="student" id="non-student" value="non-student" checked>いいえ</input><br>

                <!-- 送信ボタン -->
                <button type="submit">入力完了</button>
                </form>

                <?php
                //任意のデータを受け取る
                $age=$_POST["age"];
                $safe_age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');
                $membership = $_POST["membership"]; //$_RADIO[]にした場合Warning: Undefined variable $_RADIO in /var/www/html/7-1-6_hands-on/practice/discount_calculator.php on line 87 Warning: Trying to access array offset on value of type null in /var/www/html/7-1-6_hands-on/practice/discount_calculator.php on line 87
                $safe_membership = htmlspecialchars($membership, ENT_QUOTES, 'UTF-8');
                $student = $_POST["student"];
                $safe_student = htmlspecialchars($student, ENT_QUOTES, 'UTF-8');
                //年齢が18歳以上　かつ　会員である場合
                if ($safe_age >= 18 && $safe_membership == "member") {
                    echo "「割引が適用されます」";
                }
                //年齢が65歳以上　または　学生である場合
                if ($safe_age >=65 || $safe_student =="student"){
                    echo "「シニア・学生割引が適用されます」";
                }
                ?>

            <h2>課題4: 複合代入演算子の練習</h2>
                <h3>要件: </h3>
                <ul>
                    <li>初期スコア: 100点</li>
                    <li>ボーナスステージクリア: +50点</li>
                    <li>ダメージを受ける: -30点</li>
                    <li>スコア2倍アイテム仕様: ×2</li>
                    <li>最終スコアを表示</li>
                </ul>
                <h3>結果: </h3>
                <?php
                //定義
                $first_additional_score = 100;
                $bonus_stage_clear = 50;
                $damage = 30;
                $used_item = 2;
                $total_score = 0;
                //スコアの計算と結果表示
                $total_score += $first_additional_score;
                echo "初期スコア: {$total_score}点<br>";
                $total_score += $bonus_stage_clear;
                echo "ボーナスステージクリア: {$total_score}点<br>";
                $total_score -= $damage;
                echo "ダメージ: {$total_score}点<br>";
                $total_score *= $used_item;
                echo "スコア2倍アイテム仕様: {$total_score}点<br>";
                echo "最終スコア: {$total_score}点<br>"
                ?>

    </body>
<!-- http://localhost:8000/7-1-6_hands-on/practice/discount_calculator.php -->
</html>