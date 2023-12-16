<?php

namespace classes;

class Calc
{
    private int $_rightOperand;
    private int $_leftOperand;

    public function __construct($rightOperand, $leftOperand)
    {
        $this->_rightOperand = $rightOperand;
        $this->_leftOperand = $leftOperand;
    }

    public function setRightOperand($rightOperand)
    {
        $this->_rightOperand = $rightOperand;
    }
    public function setLeftOperand($leftOperand)
    {
        $this->_leftOperand = $leftOperand;
    }
    public function sum(): int
    {

    }

}