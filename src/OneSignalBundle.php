<?php

/**
 * This file is part of the Adelplace\OneSignalBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 **/

namespace Adelplace\OneSignalBundle;

use Adelplace\OneSignalBundle\DependencyInjection\OneSignalExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Alexandre Delplace alexandre.delplacemille@gmail.com
 */
class OneSignalBundle extends Bundle
{
    const VERSION = '1.2.2';
    const ALIAS = 'adelplace_one_signal';

    public function getContainerExtension()
    {
        return new OneSignalExtension();
    }
}
