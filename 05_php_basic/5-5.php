<?php

//・以下の配列から名前、年齢、出身を表示してください
/**
 * [表示イメージ]
 * name:山田
 * age:20
 * pref:東京
 */
$emp = [
    '山田' => ['age' => '20', 'pref' => '東京'],
    '田中' => ['age' => '23', 'pref' => '神奈川'],
    '佐藤' => ['age' => '24', 'pref' => '埼玉'],
    '鈴木' => ['age' => '25', 'pref' => '千葉'],
];


// 上記課題の配列$empから、名前と出身地だけの連想配列を作成し、表示してください。
// ※ 出力はvar_dump()を使ってください。
/**
 * [表示イメージ]
 * [name => '名前', 'pref' => '出身']
 */


// 以下は配列をvar_dump()で出力したものです。これと同じ配列を作成して同じようにvar_dump()関数で出力してください。

//array(3) {
//    [0]=>array(3) {
//        ["info"]=>array(3) {
//            ["name"]=>string(6) "田中"
//            ["division"]=>string(1) "1"
//            ["age"]=>string(2) "25"
//            }
//        ["skill"]=>array(2) {
//            ["lang"]=>array(2) {
//                [0]=>string(3) "PHP"
//                [1]=>string(4) "Ruby"
//            }
//            ["fw"]=>array(3) {
//                [0]=>string(7) "Laravel"
//                [1]=>string(7) "CakePHP"
//                [2]=>string(5) "Rails"
//            }
//        }
//        ["description"]=>string(33) "バックエンドエンジニア"
//    }
//    [1]=>array(3) {
//        ["info"]=>array(3) {
//            ["name"]=>string(6) "山田"
//            ["division"]=>string(1) "2"
//            ["age"]=>string(2) "23"
//        }
//        ["skill"]=>array(2) {
//            ["lang"]=>array(3) {
//                [0]=>string(4) "HTML"
//                [1]=>string(3) "CSS"
//                [2]=>string(2) "JS"
//            }
//            ["fw"]=>array(1) {
//                [0]=>string(6) "Vue.js"
//            }
//        }
//        ["description"]=>string(27) "フロントエンジニア"
//    }
//    [2]=>array(3) {
//        ["info"]=>array(3) {
//            ["name"]=>string(6) "佐藤"
//            ["division"]=>string(1) "2"
//            ["age"]=>string(2) "20"
//        }
//        ["skill"]=>array(2) {
//            ["lang"]=>array(1) {
//                [0]=>string(3) "PHP"
//            }
//            ["fw"]=>array(0) {
//            }
//        }
//        ["description"]=>string(12) "PHP初学者"
//    }
//}


