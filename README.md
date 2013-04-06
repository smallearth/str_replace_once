str_replace_once
================
字符串关键字替换

1、对多次出现的关键词进行第一次替换

2、防止替换后的内容中出现关键词时再次被替换的问题出现

如：

$sql = '测试测试测php测试html测试测试php';

关键词：

php 替换为 <a href="http://www.php230.com/html/233.html">php</a>

html 替换为 <a href="http://www.php230.com/html/23223.html">html</a>

对字符串变量$sql进行第一次替换后把第一个php进行替换，结果为:

$sql = '测试测试测<a href="http://www.php230.com/html/233.html">php</a>测试html测试测试php';

再次对$sql变量进行html替换时,正常状况下会对a标签中的html进行替换，这样导致出错，错误结果为：


$sql = '测试测试测<a href="http://www.php230.com/<a href="http://www.php230.com/html/23223.html">html</a>/233.html">php</a>测试html测试测试php';


而使用该方法，则避免了这个问题的出现，正确的结果为：

$sql = '测试测试测<a href="http://www.php230.com/html/233.html">php</a>测试<a href="http://www.php230.com/html/23223.html">html</a>测试测试php';
