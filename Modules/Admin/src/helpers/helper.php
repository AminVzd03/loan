<?php

if(!function_exists("setting")) {
    function setting($name) {
        return \Modules\Admin\Models\Setting::where('name',$name)->select('value')->firstOrFail();
    }
}
