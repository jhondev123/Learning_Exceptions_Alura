<?php

class MinhaExcecao extends  DomainException
{
    public function exibe()
    {
        echo "curta";
    }
}

throw new MinhaExcecao();