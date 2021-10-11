<?php


namespace Src\resource;


use Illuminate\Http\Resources\Json\JsonResource;

/**
 * JsonResource基底クラス
 *
 * Class BaseResource
 * @package Src\resource
 */
abstract class BaseResource extends JsonResource
{
    public function __construct()
    {
        parent::__construct('');
        $this::withoutWrapping();
    }
}
