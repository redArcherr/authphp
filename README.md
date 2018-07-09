# authphp
php的http授权显示页面
$_SERVER['PHP_AUTH_USER']和$_SERVER['PHP_AUTH_PW']两个超级全局变量存储账密
php的http授权基于header()函数发送给浏览器的首部信息，主要用到基本域的概念“Basic realm”
