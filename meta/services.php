<?php
// =============================
// Do not change anything bellow
// =============================

$imagePath = $baseUrl . '/cms/meta/images/' . pathinfo(__FILE__, PATHINFO_FILENAME) . '.png';
if (!file_exists(__DIR__ . '/images/' . pathinfo(__FILE__, PATHINFO_FILENAME) . '.png')) {
    $imagePath = $baseUrl . '/cms/meta/images/default.png';
}
?>
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($metaPageDescription, ENT_QUOTES, 'UTF-8'); ?>"/>
<meta property="og:image" content="<?php echo htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8'); ?>"/>
<meta property="og:url" content="<?php echo htmlspecialchars($baseUrl . '/' . pathinfo(__FILE__, PATHINFO_FILENAME), ENT_QUOTES, 'UTF-8'); ?>"/>