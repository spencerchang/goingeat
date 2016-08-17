<?php

namespace App\Repositories;

use DB;
use App\Member;
use App\Tb_bistro;

class BistroRepository {

    public function insert($data) {
        $result = Tb_bistro::create($data);
        return $result->id;
    }

    public function update($id, $data) {
        $querys = Tb_bistro::where('id', $id)->find(1);

        foreach ($data as $col => $val) {
            $querys->$col = $val;
        }
        return $querys->save();
    }

    public function delete($id) {
        return Tb_bistro::where('id', $id)->delete();
    }

    public function findOne($where = array(), $order = array(), $limit = array(), $select = '*') {
//        DB::enableQueryLog();

        $querys = Tb_bistro::select($select);

        $querys->where($where);

        if (!empty($order)) {
            foreach ($order as $col => $sort) {
                $querys->orderBy($col, $sort);
            }
        }

        if (!empty($limit)) {
            $querys->skip($limit[0])->take($limit[1]);
        }

        $result = $querys->first();

//        return DB::getQueryLog();
        return $result;
    }

    public function findAll($where = array(), $order = array(), $limit = array(), $select = '*') {
//        DB::enableQu  eryLog();

        $querys = Tb_bistro::select($select);

        $querys->where($where);

        if (!empty($order)) {
            foreach ($order as $col => $sort) {
                $querys->orderBy($col, $sort);
            }
        }

        if (!empty($limit)) {
            $querys->skip($limit[0])->take($limit[1]);
        }

        $result = $querys->get();

//        return DB::getQueryLog();
        return $result;
    }

    public function countAll($where = array(), $order = array(), $limit = array(), $select = '*') {
//        DB::enableQueryLog();

        $querys = Tb_bistro::select($select);

        $querys->where($where);

        if (!empty($order)) {
            foreach ($order as $col => $sort) {
                $querys->orderBy($col, $sort);
            }
        }

        if (!empty($limit)) {
            $querys->skip($limit[0])->take($limit[1]);
        }

        $result = $querys->count();

//        return DB::getQueryLog();
        return $result;
    }

}
