<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('provincias')->insert([
            ['id' => 1, 'cod' => 'Esm', 'nombre' => 'Esmeraldas'],
            ['id' => 2, 'cod' => 'Man', 'nombre' => 'Manabí'],
            ['id' => 4, 'cod' => 'StaE', 'nombre' => 'Santa Elenta'],
            ['id' => 5, 'cod' => 'Gyas', 'nombre' => 'Guayas'],
            ['id' => 6, 'cod' => 'EOro', 'nombre' => 'El Oro'],
            ['id' => 7, 'cod' => 'StoDom', 'nombre' => 'Santo domingo de los Tsáchilas'],
            ['id' => 8, 'cod' => 'LRios', 'nombre' => 'Los Rios'],
            ['id' => 9, 'cod' => 'Carch', 'nombre' => 'Charchi'],
            ['id' => 11, 'cod' => 'Imb', 'nombre' => 'Imbabura'],
        ]);

        DB::table('formuser')->insert([
            [
                'id' => 6,
                'nombre' => 'David Jiménez',
                'cedula' => '1726362641',
                'telefono' => '0994833776',
                'sexo' => 'M',
                'fecha_nacimiento' => '1999-08-12',
                'direccion' => 'La Roldos',
                'provincia_id' => 2
            ],
            [
                'id' => 7,
                'nombre' => 'Juan Sancho',
                'cedula' => '1792582556',
                'telefono' => '0995873729',
                'sexo' => 'M',
                'fecha_nacimiento' => '2000-05-23',
                'direccion' => 'Loja suelta',
                'provincia_id' => 4
            ],
            [
                'id' => 8,
                'nombre' => 'Juan Lozano',
                'cedula' => '1728945678',
                'telefono' => '096454946',
                'sexo' => 'M',
                'fecha_nacimiento' => '1998-04-27',
                'direccion' => 'La espe',
                'provincia_id' => 4
            ],
            [
                'id' => 9,
                'nombre' => 'Esperanza',
                'cedula' => '1734287953',
                'telefono' => '0997833732',
                'sexo' => 'F',
                'fecha_nacimiento' => '1997-03-27',
                'direccion' => 'Universidad Central',
                'provincia_id' => 2
            ]
        ]);
    }
}
