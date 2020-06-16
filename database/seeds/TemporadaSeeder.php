<?php

use Illuminate\Database\Seeder;

class TemporadaSeeder extends Seeder
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
            'video_url' => 'https://www.youtube.com/embed/Mew6G_og-PI',
            'descricao' => 'Descrição Aqui viu',
            'robo_desc' => 'Aqui é a Descrição do robô viu',
            'robo_foto' => 'robo_fotos/WaCW8MJ8n5OF2CeWF2rBbIaiCJ44y4DtPC0O1oM1.jpeg',
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

        DB::table('regionals')->insert([
            'temporada_id' => 1,
            'nome' => 'Rock City',
            'local' => 'Arkansas DC.',
            'data' => 'De 3 de Março até 7 De Abril',
            'classificacao' => '4º Lugar na classificação geral, semifinalista',
            'premios' => 'Semifinalista, Most Beautiful Website award',
        ]);
    }
}
