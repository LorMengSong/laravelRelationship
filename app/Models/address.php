<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "addresses";
    protected $guarded = ['id'];
    public function getUser(){
        return $this->belongsTo(User::class,'u_id');
    }
    public static function getAllAddress(){
        $data = [];
        $entries = address::all();
        if($entries){
            foreach($entries as $value){
                $result_data['id'] = $value->id;
                $result_data['user_id'] = $value->user_id;
                $result_data['country'] = $value->country;
                $data[] = $result_data;
            }
        }
        return $data;
    }
}
