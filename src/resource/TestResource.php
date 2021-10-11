<?php


namespace Src\resource;


class TestResource extends BaseResource
{
    /**
     * @var array
     */
    private $testList;

    /**
     * TestResource constructor.
     * @param array $testList
     */
    public function __construct( array $testList)
    {
        parent::__construct();
        $this->testList = $testList;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'status' => 'success',
            'result' => $this->testList
        ];
    }
}
