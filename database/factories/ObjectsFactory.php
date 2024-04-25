<?php

namespace Database\Factories;

use App\Models\Objects;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjectsFactory extends Factory
{
    protected Objects $objects;

    public function definition(): array
    {
        $object = [
            'isqueiro', 'chave', 'anéis', 'brincos', 'pulseira', 'relógio de pulso', 'colar', 'pendrive', 'cartões', 'caneta',
            'lápis', 'borracha', 'fita adesiva', 'clips', 'papel', 'post-it', 'fósforos', 'carregador de celular', 'fones de ouvido',
            'moedas', 'carteira', 'óculos de sol', 'chaves de fenda', 'ferramentas pequenas', 'joias', 'medicamentos', 'grampos',
            'alicates', 'fichas', 'elásticos', 'selos', 'agendas', 'pilhas', 'isopor', 'jogos de cartas', 'baralho', 'dados',
            'agulhas', 'linhas', 'fivelas', 'botões', 'pins', 'CDs', 'DVDs', 'fios', 'adaptadores', 'baterias', 'lentes de contato'
        ];

        return [
            'object_name' => $this->faker->randomElement($object),
            'quantity' => $this->faker->numberBetween(1, 10),
            'container_type' => $this->faker->randomElement([
                'Caixa',
                'Gaveta',
                'Armário',
                'Estante',
                'Baú',
                'Mala',
                'Mochila',
            ]),
            'container_room' => $this->faker->randomElement([
                'Sala',
                'Cozinha',
                'Banheiro',
                'Quarto',
                'Sacada',
                'Entrada',
                'Closet',
            ]),
            'object_tag' => $this->faker->word(),
            'user_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}
