<?php

return [
    'landing' => [
        'hero' => [
            'title' => 'Launch your viral referral loop',
            'subtitle' => 'Join the challenge, invite your network, and unlock exclusive rewards as you climb the leaderboard.',
            'background' => 'gradient',
        ],
        'features' => [
            [
                'title' => 'Verify real fans',
                'description' => 'Each opt-in is protected with confirmation codes and device fingerprinting to keep the competition fair.',
            ],
            [
                'title' => 'Share in one tap',
                'description' => 'Generate a personalised link and pre-written message for WhatsApp or Telegram in seconds.',
            ],
            [
                'title' => 'Track your rise',
                'description' => 'Check the live leaderboard to see how many more referrals you need to claim the top prize.',
            ],
        ],
    ],

    'share' => [
        'message_template' => 'I am climbing the viral leaderboard—join me here: {link}',
        'legal_footer' => 'By sharing you agree to our terms and privacy guidelines.',
    ],

    'prizes' => [
        [
            'name' => 'Grand Launch Pack',
            'requirement' => 'Top 1 referrer',
        ],
        [
            'name' => 'Creator Spotlight',
            'requirement' => 'Top 10 referrers',
        ],
        [
            'name' => 'Early Access Badge',
            'requirement' => 'Refer 5 verified friends',
        ],
    ],

    'terms_url' => null,
];
