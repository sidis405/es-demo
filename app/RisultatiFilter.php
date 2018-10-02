<?php

namespace App;

class RisultatiFilter
{
    public function __invoke($parametri, $datiPivot = null)
    {
        $posts = Post::latest();

        foreach ($parametri as $chiave => $valori) {
            $posts = $posts->whereIn($chiave, $valori);
        }

        foreach ($datiPivot as $relazioni => $valori) {
            $posts = $posts->whereHas($chiave, function($query){
                $query->whereIn($relazioni . '_id', $valori)
            });
        }

        return $posts->get();
    }
}
