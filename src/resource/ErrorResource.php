<?php


namespace Src\resource;


use phpDocumentor\Reflection\Types\Integer;

class ErrorResource extends BaseResource
{
    /**
     * @var array
     */
    private $output;

    /**
     * @var int
     */
    private $statusCode;

    /**
     * ErrorResource constructor.
     * @param array $output
     * @param Integer $statusCode
     */
    public function __construct( array $output, Integer $statusCode )
    {
        parent::__construct();
        $this->output = $output;
        $this->statusCode = $statusCode;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'status' => 'error',
            'result' => $this->output
        ];
    }
}
