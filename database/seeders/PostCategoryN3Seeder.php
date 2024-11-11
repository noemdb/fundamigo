<?php

namespace Database\Seeders;

use App\Models\app\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoryN3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el primer post
        Post::create([
            'user_id' => 1, // Cambia esto según el ID de un usuario existente
            'category_id' => 3, // Modernización de Instalaciones Deportivas
            'title' => 'Mejoras en el Estadio de Beisbol',
            'description' => 'Actualizaciones y mejoras en el estadio local.',
            'body' => '<h2>Mejoras en el Estadio de Beisbol</h2>
                        <p>Estamos emocionados de anunciar las recientes mejoras en el Estadio de Beisbol, que se han realizado para proporcionar una mejor experiencia a los aficionados y deportistas. Las renovaciones incluyen nuevas gradas, un sistema de iluminación LED y un campo de juego de última generación.</p>
                        <p>Estas mejoras no solo aumentan la capacidad del estadio, sino que también garantizan la seguridad y comodidad de todos los asistentes. Con la implementación de tecnología moderna, esperamos que el estadio se convierta en un centro de atracción para eventos deportivos y culturales en la región.</p>
                        <p>Invitamos a toda la comunidad a asistir a la inauguración oficial, donde se presentarán las nuevas instalaciones y se realizarán diversas actividades para toda la familia.</p>',
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'order' => 1,
            'weighting' => 10,
            'color_class' => 'primary',
            'status_active' => true,
            'status_published' => true,
            'status_projects' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-stadium" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8zM4 8a4 4 0 1 0 8 0A4 4 0 0 0 4 8z"/></svg>',
        ]);

        // Crear el segundo post
        Post::create([
            'user_id' => 1, // Cambia esto según el ID de un usuario existente
            'category_id' => 3, // Modernización de Instalaciones Deportivas
            'title' => 'Nuevas Canchas de Tenis',
            'description' => 'Construcción de canchas de tenis de última generación.',
            'body' => '<h2>Nuevas Canchas de Tenis</h2>
                        <p>La construcción de nuevas canchas de tenis está en marcha y se espera que estén listas para la próxima temporada. Estas canchas contarán con superficies de calidad profesional y estarán equipadas con iluminación para permitir el juego nocturno.</p>
                        <p>El proyecto tiene como objetivo fomentar el interés en el tenis entre los jóvenes y proporcionar una instalación adecuada para entrenamientos y competiciones. También se organizarán torneos locales para incentivar la participación de la comunidad.</p>
                        <p>Con estas nuevas instalaciones, buscamos no solo mejorar el deporte en nuestra localidad, sino también promover un estilo de vida activo y saludable entre los ciudadanos.</p>',
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'order' => 2,
            'weighting' => 9,
            'color_class' => 'success',
            'status_active' => true,
            'status_published' => true,
            'status_projects' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-tennis" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4 8a4 4 0 1 1 8 0A4 4 0 0 1 4 8zM6.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm2.5 2a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>',
        ]);

        // Crear el tercer post
        Post::create([
            'user_id' => 1, // Cambia esto según el ID de un usuario existente
            'category_id' => 3, // Modernización de Instalaciones Deportivas
            'title' => 'Rehabilitación de la Piscina principal',
            'description' => 'Renovación y modernización de la piscina local.',
            'body' => '<h2>Rehabilitación de la Piscina principal</h2>
                        <p>La piscina principal está siendo sometida a un proceso de rehabilitación que incluye la renovación de sus instalaciones y la mejora de su sistema de filtración. Este proyecto busca garantizar la seguridad y comodidad de los usuarios.</p>
                        <p>Con la modernización de la piscina, se espera aumentar la participación en actividades acuáticas y clases de natación, además de ofrecer un espacio seguro para el disfrute de la comunidad.</p>
                        <p>La renovación incluirá también áreas de descanso y recreación, convirtiendo la piscina en un lugar ideal para disfrutar en familia durante los meses de calor.</p>',
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'order' => 3,
            'weighting' => 8,
            'color_class' => 'info',
            'status_active' => true,
            'status_published' => true,
            'status_projects' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-water" viewBox="0 0 16 16"><path d="M4.5 0a2.5 2.5 0 0 0-2.5 2.5C2 3.5 3.5 5 4.5 6.5c1-1.5 2.5-3 2.5-4.5A2.5 2.5 0 0 0 4.5 0zM4 8c-.5 0-1 .5-1 1 0 1.5 2 3 4 3s4-1.5 4-3c0-.5-.5-1-1-1H4zm0 2c-1 0-2-1-2-2s1-2 2-2h8c1 0 2 1 2 2s-1 2-2 2H4z"/></svg>',
        ]);

        // Cuarto post
        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Instalación de Pistas de Atletismo',
            'description' => 'Construcción de nuevas pistas para entrenamiento.',
            'body' => '<h2>Instalación de Pistas de Atletismo</h2>
                        <p>Nuestra comunidad está dando un gran paso hacia el fomento de la actividad física con la construcción de nuevas pistas de atletismo. Estas pistas estarán diseñadas para cumplir con estándares profesionales, permitiendo que atletas de todos los niveles entrenen y compitan en un ambiente seguro.</p>',
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'order' => 4,
            'weighting' => 7,
            'color_class' => 'warning',
            'status_active' => true,
            'status_published' => true,
            'status_projects' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-track" viewBox="0 0 16 16"><path d="M1 1h1v1H1V1zm1 4h1v1H2V5zm0 4h1v1H2V9zm0 4h1v1H2v-1zm0-8h1v1H2V5zm0 0h1v1H2V5zm0 0h1v1H2V5zm0 0h1v1H2V5zm2-4h1v1H4V1zm0 4h1v1H4V5zm0 4h1v1H4V9zm0 4h1v1H4v-1zm0-8h1v1H4V5zm0 0h1v1H4V5zm0 0h1v1H4V5zm0 0h1v1H4V5zm2-4h1v1H6V1zm0 4h1v1H6V5zm0 4h1v1H6V9zm0 4h1v1H6v-1zm0-8h1v1H6V5zm0 0h1v1H6V5zm0 0h1v1H6V5zm0 0h1v1H6V5zm2-4h1v1H8V1zm0 4h1v1H8V5zm0 4h1v1H8V9zm0 4h1v1H8v-1zm0-8h1v1H8V5zm0 0h1v1H8V5zm0 0h1v1H8V5zm0 0h1v1H8V5zm2-4h1v1H10V1zm0 4h1v1H10V5zm0 4h1v1H10V9zm0 4h1v1H10v-1zm0-8h1v1H10V5zm0 0h1v1H10V5zm0 0h1v1H10V5zm0 0h1v1H10V5z"/></svg>',
        ]);

        // Quinto post
        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Renovación del Gimnasio techado',
            'description' => 'Actualización de las instalaciones del gimnasio.',
            'body' => '<h2>Renovación del Gimnasio techado</h2>
                        <p>El gimnasio techado está en proceso de renovación, con la incorporación de equipos modernos y espacios rediseñados para el entrenamiento. Estas mejoras están destinadas a hacer del gimnasio un lugar más accesible y atractivo para todos los usuarios.</p>',
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'order' => 5,
            'weighting' => 6,
            'color_class' => 'negative',
            'status_active' => true,
            'status_published' => true,
            'status_projects' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gym" viewBox="0 0 16 16"><path d="M4 0a2 2 0 0 1 2 2v1h4V2a2 2 0 0 1 2 2v1h1a1 1 0 0 1 1 1v11H0V4a1 1 0 0 1 1-1h1V2a2 2 0 0 1 2-2zm2 1a1 1 0 0 0-1 1v1h4V2a1 1 0 0 0-1-1H6zm6 1v1h1V2a1 1 0 0 0-1 1zm-2 1H4v10h8V4z"/></svg>',
        ]);

        // Sexto post
        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Construcción de un Centro Deportivo',
            'description' => 'Nuevo centro para diversas actividades deportivas.',
            'body' => '<h2>Construcción de un Centro Deportivo</h2>
                        <p>Estamos felices de anunciar la construcción de un nuevo centro deportivo que ofrecerá una variedad de instalaciones, incluyendo canchas de baloncesto, voleibol y áreas para actividades al aire libre. Este centro estará diseñado para ser un espacio multifuncional, accesible para toda la comunidad.</p>',
            "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
            'order' => 6,
            'weighting' => 5,
            'color_class' => 'gray',
            'status_active' => true,
            'status_published' => true,
            'status_projects' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16"><path d="M3 0h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm1 1v14h10V1H4zm1 2h8v1H5V3zm0 2h8v1H5V5zm0 2h8v1H5V7zm0 2h8v1H5V9zm0 2h8v1H5v-1z"/></svg>',
        ]);
    }
}
