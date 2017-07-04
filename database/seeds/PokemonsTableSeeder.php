<?php

use Illuminate\Database\Seeder;

class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\SON\Models\Pokemons::class,1)->create([
            'name' => 'Ivysaur'
        ]);

        factory(\SON\Models\Pokemons::class,2)->create([
            'name' => 'Venusaur'
        ]);

        factory(\SON\Models\Pokemons::class,3)->create([
            'name' => 'Charmander'
        ]);

        factory(\SON\Models\Pokemons::class,4)->create([
            'name' => 'Charizard'
        ]);
        factory(\SON\Models\User::class,5)->create([
            'name' => 'Squirtle'
        ]);

        factory(\SON\Models\Pokemons::class,6)->create([
            'name' => 'Blastoise'
        ]);

        factory(\SON\Models\Pokemons::class,7)->create([
            'name' => 'Metapod'
        ]);

        factory(\SON\Models\Pokemons::class,8)->create([
                    'name' => 'Metapod'
        ]);

        factory(\SON\Models\Pokemons::class,9)->create([
            'name' => 'Metapod'
        ]);
        factory(\SON\Models\Pokemons::class,10)->create([
            'name' => 'Metapod'
        ]);

        factory(\SON\Models\Pokemons::class,20)->create();
    }
}
