<?php

namespace Foolz\FoolFuuka\Theme\Trefoil\Partial;

class Plugin extends \Foolz\FoolFuuka\View\View
{
    public function toString()
    {
        echo $this->getParamManager()->getParam('content');
    }
}
