<?php
declare (strict_types=1);

namespace biwankaifa\cron;

use biwankaifa\cron\command\Run;
use biwankaifa\cron\command\Schedule;

class Service extends \think\Service
{

    public function boot()
    {
        $this->commands([
            Run::class,
            Schedule::class,
        ]);
    }
}