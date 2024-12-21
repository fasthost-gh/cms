<?php
// =============================
// Page configuration
// =============================

$pageTitle = 'Page Title (browser)';
$portalTitle = 'Page Title (portal)';
$metaPageDescription = 'Page Description (metatag)';

// =============================
// Do not change anything bellow
// =============================

// Get the base name of the file
$caseName = pathinfo(__FILE__, PATHINFO_FILENAME);

// Paths for the meta tags and HTML content files
$metaFile = __DIR__ . '/meta/' . $caseName . '.php';
$contentFile = __DIR__ . '/html/' . $caseName . '.php';

// baseUrl
$baseUrl = rtrim(filter_var($this->base_url ?? '', FILTER_SANITIZE_URL), "/");

// Include the meta tags file dynamically
$metaTags = '';
if (file_exists($metaFile)) {
    ob_start();
    include $metaFile;
    $metaTags = ob_get_clean();
}

// Include the HTML content file dynamically
$htmlContent = '';
if (file_exists($contentFile)) {
    ob_start();
    include $contentFile;
    $htmlContent = ob_get_clean();
}

// Set up the structure of the page
$this->structure->set("page_title", $pageTitle);
$this->structure->set("title", $portalTitle);
$this->structure->set("metatags", $metaTags);
$this->set("content", $htmlContent);
?>