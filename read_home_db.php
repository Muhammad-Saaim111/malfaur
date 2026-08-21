<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$page = \App\Models\Page::where('slug', 'home')->first();
$content = $page->section_content;
if(is_string($content)) $content = json_decode($content, true);

print_r($content['about']);
