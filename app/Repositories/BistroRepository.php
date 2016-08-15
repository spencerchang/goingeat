<?php

namespace App\Repositories;

use App\Member;
use App\Tb_bistro;

class BistroRepository {

    /**
     * 取得給定使用者的所有任務。
     *
     * @param  Member  $member
     * @return Collection
     */
    public function forUser(Member $member) {
        return Tb_bistro::where('member_id', $member->id)
                        ->orderBy('created_at', 'asc')
                        ->get();
    }

}
