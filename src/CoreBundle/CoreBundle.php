<?php

namespace CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CoreBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
