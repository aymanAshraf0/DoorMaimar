<?php
namespace App\Trait;

use Illuminate\Support\Facades\File as FacadesFile;


/**
 * 
 */
trait UploadFile 
{
    static public function File($type, $file)
    {
        $extention = strtolower($file->getClientOriginalExtension());
        $name = time() . rand(100, 999) . '.'  . $extention;
        $file->move($type, $name);
        return $type . $name;
    }

    static public function Delete($file)
    {
        if (file_exists($file)) {
            return FacadesFile::delete($file);
        }
    }
}