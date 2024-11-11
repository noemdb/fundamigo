<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryLanding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Comunidad Amigoniana', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 1, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
            ['name' => 'Programas Educativos', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 2, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
            ['name' => 'Proyectos de Infraestructura', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 3, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
            ['name' => 'Eventos y Actividades', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 4, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
            ['name' => 'Oportunidades de Voluntariado', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 5, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
            ['name' => 'Becas y Ayuda Social', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 6, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
            ['name' => 'Noticias y Actualizaciones', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 7, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
            ['name' => 'Desarrollo Profesional', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 8, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
            ['name' => 'Colaboraciones y Networking', 'descriptions' => '', 'color_class' => 'secondary', 'order' => 9, 'status_navabar' => false, 'status_aside' => true, 'status_active' => true, 'status_published' => true],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}

/*

Comunidad Amigoniana
Programas Educativos
Proyectos de Infraestructura
Eventos y Actividades
Oportunidades de Voluntariado
Becas y Ayuda Social
Noticias y Actualizaciones
Desarrollo Profesional
Colaboraciones y Networking

*/