<?php

namespace RBMH\Memory;


use App\Http\Controllers\Controller;

class MemoryAddOnController extends Controller {

    public function getStaticData () {
        $data['visible'] = config('rbmh.announcement.data.visible');
        $data['level'] = config('rbmh.announcement.data.level');
        $data['msg'] = config('rbmh.announcement.data.msg');
        return json_encode($data);
    }
}
