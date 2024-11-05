<?php

namespace Database\Seeders;

use App\Models\app\Post\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Tecnología',
                'descriptions' => 'Noticias y artículos sobre tecnología avanzada.',
                'color_class' => 'primary',
                'order' => 1,
                'status_navabar' => true,
                'status_aside' => false,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Salud',
                'descriptions' => 'Consejos y noticias del mundo de la salud.',
                'color_class' => 'green',
                'order' => 2,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Ciencia',
                'descriptions' => 'Exploración de descubrimientos y avances científicos.',
                'color_class' => 'blue',
                'order' => 3,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Educación',
                'descriptions' => 'Recursos y artículos educativos.',
                'color_class' => 'yellow',
                'order' => 4,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Economía',
                'descriptions' => 'Análisis y noticias sobre economía y finanzas.',
                'color_class' => 'amber',
                'order' => 5,
                'status_navabar' => true,
                'status_aside' => false,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Deportes',
                'descriptions' => 'Noticias deportivas y actualizaciones de eventos.',
                'color_class' => 'red',
                'order' => 6,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Arte y Cultura',
                'descriptions' => 'Explora el arte y la cultura global.',
                'color_class' => 'purple',
                'order' => 7,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Medio Ambiente',
                'descriptions' => 'Información sobre la protección ambiental.',
                'color_class' => 'emerald',
                'order' => 8,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Historia',
                'descriptions' => 'Reflexiones y datos históricos.',
                'color_class' => 'zinc',
                'order' => 9,
                'status_navabar' => true,
                'status_aside' => false,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Viajes',
                'descriptions' => 'Guías y consejos para el viajero.',
                'color_class' => 'sky',
                'order' => 10,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
