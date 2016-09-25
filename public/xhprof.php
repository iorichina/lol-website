<?php
xhprof_enable();

// include 'index.php';
require __DIR__.'/../bootstrap/autoload.php';
$app = require_once __DIR__.'/../bootstrap/start.php';

$app->after(function($app) {
    // stop profiler
    $xhprof_data = xhprof_disable();

    $XHPROF_ROOT    = dirname(dirname(__DIR__)).'/xhprof';
    //
    // Saving the XHProf run
    // using the default implementation of iXHProfRuns.
    //
    include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_lib.php";
    include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_runs.php";

    $xhprof_runs = new XHProfRuns_Default();

    // Save the run under a namespace "xhprof_foo".
    //
    // **NOTE**:
    // By default save_run() will automatically generate a unique
    // run id for you. [You can override that behavior by passing
    // a run id (optional arg) to the save_run() method instead.]
    //
    $run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_foo");
    echo "<a href='http://xhprof.vicp.cc/index.php?run=$run_id&source=xhprof_foo'>查看分析结果</a>";
});

$app->run();