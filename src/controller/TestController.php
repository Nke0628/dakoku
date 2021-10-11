<?php

namespace Src\controller;

use App\Http\Controllers\Controller;
use Src\resource\TestResource;
use Src\usecase\TestUseCase;

class TestController extends Controller
{
    /**
     * @var TestUseCase
     */
    private $testUseCase;

    /**
     * TestController constructor.
     * @param TestUseCase $testUseCase
     */
    public function __construct( TestUseCase $testUseCase )
    {
        $this->testUseCase = $testUseCase;
    }

    /**
     * @return TestResource
     */
    public function test(): TestResource
    {
        $this->testUseCase->execute();
        return new TestResource(['hoge'=>'fuga']);
    }
}
