<?php

namespace App\Policies;

use App\Member;
use App\Tb_bistro;
use Illuminate\Auth\Access\HandlesAuthorization;

class BistroPolicy {

    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * 判斷當給定的使用者可以刪除給定的任務。
     *
     * @param  Member  $member
     * @param  Tb_bistro  $bistro
     * @return bool
     */
    public function destroy(Member $member, Tb_bistro $bistro) {
        return $member->id === $bistro->member_id;
    }

}
