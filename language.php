<?php

// Start session only if it has not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// =========================================================
// CHANGE LANGUAGE
// =========================================================

if (isset($_GET['lang'])) {

    if ($_GET['lang'] === 'ms') {

        $_SESSION['lang'] = 'ms';

    } else {

        $_SESSION['lang'] = 'en';

    }

}


// =========================================================
// DEFAULT LANGUAGE
// =========================================================

$lang = $_SESSION['lang'] ?? 'en';


// =========================================================
// TRANSLATIONS
// =========================================================

$translations = [

    'en' => [

        // NAVBAR
        'home' => 'Home',
        'explore' => 'Explore',
        'destinations' => 'Destinations',
        'transportation' => 'Transportation',
        'accommodation' => 'Accommodation',
        'restaurant' => 'Restaurant',
        'events' => 'Events',
        'analytics' => 'Analytics',
        'map' => 'Map',
        'contact' => 'Contact',
        'gallery' => 'Gallery',
        'profile' => 'Profile',
        'geopark' => 'Perlis Geopark',

        // HOMEPAGE
        'hero_title_1' => 'Discover the',
        'hero_title_2' => 'Hidden Gem',
        'hero_title_3' => 'of Perlis',

        'hero_description' =>
            'Explore the beauty, culture, food and unforgettable attractions of Perlis.',

        'explore_destinations' => 'Explore Destinations',

        'search_placeholder' => 'Search destinations...',

        'search_button' => 'Search',

        'popular_destinations' => 'Popular Destinations',

        'popular_description' =>
            'Discover some of the beautiful attractions and unique places waiting for you in Perlis.',

        'view_details' => 'View Details',

        'language' => 'Language',

        'english' => 'English',

        'malay' => 'Bahasa Melayu'

    ],


    'ms' => [

        // NAVBAR
        'home' => 'Utama',
        'explore' => 'Terokai',
        'destinations' => 'Destinasi',
        'transportation' => 'Pengangkutan',
        'accommodation' => 'Penginapan',
        'restaurant' => 'Restoran',
        'events' => 'Acara',
        'analytics' => 'Analitik',
        'map' => 'Peta',
        'contact' => 'Hubungi',
        'gallery' => 'Galeri',
        'profile' => 'Profil',
        'geopark' => 'Geopark Perlis',

        // HOMEPAGE
        'hero_title_1' => 'Terokai',
        'hero_title_2' => 'Permata Tersembunyi',
        'hero_title_3' => 'Perlis',

        'hero_description' =>
            'Terokai keindahan, budaya, makanan dan tarikan menarik yang terdapat di Perlis.',

        'explore_destinations' => 'Terokai Destinasi',

        'search_placeholder' => 'Cari destinasi...',

        'search_button' => 'Cari',

        'popular_destinations' => 'Destinasi Popular',

        'popular_description' =>
            'Temui tarikan menarik dan tempat-tempat unik yang menanti anda di Perlis.',

        'view_details' => 'Lihat Maklumat',

        'language' => 'Bahasa',

        'english' => 'English',

        'malay' => 'Bahasa Melayu'

    ]

];


// =========================================================
// SIMPLE TRANSLATION FUNCTION
// =========================================================

function t($key)
{
    global $translations;
    global $lang;

    return $translations[$lang][$key] ?? $key;
}

?>