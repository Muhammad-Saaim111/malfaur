<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$sections = \DB::table('page_sections')->get();
foreach ($sections as $s) {
    if (strpos($s->content, 'Cutting Edge Tech') !== false) {
        echo "Found in ID: " . $s->id . " Key: " . $s->section_key . "\n";
        echo $s->content . "\n";
    }
}
