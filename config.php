<?php
// config.php - Store your portfolio data
$portfolio_data = [
    'personal_info' => [
        'name' => 'Niloy Mutsuddy',  // Change this to your name
        'title' => 'Web Developer and Competitive Coder', // Fixed typo: Competetive -> Competitive
        'bio' => 'I\'m a 3rd year CSE student at NSTU. I love doing CP, building web applications and learning new technologies.',
        'email' => 'niloymutsuddy2001@gmail.com',  // Your actual email
        'linkedin' => 'https://www.linkedin.com/in/niloy-mutsuddy-73212b36b/',
        'github' => 'https://github.com/niloynine',
        'profile_image' => 'assets/images/profile.jpg' // Add your profile image path here
    ],
    
    'skills' => [
        'HTML', 'CSS', 'C', 'C++', 'PHP', 'MySQL', 'Git','OOP', 'Python'
        // Add or remove skills as needed
    ],
    
    'projects' => [
        [
            'title' => 'CureQuest',
            'description' => 'A project for healthcare and diagnosis system',
            'technologies' => ['HTML','CSS', 'Python', 'MySQL'],
            'github' => 'https://github.com/niloynine/project_curequest',
            'live' => '' // Add live demo URL if available
        ],
        [
            'title' => 'Basic Portfolio',
            'description' => 'Portfolio website to showcase my projects and skills.',
            'technologies' => ['HTML', 'CSS', 'JavaScript','PHP'],
            'github' => 'https://github.com/niloynine/Basic-Portfolio',
            'live' => '' // Add live demo URL if available
        ],
        [
            'title' => 'Authentication System',
            'description' => 'Basic sign in, log in, log out pages with navigation bar ( session added ).',
            'technologies' => ['HTML', 'CSS', 'PHP', 'MySQL'],
            'github' => 'https://github.com/niloynine/project_1-php-',
            'live' => '' // Add live demo URL if available
        ]
        // Add more projects as needed
    ],
    
    'achievements' => [
        [
            'title' => 'National Science Olympiad',
            'category' => 'Higher Secondary', // Fixed typo: Higer -> Higher
            'college' => 'Chittagong Engineering University School & College',
            'level' => 'Regional',
            'prize' => 'Sixth Place',
            'date' => 'January 10, 2020'
        ],
        [
            'title' => 'FTC 3.0 organized by CUET IEEE Student Branch',
            'category' => 'University Level',
            'University' => 'Noakhali Science and Technology University',
            'level' => 'National',
            'prize' => 'Finalist',
            'date' => 'April 28, 2023'
        ]
        // Add more achievements
    ]
];
?>
