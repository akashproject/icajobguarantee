<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class HelperServiceProvider extends ServiceProvider 
{ 
    public function register() { 
        foreach (glob(sprintf('%s/Helpers/*.php', app_path())) as $helper_file) {
             require_once($helper_file); 
        } 
    }
    
    public function boot() { 
    } 
}

