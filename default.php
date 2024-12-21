<?php
// =============================
// Do not change anything bellow
// =============================

// Redirect to home page (or custom 404 page)
$redirectUrl = filter_var($this->base_uri ?? '/', FILTER_SANITIZE_URL);
$this->redirect($redirectUrl);
?>