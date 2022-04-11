<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function getLogDir():string
    {
        // When on the lambda only /tmp is writeable
        if (getenv('LAMBDA_TASK_ROOT') !== false) {
            return '/tmp/log/';
        }

        return parent::getLogDir();
    }

    public function getCacheDir():string
    {
        // When on the lambda only /tmp is writeable
        if (getenv('LAMBDA_TASK_ROOT') !== false) {
            return '/tmp/cache/'.$this->environment;
        }

        return parent::getCacheDir();
    }
}
