<?php

namespace App;

use App\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tb_bistro extends Model {

    use SoftDeletes;

    /**
     * 需要被轉換成日期的屬性。
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = ['name'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
//    protected $casts = [
//        'user_id' => 'int',
//    ];

    /**
     * 取得擁有此任務的使用者。
     */
    public function member() {
        return $this->belongsTo(Member::class);
    }

}
