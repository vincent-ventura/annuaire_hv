<?php

namespace HV\AnnuaireHv;

/**
 * Created by PhpStorm.
 * User: vventura
 * Date: 29/06/17
 * Time: 11:23
 */
class Search
{
    /**
     * Keyword
     *
     * @var string
     */
    protected $keyword = "";

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }
}