<?php

/*
 * This file is part of Opt.
 *
 * (c) Arash Ghamkhari <dev@ghamkhari.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Opt;

interface OptInterface
{
    /**
     * Set option
     * @param int $opt
     * @param $value
     * @return $this
     */
    public function setOpt(int $opt, $value);

    /**
     * Get Option
     * @param int $opt
     * @return mixed NULL returned if option is not exists.
     */
    public function getOpt(int $opt);

    /**
     * Is option exists?
     * @param int $opt
     * @return bool
     */
    public function isOpt(int $opt): bool;
}