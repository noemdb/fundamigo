<?php

namespace Database\Seeders;

use App\Models\app\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoryN2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el primer post
        Post::create([
            'user_id' => 1, // Cambia esto según el ID de un usuario existente
            'category_id' => 2, // Programas Educativos
            'title' => 'Innovación en la Educación',
            'description' => 'Explorando nuevas metodologías de enseñanza.',
            'body' => '<h2>Innovación en la Educación</h2>
                    <p>En nuestro compromiso por ofrecer una educación de calidad, hemos implementado diversas metodologías innovadoras que buscan mejorar el aprendizaje de nuestros estudiantes. Desde el uso de tecnología educativa hasta enfoques participativos, cada programa está diseñado para adaptarse a las necesidades de nuestros alumnos.</p>
                    <p>Este año, hemos introducido herramientas digitales que facilitan el acceso a materiales de estudio y promueven el aprendizaje colaborativo. Los profesores están capacitados para utilizar estas herramientas de manera efectiva, creando un ambiente de aprendizaje dinámico y enriquecedor.</p>
                    <p>Además, fomentamos la creatividad y el pensamiento crítico a través de proyectos interdisciplinarios que involucran a los estudiantes en la solución de problemas reales. Creemos que la educación debe ser un proceso activo y participativo, donde cada alumno pueda explorar sus intereses y desarrollar sus habilidades.</p>',
            'order' => 1,
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'weighting' => 10,
            'color_class' => 'primary',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16"><path d="M2 6a6 6 0 1 0 12 0 6 6 0 0 0-12 0zM8 1a5 5 0 0 1 5 5c0 1.5-.5 3-1.5 4.5-.5.7-1 1.5-1.5 2h-1c-.5-.5-1-1.3-1.5-2C6.5 9 6 7.5 6 6a5 5 0 0 1 2-5zM8 15a1 1 0 1 0 2 0H8z"/></svg>',
            'status_featured' => true,
            'status_active' => true,
            'status_published' => true,
        ]);

        // Crear el segundo post
        Post::create([
            'user_id' => 1, // Cambia esto según el ID de un usuario existente
            'category_id' => 2, // Programas Educativos
            'title' => 'Programa de Mentoría Estudiantil',
            'description' => 'Impulsando el crecimiento personal y académico.',
            'body' => '<h2>Programa de Mentoría Estudiantil</h2>
                    <p>Estamos orgullosos de presentar nuestro Programa de Mentoría Estudiantil, que tiene como objetivo apoyar a los estudiantes en su desarrollo académico y personal. Este programa empareja a alumnos con mentores que son exalumnos destacados y profesionales en diversas áreas.</p>
                    <p>Los mentores brindan orientación, comparten sus experiencias y ayudan a los estudiantes a establecer metas claras. A través de sesiones regulares, los alumnos reciben asesoría en temas académicos, así como en habilidades blandas que son esenciales para su futuro profesional.</p>
                    <p>Además, organizamos talleres y actividades grupales que fomentan la colaboración y el intercambio de ideas. Este enfoque no solo fortalece el aprendizaje, sino que también crea una comunidad sólida y de apoyo entre estudiantes y mentores, promoviendo un ambiente de crecimiento y superación.</p>',
            'order' => 2,
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'weighting' => 9,
            'color_class' => 'secondary',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16"><path d="M13 8a4 4 0 0 1-4 4H5a5 5 0 1 0 0 10h8a5 5 0 0 0 0-10h-1a4 4 0 0 1 1-8h2a4 4 0 0 1 4 4v1a4 4 0 0 1-2 3.464V12h-1a5 5 0 0 0-5 5h-1a5 5 0 0 0 0-10h2a4 4 0 0 1 4 4z"/><path d="M10.854 6.646a.5.5 0 0 1 .146.354v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .854-.354z"/><path d="M10.646 5.646a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.646 1.646-1.646a.5.5 0 0 1 .708 0z"/></svg>',
            'status_featured' => true,
            'status_active' => true,
            'status_published' => true,
        ]);

        // Crear el tercer post
        Post::create([
            'user_id' => 1, // Cambia esto según el ID de un usuario existente
            'category_id' => 2, // Programas Educativos
            'title' => 'Talleres de Capacitación',
            'description' => 'Desarrollando habilidades prácticas en los estudiantes.',
            'body' => '<h2>Talleres de Capacitación</h2>
                    <p>Ofrecemos una serie de talleres de capacitación diseñados para equipar a nuestros estudiantes con habilidades prácticas y conocimientos que son esenciales en el mundo laboral actual. Estos talleres son impartidos por expertos en diversas áreas, desde tecnología hasta arte y comunicación.</p>
                    <p>Durante cada taller, los estudiantes tienen la oportunidad de participar en actividades prácticas que fomentan el aprendizaje activo. Además, se les anima a trabajar en equipo, lo que promueve la colaboración y el intercambio de ideas entre compañeros.</p>
                    <p>Al finalizar cada taller, se proporciona un certificado de participación, lo que añade valor a su currículum y les brinda una ventaja competitiva en el futuro. ¡Inscríbete en nuestro próximo taller y da un paso hacia tu desarrollo personal y profesional!</p>',
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'color_class' => 'info',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16"><path d="M.102 1.643a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H1.643l2.854 2.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.707 0l-1.5-1.5a.5.5 0 0 1 0-.707L1.643 6.5H.5a.5.5 0 0 1-.5-.5v-4zM8.5 1a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H6.5v1h1.5a.5.5 0 0 1 .5.5v1h-2v-1a.5.5 0 0 1 .5-.5H8v-1H7a.5.5 0 0 1-.5-.5V1.5a.5.5 0 0 1 .5-.5h1zM14.5 9a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h4z"/></svg>',
            'order' => 3,
            'weighting' => 8,
            'status_featured' => true,
            'status_active' => true,
            'status_published' => true,
        ]);

        // Crear el cuarto post
        Post::create([
            'user_id' => 1, // Cambia esto según el ID de un usuario existente
            'category_id' => 2, // Programas Educativos
            'title' => 'Feria de Ciencias',
            'description' => 'Promoviendo la curiosidad científica entre los jóvenes.',
            'body' => '<h2>Feria de Ciencias</h2>
                    <p>La Feria de Ciencias es un evento anual que organiza nuestra institución para fomentar la curiosidad científica y el pensamiento crítico entre nuestros estudiantes. Durante este evento, los alumnos tienen la oportunidad de presentar proyectos innovadores y experimentos que han desarrollado a lo largo del año.</p>
                    <p>Este año, la feria contará con la participación de invitados especiales, incluyendo científicos y educadores reconocidos, quienes ofrecerán charlas y talleres interactivos. Los estudiantes podrán aprender de expertos en el campo y recibir retroalimentación sobre sus proyectos.</p>
                    <p>La Feria de Ciencias no solo es una plataforma para mostrar el talento de nuestros estudiantes, sino que también promueve la investigación y el descubrimiento. ¡Te invitamos a que asistas y apoyes a nuestros jóvenes científicos!</p>',
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'color_class' => 'zinc',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-flask" viewBox="0 0 16 16"><path d="M3 0a1 1 0 0 1 1 1v1.618l.293.293A1 1 0 0 1 5 3h6a1 1 0 0 1 .707.293l.293-.293V1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1.618l-.293.293A1 1 0 0 1 13 3H3a1 1 0 0 1-.707-.293L2 1.618V1a1 1 0 0 1 1-1h1zm1 2h6v1H4V2zM2 4h12v1H2V4zm0 2h12v1H2V6zm0 2h12v1H2V8zm0 2h12v1H2v-1zm2 2h8v1H4v-1zM4 14h8v1H4v-1zM1 13h14v1H1v-1z"/></svg>',
            'order' => 4,
            'weighting' => 7,
            'status_featured' => true,
            'status_active' => true,
            'status_published' => true,
        ]);
    }
}
