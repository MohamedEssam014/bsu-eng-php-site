<?php
function t($arr, $key, $lang='ar') {
    $k = $key . '_' . ($lang === 'en' ? 'en' : 'ar');
    return $arr[$k] ?? '';
}
