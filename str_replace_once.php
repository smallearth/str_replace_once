<?php
$str1 = '斯蒂芬斯蒂芬但是php第三方斯蒂芬森php但是发生地方html第三方斯蒂芬森html';

/**
 * 字符串替换函数，替换第一次出现的字符串
 * @param string $needle	查找的字符串
 * @param string $replace	替换的字符串
 * @param string $haystack	需要进行替换操作的字符串
 * @return string |mixed
 */
function str_replace_once($needle, $replace, $haystack) {
    $pos = strpos($haystack, $needle);
    if ($pos === false) {
        return $haystack;
    }
    return substr_replace($haystack, $replace, $pos, strlen($needle));
}
foreach($arr as $row){
	$str1 = str_replace_once($row['title'], "%#%{$row['title']}%#%", $str1);
}

foreach($arr as $row){
	$str1 = str_replace_once("%#%{$row['title']}%#%", "<a href=\"{$row['url']}\">{$row['title']}</a>", $str1);
}
echo $str1;