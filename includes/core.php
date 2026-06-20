<?php

/**
 * Get Last URL Segment
 * 
 * This function retrieves the final segment from the current URL path.
 * It automatically removes query strings (GET parameters) and trailing slashes.
 * The function returns only the clean segment without any additional characters.
 * It is designed to be reused by other functions needing the last URL part.
 *
 * @return string The last segment of the URL path, or empty string if none exists.
*/
if(!function_exists('getLastUrlSegment')) 
{
    function getLastUrlSegment() 
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = strtok($uri, '?');
        $uri = trim($uri, '/');
        
        if(empty($uri)) 
        {
            return 'home';
        }
        
        $seg = explode('/', $uri);
        return end($seg);
    }
}

/**
 * Get Data By Last Segment
 * 
 * This function uses the last URL segment to determine which data array to return.
 * It relies on getLastUrlSegment() to obtain the current URL segment.
 * A native switch statement maps each possible segment value to a specific array of keys.
 * If no matching segment is found, a default empty array is returned.
 *
 * @return array An associative array of keys corresponding to the URL segment.
*/
if(!function_exists('getDataByLastSegment')) 
{
    function getDataByLastSegment() 
    {
        $seg = getLastUrlSegment();
        switch($seg) 
        {
            case 'contact':
                return [
                    'title'         => 'Contact MediaSane - Media Rename Tool Support & Feedback',
                    'description'   => 'Contact the MediaSane team for support, bug reports, feature requests, or licensing questions about the photo and video renaming tool.',
                    'thumbnail'     => 'https://mediasane.com/uploads/thumbnails/media-contact.webp',
                    'canonical'     => 'https://mediasane.com/contact/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/mediasane-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            case 'download':
                return [
                    'title'         => 'Download MediaSane – Photo & Video Renamer',
                    'description'   => 'Download MediaSane for Linux. Rename photos and videos by date, remove duplicates safely, and preview all changes before applying them.',
                    'thumbnail'     => 'https://mediasane.com/uploads/thumbnails/media-download.webp',
                    'canonical'     => 'https://mediasane.com/download/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/mediasane-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            case 'faq':
                return [
                    'title'         => 'Frequently Asked Questions',
                    'description'   => 'Find answers about MediaSane: EXIF dates, duplicate detection, dry-run mode, safety features, and how to organize photos and videos.',
                    'thumbnail'     => 'https://mediasane.com/uploads/thumbnails/media-faq.webp',
                    'canonical'     => 'https://mediasane.com/faq/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/mediasane-dark.png',
                    'footertext'    => 'text-muted'
                ];

            case 'home':
                return [
                    'title'         => 'Ubuntu Smart Photo & Video Renamer',
                    'description'   => 'Organize photos and videos automatically with MediaSane. Rename by EXIF date, detect duplicates by hash, and safely clean messy folders with a fast desktop GUI.',
                    'thumbnail'     => 'https://mediasane.com/uploads/thumbnails/media-home.webp',
                    'canonical'     => 'https://mediasane.com/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/mediasane-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            case 'legal-notices':
                return [
                    'title'         => 'Legal Notices',
                    'description'   => 'Discover the legal notices for MediaSane, including information on intellectual property rights, disclaimers, and compliance with relevant regulations and laws.',
                    'thumbnail'     => 'https://mediasane.com/uploads/thumbnails/media-legal-notices.webp',
                    'canonical'     => 'https://mediasane.com/legal-notices/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/mediasane-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            case 'privacy-policy':
                return [
                    'title'         => 'Privacy Policy',
                    'description'   => 'This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data.',
                    'thumbnail'     => 'https://mediasane.com/uploads/thumbnails/media-privacy-policy.webp',
                    'canonical'     => 'https://mediasane.com/privacy-policy/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/mediasane-dark.png',
                    'footertext'    => 'text-muted'
                ];

            case 'terms-of-use':
                return [
                    'title'         => 'Terms of Use',
                    'description'   => 'This page thoroughly explains the terms and conditions by which you may access and use our online and/or mobile services, website, and any related services provided on or in connection with our website.',
                    'thumbnail'     => 'https://mediasane.com/uploads/thumbnails/media-terms-of-use.webp',
                    'canonical'     => 'https://mediasane.com/terms-of-use/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/mediasane-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            default:
                return [
                    'title'         => 'Error 404',
                    'description'   => 'Page not found. The link may be broken, moved, or removed. Return to MediaSane home or explore our site to find the content you need quickly and safely online.',
                    'thumbnail'     => 'https://mediasane.com/uploads/thumbnails/media-404.webp',
                    'canonical'     => 'https://mediasane.com/404/',
                    'navbar'        => 'navbar-light',
                    'footerlogo'    => '/uploads/logos/mediasane-light.png',
                    'footertext'    => 'text-light'
                ];
        }
    }
}

?>