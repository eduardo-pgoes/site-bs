<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'titulo' => 'Nossa experiência na Off-Season Brasil!',
            'conteudo' => 'Oi! Eu sou um post do blog.',
            'resenha' => 'Oi, clique em mim para saber mais',
            'url' => 'offseason-2019',
            'post_foto' => 'post_fotos/offseason.jpg',
        ]);

        DB::table('posts')->insert([
            'titulo' => 'Nossa experiência na Rocket City Regional!',
            'conteudo' => 'Oi! Eu sou um post do blog.',
            'resenha' => 'Oi, clique em mim para saber mais',
            'url' => 'rocketcity',
            'post_foto' => 'post_fotos/offseason.jpg',
        ]);

    }
}
