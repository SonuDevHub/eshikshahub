<?php
/**
 * eShikshaHub — Configuration & Data Store
 */

define('SITE_NAME', 'eShikshaHub');
define('SITE_TAGLINE', 'Best Online Learning Platform in India | UGC Approved Courses');
define('PHONE', '+91-96278-49717');
define('PHONE_CLEAN', '+919627849717');
define('EMAIL', 'info@eshikshahub.in');
define('WHATSAPP_LINK', 'https://wa.me/919627849717?text=Hi%20eShikshaHub,%20I%20am%20interested%20in%20online%20degree%20courses.');
define('NOIDA_OFFICE', 'Sharkspace, A-83, Sector 63, UP 201301');
define('AGRA_OFFICE', 'AVR Complex, A-1, Fatehabad Road, UP 283111');

// Base URL helper
$base_dir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$base_url = $base_dir . '/';
define('BASE_URL', $base_url);

// Program data (10 UGC-approved programs)
$UG_COURSES = [
    'bca' => [
        'abbr' => 'BCA',
        'name' => 'Bachelor of Computer Applications',
        'level' => 'UG',
        'duration' => '3 Years',
        'semesters' => 6,
        'image' => 'assets/img/courses/BCA.png',
        'slug' => 'course-bca.php',
        'desc' => 'Master computing principles, programming languages, database systems, and modern software design.'
    ],
    'bba' => [
        'abbr' => 'BBA',
        'name' => 'Bachelor of Business Administration',
        'level' => 'UG',
        'duration' => '3 Years',
        'semesters' => 6,
        'image' => 'assets/img/courses/BBA.png',
        'slug' => 'course-bba.php',
        'desc' => 'Build foundational knowledge in business management, marketing, financial planning, and organizational leadership.'
    ],
    'bcom' => [
        'abbr' => 'BCom',
        'name' => 'Bachelor of Commerce',
        'level' => 'UG',
        'duration' => '3 Years',
        'semesters' => 6,
        'image' => 'assets/img/courses/BCOM.png',
        'slug' => 'course-bcom.php',
        'desc' => 'Comprehensive education in commerce, taxation, accounting, economic policy, and corporate governance.'
    ],
    'ba' => [
        'abbr' => 'BA',
        'name' => 'Bachelor of Arts',
        'level' => 'UG',
        'duration' => '3 Years',
        'semesters' => 6,
        'image' => 'assets/img/courses/BA.png',
        'slug' => 'course-ba.php',
        'desc' => 'Broad-based humanities and social science foundation with critical thinking and communication skills.'
    ],
];

$PG_COURSES = [
    'mca' => [
        'abbr' => 'MCA',
        'name' => 'Master of Computer Applications',
        'level' => 'PG',
        'duration' => '2 Years',
        'semesters' => 4,
        'image' => 'assets/img/courses/MCA.png',
        'slug' => 'course-mca.php',
        'desc' => 'Advanced computing, artificial intelligence, enterprise architecture, and full stack software development.'
    ],
    'mba' => [
        'abbr' => 'MBA',
        'name' => 'Master of Business Administration',
        'level' => 'PG',
        'duration' => '2 Years',
        'semesters' => 4,
        'image' => 'assets/img/courses/MBA.png',
        'slug' => 'course-mba.php',
        'desc' => 'Top executive leadership degree with 8 high-demand specializations, global case studies, and live projects.'
    ],
    'mcom' => [
        'abbr' => 'MCom',
        'name' => 'Master of Commerce',
        'level' => 'PG',
        'duration' => '2 Years',
        'semesters' => 4,
        'image' => 'assets/img/courses/MCOM.png',
        'slug' => 'course-mcom.php',
        'desc' => 'Advanced corporate finance, banking, international financial markets, and auditing standards.'
    ],
    'msc' => [
        'abbr' => 'MSc',
        'name' => 'Master of Science',
        'level' => 'PG',
        'duration' => '2 Years',
        'semesters' => 4,
        'image' => 'assets/img/courses/MCA.png',
        'slug' => 'course-msc.php',
        'desc' => 'Specialized scientific training, research methods, data systems, and practical laboratory projects.'
    ],
    'ma' => [
        'abbr' => 'MA',
        'name' => 'Master of Arts',
        'level' => 'PG',
        'duration' => '2 Years',
        'semesters' => 4,
        'image' => 'assets/img/courses/MA.png',
        'slug' => 'course-ma.php',
        'desc' => 'In-depth analysis and advanced perspectives in literature, political science, sociology, and economics.'
    ],
    'majmc' => [
        'abbr' => 'MAJMC',
        'name' => 'MA in Journalism & Mass Communication',
        'level' => 'PG',
        'duration' => '2 Years',
        'semesters' => 4,
        'image' => 'assets/img/courses/MAJMC.png',
        'slug' => 'course-majmc.php',
        'desc' => 'Digital media reporting, multimedia storytelling, broadcasting, public relations, and communications strategy.'
    ],
];

$ALL_COURSES = array_merge($UG_COURSES, $PG_COURSES);

// Partner Universities
$UNIVERSITIES = [
    ['name' => 'Amity Online', 'logo' => 'assets/img/universities/cu.png'], // fallback / cu
    ['name' => 'Chandigarh University', 'logo' => 'assets/img/universities/cu.png'],
    ['name' => 'Jamia Millia Islamia', 'logo' => 'assets/img/universities/jamia.png'],
    ['name' => 'LPU Online', 'logo' => 'assets/img/universities/lpu.svg'],
    ['name' => 'Manipal University Jaipur', 'logo' => 'assets/img/universities/manipal.svg'],
    ['name' => 'MIT-WPU', 'logo' => 'assets/img/universities/mit.png'],
    ['name' => 'Parul University', 'logo' => 'assets/img/universities/parul.png'],
    ['name' => 'Sharda University', 'logo' => 'assets/img/universities/sharda.png'],
    ['name' => 'Sikkim Manipal', 'logo' => 'assets/img/universities/smu.svg'],
    ['name' => 'SRM University', 'logo' => 'assets/img/universities/srm.png'],
    ['name' => 'UPES', 'logo' => 'assets/img/universities/mit.png'],
    ['name' => 'Uttaranchal University', 'logo' => 'assets/img/universities/uttaranchal.png'],
];

// Hiring Partners
$HIRING_ROW1 = [
    ['name' => 'Amazon', 'logo' => 'assets/img/partners/amazon.webp'],
    ['name' => 'Capgemini', 'logo' => 'assets/img/partners/capgemini.webp'],
    ['name' => 'Deloitte', 'logo' => 'assets/img/partners/deloitte.png'],
    ['name' => 'EY', 'logo' => 'assets/img/partners/ey.png'],
    ['name' => 'Jio', 'logo' => 'assets/img/partners/jio.webp'],
    ['name' => 'PayPal', 'logo' => 'assets/img/partners/paypal.webp'],
    ['name' => 'PepsiCo', 'logo' => 'assets/img/partners/pepsico.webp'],
    ['name' => 'Tata', 'logo' => 'assets/img/partners/tata.webp'],
    ['name' => 'Tech Mahindra', 'logo' => 'assets/img/partners/tech.png'],
    ['name' => 'Volvo', 'logo' => 'assets/img/partners/volvo.webp'],
];

$HIRING_ROW2 = [
    ['name' => 'Apple', 'logo' => 'assets/img/partners/apple.webp'],
    ['name' => 'HDFC Bank', 'logo' => 'assets/img/partners/hdfc.webp'],
    ['name' => 'ICICI Bank', 'logo' => 'assets/img/partners/icici.webp'],
    ['name' => 'Samsung', 'logo' => 'assets/img/partners/samsung.webp'],
    ['name' => 'Vi', 'logo' => 'assets/img/partners/vi.webp'],
    ['name' => 'Wipro', 'logo' => 'assets/img/partners/wipro.webp'],
    ['name' => 'Axis Bank', 'logo' => 'assets/img/partners/axis-bank.webp'],
    ['name' => 'Tata Steel', 'logo' => 'assets/img/partners/tata-steel.webp'],
];

// Student Google reviews
$REVIEWS = [
    [
        'name' => 'Rahul Sharma',
        'program' => 'MBA · Manipal',
        'initials' => 'RS',
        'quote' => 'My counsellor helped me pick the right MBA in one call. Classes fit perfectly around my job.',
        'rating' => 5
    ],
    [
        'name' => 'Priya Verma',
        'program' => 'BCA · CU',
        'initials' => 'PV',
        'quote' => 'Clear guidance on fees and university choice. Admission was quick and completely hassle-free.',
        'rating' => 5
    ],
    [
        'name' => 'Amit Tiwari',
        'program' => 'MCA · LPU',
        'initials' => 'AT',
        'quote' => 'The team answered every question patiently. Live classes and LMS access have been smooth.',
        'rating' => 5
    ],
    [
        'name' => 'Sneha Gupta',
        'program' => 'BBA · Amity Online',
        'initials' => 'SG',
        'quote' => 'Got complete information about BBA through eShikshaHub. The team responded very quickly to all queries.',
        'rating' => 5
    ],
    [
        'name' => 'Mohit Yadav',
        'program' => 'MBA · Chandigarh',
        'initials' => 'MY',
        'quote' => 'I was hesitant about online MBA but eShikshaHub cleared all doubts. Very professional and trustworthy.',
        'rating' => 5
    ]
];
