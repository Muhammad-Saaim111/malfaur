<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$sections = \App\Models\PageSection::all();
foreach($sections as $s) {
    if (strpos(json_encode($s->content), 'Innovation') !== false) {
        echo "Found in ID: " . $s->id . " Key: " . $s->section_key . "\n";
        print_r($s->content);
    }
}
