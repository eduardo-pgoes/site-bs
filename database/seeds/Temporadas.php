<?php

use Illuminate\Database\Seeder;

class Temporadas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temporadas')->insert([
            'nome' => 'Deep Space',
            'video_url' => 'https://www.youtube.com/watch?v=Mew6G_og-PI',
            'descricao' => 'Descrição Aqui viu',
            'robo_desc' => 'Aqui é a Descrição do robô viu',
            'robo_foto' => 'path da foto',
            'Ano' => '2019',
        ]);

        DB::table('regionals')->insert([
            'temporada_id' => 1,
            'nome' => 'St. Louis',
            'local' => 'St. Louis né',
            'data' => 'De 1 de janeiro até 32 de Dezembro',
            'classificacao' => 'Não foi realizada devido a pandemia',
            'premios' => 'time mais iludido',
        ]);
    }
}
