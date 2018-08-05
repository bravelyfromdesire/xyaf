<?php
error_reporting(E_ALL);
//配置在哪？
define('APP_PATH', __DIR__);
define('CONFIG_PATH', APP_PATH . '/config/');
define('APP_CONFIG', CONFIG_PATH . 'app.ini');
//调用函数
try {
    /**
     * Yaf_Application __construct()
     * @param mixed config 配置文件，可以是数组，可以是ini文件
     * @param string section 如果config是ini文件，则section指代特定的配置节
     * @return Yaf_Application
     */
    $app = new Yaf\Application(APP_CONFIG);

    /**
     * Yaf_Application bootstrap()
     * 启动程序之前的初始化：寻找Bootstrap.php文件，并执行其中所有的以_init开头的方法
     * @param void
     * @return Yaf\Application
     */
    $app = $app->bootstrap();

    /**
     * Yaf_Application run()
     * 开始接受并处理请求
     * @param void
     * @return boolean
     */
    $app->run();
} catch (Exception $exception) {
    var_dump($exception);die;
} catch (Error $error) {
    var_dump($error);die;
}
