<?php

declare (strict_types=1);
namespace BitPayVendor\PhpParser\Node\Expr\BinaryOp;

use BitPayVendor\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'and';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalAnd';
    }
}