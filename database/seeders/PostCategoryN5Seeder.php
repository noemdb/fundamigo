<?php

namespace Database\Seeders;

use App\Models\app\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoryN5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primer post: Deportista
        Post::create([
            'user_id' => 1,
            'category_id' => 6, // Asumiendo que 6 es el ID para Workers
            'title' => 'Deportista Destacado',
            'description' => 'Conoce a nuestro deportista destacado.',
            'body' => '<h2>Deportista Destacado</h2>
                       <p>[Nombre del Deportista] ha representado a nuestra fundación en múltiples competencias, destacándose por su dedicación y habilidades en [Deporte]. Su pasión por el deporte inspira a otros a superarse y alcanzar sus metas.</p>',
            "file_url" => "https://i.pravatar.cc/200", // Imagen aleatoria con relación 1:1
            'order' => 1,
            'weighting' => 10,
            'color_class' => 'primary',
            'status_active' => true,
            'status_published' => true,
            'status_workers' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-run" viewBox="0 0 16 16"><path d="M8 1a1 1 0 0 1 1 1v1h2V2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1h1a1 1 0 0 1 1 1v1h-1v1h-1V5h-1V4h-1V3H9v1H8V1zm2 5a1 1 0 1 1 0 2H5.5a1 1 0 0 1 0-2H10z"/><path d="M10 10v3a1 1 0 1 1-2 0v-3H4a1 1 0 0 1-1-1v-1h1v1h5v-1h1v1a1 1 0 0 1-1 1h-1z"/></svg>',
        ]);

        // Segundo post: Músico
        Post::create([
            'user_id' => 1,
            'category_id' => 6,
            'title' => 'Músico Talentoso',
            'description' => 'Destacada trayectoria musical.',
            'body' => '<h2>Músico Talentoso</h2>
                       <p>[Nombre del Músico] ha cautivado al público con su talento en [Instrumento/Estilo musical]. Su dedicación y creatividad han llevado a la fundación a organizar eventos musicales memorables que promueven la cultura y el arte.</p>',
            "file_url" => "https://i.pravatar.cc/200", // Imagen aleatoria con relación 1:1
            'order' => 2,
            'weighting' => 9,
            'color_class' => 'success',
            'status_active' => true,
            'status_published' => true,
            'status_workers' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-music-note" viewBox="0 0 16 16"><path d="M11 1a1 1 0 0 1 1 1v5.29A2 2 0 1 1 10 9V4H3a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1z"/></svg>',
        ]);

        // Tercer post: Ingeniero
        Post::create([
            'user_id' => 1,
            'category_id' => 6,
            'title' => 'Ingeniero Innovador',
            'description' => 'Contribuciones significativas en proyectos.',
            'body' => '<h2>Ingeniero Innovador</h2>
                       <p>[Nombre del Ingeniero] ha realizado aportes valiosos en nuestros proyectos de infraestructura. Su expertise en [Campo de ingeniería] garantiza la calidad y eficiencia en cada iniciativa que lleva a cabo.</p>',
            "file_url" => "https://i.pravatar.cc/200", // Imagen aleatoria con relación 1:1
            'order' => 3,
            'weighting' => 8,
            'color_class' => 'info',
            'status_active' => true,
            'status_published' => true,
            'status_workers' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16"><path d="M4.5 0a1 1 0 0 1 1 1v2h2V1a1 1 0 0 1 2 0v2h2a1 1 0 0 1 0 2h-2v2h2a1 1 0 0 1 0 2h-2v2h2a1 1 0 0 1 0 2h-2v2h-2v-2h-2v2H1a1 1 0 0 1 0-2h2v-2H1a1 1 0 0 1 0-2h2V5H1a1 1 0 0 1 0-2h2V1a1 1 0 0 1 1-1h2z"/></svg>',
        ]);

        // Cuarto post: Arquitecto
        Post::create([
            'user_id' => 1,
            'category_id' => 6,
            'title' => 'Arquitecto Visionario',
            'description' => 'Diseños creativos y funcionales.',
            'body' => '<h2>Arquitecto Visionario</h2>
                       <p>[Nombre del Arquitecto] ha diseñado espacios que combinan estética y funcionalidad. Su enfoque innovador en [Tipo de proyectos] ha transformado nuestra comunidad y mejorado la calidad de vida de sus habitantes.</p>',
            "file_url" => "https://i.pravatar.cc/200", // Imagen aleatoria con relación 1:1
            'order' => 4,
            'weighting' => 7,
            'color_class' => 'warning',
            'status_active' => true,
            'status_published' => true,
            'status_workers' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"><path d="M8 3.293l-6 6V15h4v-4h4v4h4v-5.707l-6-6zM2 7.293l6-6 6 6V15h-4v-4H6v4H2V7.293z"/></svg>',
        ]);

        // Quinto post: Bilingüe
        Post::create([
            'user_id' => 1,
            'category_id' => 6,
            'title' => 'Trabajador Bilingüe',
            'description' => 'Facilitador de comunicación internacional.',
            'body' => '<h2>Trabajador Bilingüe</h2>
                       <p>[Nombre del Bilingüe] ha sido fundamental en la comunicación con nuestros socios internacionales. Su fluidez en [Idiomas] permite que nuestras iniciativas trasciendan fronteras y enriquezcan nuestra fundación.</p>',
            "file_url" => "https://i.pravatar.cc/200", // Imagen aleatoria con relación 1:1
            'order' => 5,
            'weighting' => 6,
            'color_class' => 'negative',
            'status_active' => true,
            'status_published' => true,
            'status_workers' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm1 1.5h-.5V3h.5V1.5zm-2 0H7V3h.5V1.5zM2 4h12v1H2V4zm0 2h12v1H2V6zm0 2h12v1H2V8zm0 2h12v1H2v-1zm0 2h12v1H2v-1z"/></svg>',
        ]);

        // Sexto post: Empresario
        Post::create([
            'user_id' => 1,
            'category_id' => 6,
            'title' => 'Empresario Exitoso',
            'description' => 'Líder en el desarrollo de negocios.',
            'body' => '<h2>Empresario Exitoso</h2>
                       <p>[Nombre del Empresario] ha contribuido significativamente al crecimiento económico de nuestra fundación. Su visión y liderazgo en [Sector] han impulsado proyectos que benefician a toda la comunidad.</p>',
            "file_url" => "https://i.pravatar.cc/200", // Imagen aleatoria con relación 1:1
            'order' => 6,
            'weighting' => 5,
            'color_class' => 'neutral',
            'status_active' => true,
            'status_published' => true,
            'status_workers' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16"><path d="M9 0H7a2 2 0 0 0-2 2v1H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-3V2a2 2 0 0 0-2-2zm0 2a1 1 0 0 1 1 1v1H6V3a1 1 0 0 1 1-1h2zm-3 3h4v1H6V6zm0 2h4v1H6V8zm0 2h4v1H6v-1zm-4 4h12V5H2v10z"/></svg>',
        ]);
    }
}
