<?php


namespace Src\Domain\Task;


use Carbon\Carbon;

class Task
{
    /** @var int */
    private $id;

    /** @var int */
    private $userId;

    /** @var string */
    private $taskName;

    /** @var int */
    private $taskStatus;

    /** @var Carbon */
    private $fixedDate;

    public function __construct()
    {
    }

    public function test()
    {
        return true;
    }
}
