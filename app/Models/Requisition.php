<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    private static $requisition;
    public static function newAsset($request)
    {
        self::$requisition =new Asset();
        self::$requisition ->name   = $request->name;
        self::$requisition ->phone   = $request->phone;
        self::$requisition ->email   = $request->email;
        self::$requisition ->designation   = $request->designation;
        self::$requisition->save();

    }
}
