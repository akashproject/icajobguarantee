<?php
use App\Models\Media;

if (! function_exists('getSizedImage')) {
    function getSizedImage($size = '',$id) {
        $size = ($size)?$size.'_':"";
        $media = Media::findOrFail($id);
        return $filename = env('APP_URL').$media->path.'/'.$size.$media->filename;
    }
}