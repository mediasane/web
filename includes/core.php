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
if(!function_exists('getBaseSegment')) 
{
    function getBaseSegment() 
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
 * It relies on getBaseSegment() to obtain the current URL segment.
 * A native switch statement maps each possible segment value to a specific array of keys.
 * If no matching segment is found, a default empty array is returned.
 *
 * @return array An associative array of keys corresponding to the URL segment.
*/
if(!function_exists('getDataSegment')) 
{
    function getDataSegment() 
    {
        /**
         * Load global
        */
        global $conf;
        
        /**
         * Define $seg
        */
        $seg = getBaseSegment();
        switch($seg) 
        {
            case 'contact':
                return [
                    'title'         => 'Contact MediaSane - Media Rename Tool Support and Feedback',
                    'breadcrumb'    => 'Contact',
                    'description'   => 'Contact the MediaSane team for support, bug reports, feature requests, or licensing questions about the photo and video renaming tool.',
                    'thumbnail'     => 'https://'.$conf['domain'].'/uploads/thumbnails/media-contact.webp',
                    'canonical'     => 'https://'.$conf['domain'].'/contact/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/logo-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            case 'download':
                return [
                    'title'         => 'Download MediaSane – Photo and Video Renamer',
                    'breadcrumb'    => 'Download',
                    'description'   => 'Download MediaSane for Linux. Rename photos and videos by date, remove duplicates safely, and preview all changes before applying them.',
                    'thumbnail'     => 'https://'.$conf['domain'].'/uploads/thumbnails/media-download.webp',
                    'canonical'     => 'https://'.$conf['domain'].'/download/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/logo-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            case 'faq':
                return [
                    'title'         => 'F.A.Q About MediaSane Smart Photo and Video Renamer',
                    'breadcrumb'    => 'F.A.Q',
                    'description'   => 'Find answers about MediaSane: EXIF dates, duplicate detection, dry-run mode, safety features, and how to organize photos and videos.',
                    'thumbnail'     => 'https://'.$conf['domain'].'/uploads/thumbnails/media-faq.webp',
                    'canonical'     => 'https://'.$conf['domain'].'/faq/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/logo-dark.png',
                    'footertext'    => 'text-muted'
                ];

            case 'home':
                return [
                    'title'         => 'Ubuntu Smart Photo and Video Renamer',
                    'breadcrumb'    => 'MediaSane',
                    'description'   => 'Organize photos and videos automatically with MediaSane. Rename by EXIF date, detect duplicates by hash, and safely clean messy folders with a fast desktop GUI.',
                    'thumbnail'     => 'https://'.$conf['domain'].'/uploads/thumbnails/media-home.webp',
                    'canonical'     => 'https://'.$conf['domain'].'/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/logo-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            case 'legal-notices':
                return [
                    'title'         => 'Legal Information and Compliance Notice',
                    'breadcrumb'    => 'Legal Notices',
                    'description'   => 'Discover the legal notices for MediaSane, including information on intellectual property rights, disclaimers, and compliance with relevant regulations and laws.',
                    'thumbnail'     => 'https://'.$conf['domain'].'/uploads/thumbnails/media-legal-notices.webp',
                    'canonical'     => 'https://'.$conf['domain'].'/legal-notices/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/logo-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            case 'privacy-policy':
                return [
                    'title'         => 'Privacy Policy and Data Protection',
                    'breadcrumb'    => 'Privacy Policy',
                    'description'   => 'This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data.',
                    'thumbnail'     => 'https://'.$conf['domain'].'/uploads/thumbnails/media-privacy-policy.webp',
                    'canonical'     => 'https://'.$conf['domain'].'/privacy-policy/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/logo-dark.png',
                    'footertext'    => 'text-muted'
                ];

            case 'terms-of-use':
                return [
                    'title'         => 'Terms of Service and User Agreement',
                    'breadcrumb'    => 'Terms of Use',
                    'description'   => 'This page thoroughly explains the terms and conditions by which you may access and use our online and/or mobile services, website, and any related services provided on or in connection with our website.',
                    'thumbnail'     => 'https://'.$conf['domain'].'/uploads/thumbnails/media-terms-of-use.webp',
                    'canonical'     => 'https://'.$conf['domain'].'/terms-of-use/',
                    'navbar'        => 'navbar-dark',
                    'footerlogo'    => '/uploads/logos/logo-dark.png',
                    'footertext'    => 'text-muted'
                ];
                
            default:
                return [
                    'title'         => 'Error 404',
                    'breadcrumb'    => '404',
                    'description'   => 'Page not found. The link may be broken, moved, or removed. Return to MediaSane home or explore our site to find the content you need quickly and safely online.',
                    'thumbnail'     => 'https://'.$conf['domain'].'/uploads/thumbnails/media-404.webp',
                    'canonical'     => 'https://'.$conf['domain'].'/404/',
                    'navbar'        => 'navbar-light',
                    'footerlogo'    => '/uploads/logos/logo-light.png',
                    'footertext'    => 'text-light'
                ];
        }
    }
}

?>