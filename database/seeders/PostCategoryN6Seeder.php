<?php

namespace Database\Seeders;

use App\Models\app\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoryN6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primer testimonio
        Post::create([
            'user_id' => 1,
            'category_id' => 7, // Asumiendo que 7 es el ID para Testimonials
            'title' => 'Testimonio de Juan Pérez',
            'description' => 'Una experiencia transformadora con la fundación.',
            'body' => '<h2>Juan Pérez</h2>
                        <p>"Gracias a la fundación, he podido acceder a recursos y apoyo que han cambiado mi vida. Los programas que ofrecen son realmente efectivos y se nota que trabajan con pasión por la comunidad."</p>',
            "file_url" => "https://i.pravatar.cc/400", // Imagen aleatoria con relación 1:1
            'order' => 1,
            'weighting' => 10,
            'color_class' => 'primary',
            'status_active' => true,
            'status_published' => true,
            'status_testimonials' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16"><path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm2 0v10h12V3H2z"/></svg>',
        ]);

        // Segundo testimonio
        Post::create([
            'user_id' => 1,
            'category_id' => 7,
            'title' => 'Testimonio de María López',
            'description' => 'Un impacto positivo en mi comunidad.',
            'body' => '<h2>María López</h2>
                        <p>"La fundación ha sido un pilar en nuestra comunidad. Sus iniciativas no solo ayudan a las personas, sino que también crean un ambiente de esperanza y unidad. Estoy eternamente agradecida por su trabajo."</p>',
            "file_url" => "https://i.pravatar.cc/400", // Imagen aleatoria con relación 1:1
            'order' => 2,
            'weighting' => 9,
            'color_class' => 'success',
            'status_active' => true,
            'status_published' => true,
            'status_testimonials' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16"><path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm2 0v10h12V3H2z"/></svg>',
        ]);

        // Tercer testimonio
        Post::create([
            'user_id' => 1,
            'category_id' => 7,
            'title' => 'Testimonio de Carlos Martínez',
            'description' => 'Un apoyo invaluable.',
            'body' => '<h2>Carlos Martínez</h2>
                        <p>"La fundación me brindó las herramientas necesarias para avanzar en mi carrera. Su apoyo y orientación han sido invaluables, y estoy muy agradecido por todo lo que han hecho por mí y por otros en situaciones similares."</p>',
            "file_url" => "https://i.pravatar.cc/400", // Imagen aleatoria con relación 1:1
            'order' => 3,
            'weighting' => 8,
            'color_class' => 'info',
            'status_active' => true,
            'status_published' => true,
            'status_testimonials' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16"><path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm2 0v10h12V3H2z"/></svg>',
        ]);
    }
}
