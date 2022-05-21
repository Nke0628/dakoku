<?php

namespace Tests\Domain\Task;

use PHPUnit\Framework\TestCase;
use Src\Domain\Task\Task;

class TaskTest extends TestCase
{

    public function testTest()
    {
        $task = new Task();
        $result = $task->test();
        $this->assertSame(true,$result);
    }
}
