<?php

namespace Database\Seeders;

use App\Models\app\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoryN4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primer post: Presidente
        Post::create([
            'user_id' => 1,
            'category_id' => 5, // Asumiendo que 5 es el ID para Autoridad
            'title' => 'Presidente de la Fundación',
            'description' => 'Conoce a nuestro presidente y su visión.',
            'body' => '<h2>Presidente de la Fundación</h2>
                        <p>El presidente de nuestra fundación, [Nombre del Presidente], ha estado al frente desde [Año]. Su compromiso con la comunidad y su liderazgo han sido fundamentales para el crecimiento y desarrollo de nuestros proyectos. Con una sólida trayectoria en [Campo de experiencia], [Nombre] continúa inspirando a nuestro equipo y a todos los que se benefician de nuestras iniciativas.</p>',
            "file_url" => "https://i.pravatar.cc/400", // Imagen aleatoria con relación 1:1
            'order' => 1,
            'weighting' => 10,
            'color_class' => 'primary',
            'status_active' => true,
            'status_published' => true,
            'status_teams' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M3 0a2 2 0 0 1 2 2v1H1V2a2 2 0 0 1 2-2zm10 2v1h-4V2a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2zM1 4h14v1H1V4zm0 2h14v1H1V6zm0 2h14v1H1V8zm0 2h14v1H1v-1zm0 2h14v1H1v-1z"/></svg>',
        ]);

        // Segundo post: Secretario
        Post::create([
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Secretario de la Fundación',
            'description' => 'Conoce a nuestro secretario y su papel crucial.',
            'body' => '<h2>Secretario de la Fundación</h2>
                        <p>El secretario, [Nombre del Secretario], es responsable de garantizar que todas las operaciones se realicen de manera eficiente y transparente. Con una amplia experiencia en [Campo de experiencia], [Nombre] juega un papel vital en la organización de nuestras actividades y en la comunicación con nuestros miembros y socios.</p>',
            "file_url" => "https://i.pravatar.cc/400", // Imagen aleatoria con relación 1:1
            'order' => 2,
            'weighting' => 9,
            'color_class' => 'success',
            'status_active' => true,
            'status_published' => true,
            'status_teams' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-1.293 1.293L12.439 1.707 12.146.293zM9.5 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1h-3V3zm4 1h1a1 1 0 0 1 1 1v1h-5V5h1V4zM1 4h2v1H1V4zm0 2h2v1H1V6zm0 2h2v1H1V8zm0 2h2v1H1v-1zm0 2h2v1H1v-1zM1 0h12v2H1V0z"/></svg>',
        ]);

        // Tercer post: Administrador
        Post::create([
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Administrador de la Fundación',
            'description' => 'Conoce a nuestro administrador y su gestión.',
            'body' => '<h2>Administrador de la Fundación</h2>
                        <p>El administrador, [Nombre del Administrador], es el encargado de supervisar las operaciones diarias de la fundación. Su experiencia en [Campo de experiencia] le permite manejar de manera efectiva los recursos y asegurar que se cumplan nuestros objetivos organizacionales.</p>',
            "file_url" => "https://i.pravatar.cc/400", // Imagen aleatoria con relación 1:1
            'order' => 3,
            'weighting' => 8,
            'color_class' => 'info',
            'status_active' => true,
            'status_published' => true,
            'status_teams' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"><path d="M8 1a1 1 0 0 1 1 1v1.586a4.978 4.978 0 0 1 2.586 1.414l1.414-1.414a1 1 0 0 1 1.414 1.414l-1.414 1.414A4.978 4.978 0 0 1 12 8h1a1 1 0 0 1 0 2h-1a4.978 4.978 0 0 1-1.414 2.586l1.414 1.414a1 1 0 0 1-1.414 1.414l-1.414-1.414A4.978 4.978 0 0 1 8 12.586V14a1 1 0 0 1-2 0v-1.586a4.978 4.978 0 0 1-2.586-1.414L1.586 12a1 1 0 1 1-1.414-1.414l1.414-1.414A4.978 4.978 0 0 1 4 8H3a1 1 0 0 1 0-2h1a4.978 4.978 0 0 1 1.414-2.586L2.586 1.586a1 1 0 0 1 1.414-1.414l1.414 1.414A4.978 4.978 0 0 1 8 1z"/></svg>',
        ]);
    }
}
