<?php

/**
 * This file is part of the Edoger framework.
 *
 * @author    Qingshan Luo <shanshan.lqs@gmail.com>
 * @copyright 2017 - 2020 Qingshan Luo
 * @license   GNU Lesser General Public License 3.0
 */

namespace Edoger\Util\Contracts;

interface Wrapper
{
    /**
     * Gets the original value.
     *
     * @return mixed
     */
    public function getOriginal();
}
