<?php
/**
 * Load environment
*/
require('includes/loader.php');

/**
 * Define $core
*/
$core = getDataSegment();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php echo $core['title']; ?> | <?php echo $conf['sitename']; ?></title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="stylesheet" href="/assets/fonts/flaticon/flaticon.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/stylesheets/vendors/bootstrap/bootstrap.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/stylesheets/vendors/wmenu/wmenu.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/stylesheets/vendors/fadedown/fadedown.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/stylesheets/vendors/miscs/miscs.min.css?v=<?php echo $version; ?>" media="all">
    <link rel='stylesheet' href="/assets/stylesheets/vendors/prism/prism.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/stylesheets/vendors/cookieconsent/cookieconsent.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/stylesheets/app.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/stylesheets/responsive.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/assets/stylesheets/custom.min.css?v=<?php echo $version; ?>" media="all">
    <link rel="canonical" href="<?php echo $core['canonical']; ?>">
    <meta name="description" content="<?php echo $core['description']; ?>">
    <meta name="author" content="<?php echo $conf['sitename']; ?>">
    <meta name="copyright" content="<?php echo $conf['sitename']; ?>">
    <link rel="icon" type="image/png" href="/uploads/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="/uploads/favicons/favicon.svg">
    <link rel="shortcut icon" href="/uploads/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/uploads/favicons/apple-touch-icon.png">
    <link rel="manifest" href="/uploads/favicons/site.webmanifest">
    <meta name="apple-mobile-web-app-title" content="<?php echo $conf['sitename']; ?>">
    <meta itemprop="name" content="<?php echo $core['title']; ?>">
    <meta itemprop="description" content="<?php echo $core['description']; ?>">
    <meta itemprop="image" content="<?php echo $core['thumbnail']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $core['title']; ?>">
    <meta property="og:site_name" content="<?php echo $conf['sitename']; ?>">
    <meta property="og:description" content="<?php echo $core['description']; ?>">
    <meta property="og:url" content="<?php echo $core['canonical']; ?>">
    <meta property="og:image" content="<?php echo $core['thumbnail']; ?>">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1080">
    <meta name="twitter:card" value="summary_large_image">
    <meta name="twitter:url" value="<?php echo $core['canonical']; ?>">
    <meta name="twitter:title" value="<?php echo $core['title']; ?>">
    <meta name="twitter:description" value="<?php echo $core['description']; ?>">
    <meta name="twitter:image" value="<?php echo $core['thumbnail']; ?>">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $conf['gtag']; ?>"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo $conf['gtag']; ?>');
    </script>
</head>