<?php

namespace Opt\Tests;

use Opt\OptTrait;
use PHPUnit\Framework\TestCase;

class OptTest extends TestCase
{
    use OptTrait;

    const OPT_OPTION_1 = 0;
    const OPT_OPTION_2 = 1;
    const OPT_OPTION_3 = 2;

    public function testOpt()
    {
        $this->assertFalse($this->isOpt(self::OPT_OPTION_1));
        $this->assertNull($this->getOpt(self::OPT_OPTION_2));

        // Set value
        $object = $this->setOpt(self::OPT_OPTION_1, "VALUE_1");
        $this->assertTrue($object instanceof OptTest);
        $this->assertTrue($this->isOpt(self::OPT_OPTION_1));
        $this->assertSame('VALUE_1', $this->getOpt(self::OPT_OPTION_1));

        // Object value
        $this->setOpt(self::OPT_OPTION_2, new \stdClass());
        $this->assertTrue($this->getOpt(self::OPT_OPTION_2) instanceof \stdClass);
    }
}