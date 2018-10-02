<?php

namespace App;

class PostRepo
{
    public function getAllFiltered($filters, $pivots)
    {
        return new RisultatiOrder(new RisultatiFilter($this->modificaChiaviFilter($filters), $pivots));
    }

    public function modificaChiaviFilter($dati)
    {
        // modifica
        return $dati;
    }
}
