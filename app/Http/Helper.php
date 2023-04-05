<?php
use Illuminate\Support\Facades\Storage;
use App\Models\Settings;

function getSettings(){    
    $setting = Settings::first();    
    return $setting;
    
}

?>