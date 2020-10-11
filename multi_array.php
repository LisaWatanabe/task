<?php
// 5次元配列
// a. 題材を任意とし、MECEに基づいたロジックツリーを5次元の配列変数に定義する。なお、最上位の変数からインデックスまたはキーの指定で最下層にアクセスできる状態を正とする。 ex) $webService['sns'][0]['users'][0]['name'];

$world = [
    'asia' => [
        'japan' => [
            'area' => [
                'north' => [
                    0 => 'hokkaido',
                ],
                'middle' => [
                    0 => 'kanagawa',
                    1 => 'tokyo',
                ],
                'south' => [
                    0 => 'okinawa'
                ],
            ],
        ],
        'vietnam' => [
            'area' => [
                'north' => [
                    0 => 'hanoi',
                ],
                'middle' => [
                    0 => 'danang',
                ],
                'south' => [
                    0 => 'hochiminh'
                ],
            ],
        ],
    ],
    'oceania' => [
        'new_zealand' => [
            'area' => [
                'north' => [
                    0 => 'auckland',
                ],
                'middle' => [
                    0 => 'wellington',
                ],
                'south' => [
                    0 => 'christchurch'
                ],
            ],
        ],
        'australia' => [
            'area' => [
                'north' => [
                    0 => 'cairns',
                ],
                'middle' => [
                    0 => 'sydney',
                ],
                'south' => [
                    0 => 'melbourne'
                ],
            ],
        ],
    ],
];

echo $world['asia']['japan']['area']['north'][0];
