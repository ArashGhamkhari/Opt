<?php declare(strict_types=1);

/*
 * This file is part of Opt.
 *
 * (c) Arash Ghamkhari <dev@ghamkhari.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Opt;

trait OptTrait
{
    private $OPT;

    public function setOpt(int $opt, $value)
    {
        $this->OPT[$opt] = $value;
        return $this;
    }

    public function getOpt(int $opt)
    {
        if (!$this->isOpt($opt))
            return null;

        return $this->OPT[$opt];
    }

    public function isOpt(int $opt): bool
    {
        return isset($this->OPT[$opt]);
    }
}