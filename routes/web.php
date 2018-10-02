<?php



Route::get('/', function () {
    return view('welcome');
});


// posts
// post_tag
// tags

// Squadre - LaMiaSqudra
// Squadre - LaMiaSqudra2
// Squadre - LaMiaSqudra23
// calciatore_squadra - CalciatoreSquadra - Crediti, Ruolo
// Calciatore - CR7

// class Squadra extends Model
// {
//     // Squadra::with('attaccanti', 'portieri');
//     public function calciatori()
//     {
//         return $this->belognsToMany(Calciatore::class, 'calciatore_squadra')->withPivot(['crediti', 'ruolo']);
//     }

//     public function attaccanti()
//     {
//         return $this->calciatori()->wherePivot('ruolo', 'attaccante');
//     }

//     public function calciatoriSquadra()
//     {
//         return $this->hasMany(CalciatoreSquadra::class, 'squadra_id');
//     }
// }

// class CalciatoreSquadra extends Pivot
// {
//     protected $table = 'calciatore_squadra';

//     public function calciatori()
//     {
//         return $this->belognsTo(Calciatore::class, 'calciatore_id'); //calciatore_id, squadra_id
//     }

//     public function squadre()
//     {
//         return $this->belognsTo(Calciatore::class, 'squadra_id_id'); //calciatore_id, squadra_id
//     }
// }

// class Calciatore extends Model
// {
//     public function squadre()
//     {
//         return $this->belognsToMany(Calciatore::class, 'calciatore_squadra'); //calciatore_id, squadra_id
//     }
// }
