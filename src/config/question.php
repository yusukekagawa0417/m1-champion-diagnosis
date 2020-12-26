<?php

return [
    '1' => [
        // ビューに表示させる内容
        'content' => '新しいものには興味がある方だ',

        'answer' => [
            // ビューの「はい」ボタンに以下の設定値を埋め込む
            'yes' => [
                // 次の質問がある場合はquestionを指定
                'path' => 'question',
                // 次の質問のquestion_id
                'id' => '2',
            ],
            // ビューの「いいえ」ボタンに以下の設定値を埋め込む
            'no' => [
                'path' => 'question',
                'id' => '3',
            ],
        ],
    ],

    '2' => [
        'content' => '何かあったらいつも行ってる皮膚科の先生に相談する方だ',

        'answer' => [
            'yes' => [
                // 次の質問がない場合はresultを指定
                'path' => 'result',
                // ブラマヨのresult_id
                'id' => '1',
            ],
            'no' => [
                'path' => 'question',
                'id' => '4',
            ],
        ],
    ],

    '3' => [
      // 
    ],
];
