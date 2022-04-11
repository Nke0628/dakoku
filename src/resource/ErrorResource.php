<?php


namespace Src\resource;


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
     * @param int $statusCode
     */
    public function __construct( array $output, int $statusCode )
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

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
