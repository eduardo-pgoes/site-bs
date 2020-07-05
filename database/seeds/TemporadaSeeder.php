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
        //2020
        DB::table('temporadas')->insert([
            'nome' => 'Infinite Recharge',
            'video_url' => 'https://www.youtube.com/embed/gmiYWTmFRVE',
            'descricao' => 'Descrição Aqui viu',
            'robo_desc' => 'O BS-04, criado para o desafio “Infinite Recharge” tem 4 características importantes: é baixo o suficiente para cruzar a zona segura , efetua disparos precisos, carrega a quantidade máxima permitida de “Power Cells”, se eleva e se iguala sozinho ao “Generator switch”.  É o nosso robô com o software mais complexo, que inclui um sistema de reconhecimento de imagem, que auxilia o piloto nos disparos e na criação de rotas inteligentes.',
            'robo_foto' => 'robo_fotos/WaCW8MJ8n5OF2CeWF2rBbIaiCJ44y4DtPC0O1oM1.jpeg',
            'banner' => '',
            'Ano' => '2020',
        ]);
        DB::table('regionals')->insert([
            'temporada_id' => 1,
            'nome' => 'Memphis Regional',
            'local' => 'Memphis, Tenessee',
            'data' => '18 a 21 de Março',
            'classificacao' => 'Não foi realizada devido a pandemia de COVID-19',
        ]);
        DB::table('regionals')->insert([
            'temporada_id' => 1,
            'nome' => 'St. Louis Regional',
            'local' => 'St. Louis, Missouri',
            'data' => '11 a 14 de Março',
            'classificacao' => 'Não foi realizada devido a pandemia de COVID-19',
        ]);   

        //2019
        DB::table('temporadas')->insert([
            'nome' => 'Deep Space',
            'video_url' => 'https://www.youtube.com/embed/Mew6G_og-PI',
            'descricao' => 'Descrição Aqui viu',
            'robo_desc' => 'Para realizar as tarefas do desafio “Destination: Deep Space!”, o BS-03 tinha um sistema de elevador que subia por meio de um cabo de aço, equipado com uma garra com duas funções.  Horizontalmente ela era convexa, para coletar e arremessar as chamadas "cargos", além de carregar um “hatch panel”, cuja função era manter as cargos na estrutura que representava um foguete.',
            'robo_foto' => 'robo_fotos/WaCW8MJ8n5OF2CeWF2rBbIaiCJ44y4DtPC0O1oM1.jpeg',
            'banner' => '',
            'Ano' => '2019',
        ]);
        DB::table('regionals')->insert([
            'temporada_id' => 2,
            'nome' => 'Arkansas Rock City Regional',
            'local' => 'Little Rock, Arkansas',
            'data' => '6 a 9 de março',
            'classificacao' => '30º lugar',
        ]);
        DB::table('regionals')->insert([
            'temporada_id' => 2,
            'nome' => 'Rocket City Regional',
            'local' => 'Huntsville, Alabama',
            'data' => '13 a 16 de março',
            'classificacao' => '19º lugar',
            'premios' => 'Gracious Professionalism',
        ]);        
        
        //2018
        DB::table('temporadas')->insert([
            'nome' => 'Power Up',
            'video_url' => 'https://www.youtube.com/embed/HZbdwYiCY74',
            'descricao' => 'Descricao aqui',
            'robo_desc' => 'O BS-02 foi criado para o desafio “Power Up”. Continha um conjunto de engrenagens que faziam o elevador atingir até 3m de altura, além de depositar as chamadas Power Cubs na balança ou para o jogador humano.',
            'robo_foto' => 'robo_fotos/WaCW8MJ8n5OF2CeWF2rBbIaiCJ44y4DtPC0O1oM1.jpeg',
            'banner' => '',
            'Ano' => '2018',
        ]);       
        DB::table('regionals')->insert([
            'temporada_id' => 3,
            'nome' => 'Orlando regional',
            'local' => 'Orlando, Flórida',
            'data' => '7 a 10 de março',
            'classificacao' => '44° lugar.',
        ]);
        DB::table('regionals')->insert([
            'temporada_id' => 3,
            'nome' => 'Rocket City Regional',
            'local' => 'Huntsville, Alabama',
            'data' => '14 a 17 de março',
            'classificacao' => '23º lugar',
            'premios' => 'Woodie Flowers Finalist (Ricardo Iamamoto)',
        ]);

        //2017
        DB::table('temporadas')->insert([
            'nome' => 'Steamworks',
            'video_url' => 'https://www.youtube.com/embed/EMiNmJW7enI',
            'descricao' => 'Descrição Aqui viu',
            'robo_desc' => 'Nosso primeiro robô, o BS-01, criado para o desafio “Steamworks”. Atualmente é utilizado em testes de software, aprendizado para novatos de eletrônica e programação, além de treinamento de pilotos durante a temporada.',
            'robo_foto' => 'robo_fotos/WaCW8MJ8n5OF2CeWF2rBbIaiCJ44y4DtPC0O1oM1.jpeg',
            'banner' => '',
            'Ano' => '2017',
        ]);
        DB::table('regionals')->insert([
            'temporada_id' => 4,
            'nome' => 'West Palm Beach Regional',
            'local' => 'West Palm Beach, Flórida',
            'data' => '1 a 4 de março',
            'classificacao' => '25º lugar',
            'premios' => 'Rookie All Star e Regional Finalists',
        ]);
        DB::table('regionals')->insert([
            'temporada_id' => 4,
            'nome' => 'Galileo Division (Campeonato Mundial)',
            'local' => 'Houston, Texas',
            'data' => '19 a 22 de Abril de, 2017',
            'classificacao' => '45° lugar',
        ]);
    }
}
