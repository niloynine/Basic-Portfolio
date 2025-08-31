Basic Portfolio
A responsive, dynamic portfolio website showcasing projects, achievements, and skills. Built with PHP, HTML, CSS, and JavaScript with smooth animations and modern design.
🚀 Live Demo
View Live Portfolio
📋 Features
•	Dynamic Content Management: PHP-based configuration system for easy content updates
•	Responsive Design: Mobile-first approach with optimized layouts for all devices
•	Modern UI/UX: Clean, professional design with smooth animations
•	Profile Image Display: Circular profile image with hover effects
•	Interactive Navigation: Smooth scrolling between sections
•	Skills Showcase: Grid-based skills display with hover animations
•	Project Gallery: Detailed project cards with technology tags and links
•	Achievements Section: Comprehensive achievement display with categories
•	Contact Integration: Direct links to email, LinkedIn, and GitHub
•	Scroll Animations: Elements animate into view as user scrolls
•	Performance Optimized: Fast loading with efficient CSS and JavaScript
🛠️ Technologies Used
•	Frontend: HTML5, CSS3, JavaScript (ES6+)
•	Backend: PHP 7.4+
•	Styling: Custom CSS with Flexbox and Grid
•	Icons: Font Awesome 6.0
•	Animations: CSS transitions and JavaScript Intersection Observer API
•	Version Control: Git
📁 Project Structure
Basic-Portfolio/
├── assets/
│   ├── css/
│   │   └── style.css          # Main stylesheet with responsive design
│   ├── images/
│   │   └── profile.jpg        # Profile image
│   └── js/
│       └── script.js          # Interactive functionality
├── config.php                 # Portfolio data configuration
├── index.php                  # Main portfolio page
└── README.md                  # Project documentation
⚙️ Configuration
All portfolio content is managed through config.php:
Personal Information
'personal_info' => [
    'name' => 'Your Name',
    'title' => 'Your Professional Title',
    'bio' => 'Your bio description',
    'email' => 'your.email@domain.com',
    'linkedin' => 'https://linkedin.com/in/username',
    'github' => 'https://github.com/username',
    'profile_image' => 'assets/images/profile.jpg'
]
Skills Array
'skills' => [
    'HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL', 'Git'
    // Add your skills here
]
Projects with Details
'projects' => [
    [
        'title' => 'Project Name',
        'description' => 'Project description',
        'technologies' => ['Tech1', 'Tech2'],
        'github' => 'repository-url',
        'live' => 'demo-url'
    ]
]
🚀 Getting Started
Prerequisites
•	PHP 7.4 or higher
•	Web server (Apache/Nginx) or local development environment
•	Modern web browser
Installation
1.	Clone the repository
2.	git clone https://github.com/niloynine/Basic-Portfolio.git
3.	cd Basic-Portfolio
4.	Configure your data
o	Edit config.php with your personal information
o	Replace assets/images/profile.jpg with your profile picture
o	Update projects, skills, and achievements arrays
5.	Deploy to web server
o	Upload files to your web hosting directory
o	Ensure PHP is enabled on your server
o	Access via your domain or localhost
Local Development
Using XAMPP:
# Place project in htdocs folder
C:\xampp\htdocs\Basic-Portfolio\

# Start Apache in XAMPP Control Panel
# Access at: http://localhost/Basic-Portfolio/
Using PHP Built-in Server:
php -S localhost:8000
# Access at: http://localhost:8000
🎨 Customization
Color Scheme
Main colors defined in style.css:
•	Primary Blue: #2563eb
•	Accent Red: #eb252c
•	Background Gray: #f8fafc
•	Text Dark: #333
Sections
The portfolio includes these main sections:
•	Hero: Name, title, and call-to-action
•	About: Bio and skills grid
•	Projects: Project showcase with links
•	Achievements: Academic and competition achievements
•	Contact: Social media and email links
Adding New Sections
1.	Add section HTML in index.php
2.	Add corresponding data in config.php
3.	Style the section in style.css
4.	Add navigation link in navbar
📱 Responsive Design
•	Desktop: Full multi-column layouts
•	Tablet: Adjusted grid systems
•	Mobile: Single column, optimized navigation
Breakpoint: 768px for mobile-first responsive design.
🔧 Browser Support
•	Chrome 90+
•	Firefox 88+
•	Safari 14+
•	Edge 90+
📈 Performance Features
•	CSS Grid and Flexbox for efficient layouts
•	Optimized images and assets
•	Smooth scroll behavior
•	Intersection Observer for scroll animations
•	Minimal JavaScript for fast loading
🤝 Contributing
1.	Fork the repository
2.	Create a feature branch (git checkout -b feature/amazing-feature)
3.	Commit changes (git commit -m 'Add amazing feature')
4.	Push to branch (git push origin feature/amazing-feature)
5.	Open a Pull Request
📝 License
This project is open source and available under the MIT License.
👨‍💻 Author
Niloy Mutsuddy
•	Portfolio: https://niloy09.infinityfree.me
•	GitHub: @niloynine
•	LinkedIn: niloy-mutsuddy
🙏 Acknowledgments
•	Font Awesome for icons
•	Google Fonts for typography
•	CSS Grid and Flexbox communities for layout inspiration
________________________________________
⭐ Star this repository if you found it helpful!

