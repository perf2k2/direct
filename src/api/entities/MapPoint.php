<?php

namespace api\entities;

class MapPoint
{
    protected $X;
    protected $Y;
    protected $X1;
    protected $Y1;
    protected $X2;
    protected $Y2;
    
    public function __construct(float $X, float $Y, float $X1, float $Y1, float $X2, float $Y2)
    {
        $this->X = $X;
        $this->Y = $Y;
        $this->X1 = $X1;
        $this->Y1 = $Y1;
        $this->X2 = $X2;
        $this->Y2 = $Y2;
    }
}