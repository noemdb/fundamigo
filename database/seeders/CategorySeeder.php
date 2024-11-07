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
            // Secciones de Navegación y Presentación
            [
                'name' => 'Header',
                'descriptions' => 'Cabecera principal y navegación del sitio',
                'color_class' => 'primary',
                'order' => 1,
                'status_navabar' => true,
                'status_aside' => false,
                'status_active' => true,
                'status_published' => false,
            ],
            [
                'name' => 'Hero',
                'descriptions' => 'Sección principal con mensaje destacado y llamada a la acción',
                'color_class' => 'blue',
                'order' => 2,
                'status_navabar' => false,
                'status_aside' => false,
                'status_active' => true,
                'status_published' => true,
            ],

            // Secciones de Contenido Principal
            [
                'name' => 'Posts',
                'descriptions' => 'Publicaciones y artículos destacados',
                'color_class' => 'emerald',
                'order' => 3,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Featured',
                'descriptions' => 'Contenido y elementos destacados',
                'color_class' => 'purple',
                'order' => 4,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Objectives',
                'descriptions' => 'Objetivos y metas de la organización',
                'color_class' => 'cyan',
                'order' => 5,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],

            // Secciones de Proyectos y Servicios
            [
                'name' => 'Projects',
                'descriptions' => 'Proyectos realizados y en curso',
                'color_class' => 'indigo',
                'order' => 6,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Services',
                'descriptions' => 'Servicios ofrecidos por la organización',
                'color_class' => 'teal',
                'order' => 7,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],

            // Secciones de Social Proof
            [
                'name' => 'Authority',
                'descriptions' => 'Credenciales y autoridad en el sector',
                'color_class' => 'amber',
                'order' => 8,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Testimonials',
                'descriptions' => 'Testimonios y opiniones de clientes',
                'color_class' => 'orange',
                'order' => 9,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Alliances',
                'descriptions' => 'Alianzas estratégicas y partners',
                'color_class' => 'violet',
                'order' => 10,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],

            // Secciones de Llamada a la Acción y Contacto
            [
                'name' => 'CTA',
                'descriptions' => 'Llamadas a la acción principales',
                'color_class' => 'red',
                'order' => 11,
                'status_navabar' => false,
                'status_aside' => false,
                'status_active' => true,
                'status_published' => true,
            ],
            [
                'name' => 'Contacts',
                'descriptions' => 'Información de contacto y formularios',
                'color_class' => 'green',
                'order' => 12,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => false,
            ],

            // Secciones Sociales y de Usuario
            [
                'name' => 'Socials',
                'descriptions' => 'Enlaces a redes sociales',
                'color_class' => 'sky',
                'order' => 13,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => false,
            ],
            [
                'name' => 'Login',
                'descriptions' => 'Acceso y registro de usuarios',
                'color_class' => 'slate',
                'order' => 14,
                'status_navabar' => true,
                'status_aside' => false,
                'status_active' => true,
                'status_published' => false,
            ],

            // Secciones Multimedia y Visuales
            [
                'name' => 'Gallery',
                'descriptions' => 'Galería de imágenes y multimedia',
                'color_class' => 'fuchsia',
                'order' => 15,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => true,
            ],

            // Secciones de Equipo y Progreso
            [
                'name' => 'Workers',
                'descriptions' => 'Equipo de trabajo y colaboradores',
                'color_class' => 'pink',
                'order' => 16,
                'status_navabar' => true,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => false,
            ],
            [
                'name' => 'Timeline',
                'descriptions' => 'Línea de tiempo y eventos importantes',
                'color_class' => 'yellow',
                'order' => 17,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => false,
            ],
            [
                'name' => 'Graphs',
                'descriptions' => 'Gráficos y visualización de datos',
                'color_class' => 'rose',
                'order' => 18,
                'status_navabar' => false,
                'status_aside' => true,
                'status_active' => true,
                'status_published' => false,
            ],

            // Contenedor Principal
            [
                'name' => 'Container',
                'descriptions' => 'Contenedor principal de contenido dinámico',
                'color_class' => 'neutral',
                'order' => 19,
                'status_navabar' => false,
                'status_aside' => false,
                'status_active' => true,
                'status_published' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
