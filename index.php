<?php
// index.php - simple router
$page = isset($_GET['page']) ? $_GET['page'] : 'user/list';

// security: allow only expected pages (basic whitelist)
$allowed = [
    'user/list',
    'user/add',
    'user/edit',
    'user/delete',
    'user/proses_add',
    'user/proses_edit',
    'auth/login',
    'auth/logout'
];

if(!in_array($page, $allowed)){
    http_response_code(404);
    echo 'Halaman tidak ditemukan.';
    exit;
}

$parts = explode('/', $page);
$file = __DIR__ . '/modules/' . $parts[0] . '/' . $parts[1] . '.php';
if(file_exists($file)){
    require $file;
} else {
    http_response_code(404);
    echo 'File modul tidak ditemukan: ' . htmlspecialchars($file);
}
