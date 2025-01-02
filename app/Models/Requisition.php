<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    private static $requisition;


    public static function newRequisition($request)
    {
        self::$requisition =new Requisition();
        self::$requisition ->asset_id   = $request->asset_id;
        self::$requisition ->name   = $request->name;
        self::$requisition ->phone   = $request->phone;
        self::$requisition ->email   = $request->email;
        self::$requisition ->designation   = $request->designation;
        self::$requisition->save();

    }
    public function asset()
    {
      return $this -> belongsTo(Asset::class);
    }

}
