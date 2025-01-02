<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    private static $asset;
    public static function newAsset($request)
    {
        self::$asset =new Asset();
        self::$asset ->name   = $request->name;
        self::$asset->save();

    }

//    public function requisition(){
//     return $this ->hasOne(Requisition::class);
//    }


}
