<?php

namespace Database\Seeders;

use App\Models\app\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoryN7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primer post: Alianza con la Universidad Local
        Post::create([
            'user_id' => 1,
            'category_id' => 8, // Asumiendo que 8 es el ID para Alliances
            'title' => 'Alianza con la Universidad Local',
            'description' => 'Fortaleciendo la educación a través de la colaboración.',
            'body' => '<h2>Alianza con la Universidad Local</h2>
                       <p>Nuestra fundación se enorgullece de mantener una estrecha colaboración con la Universidad Local. A través de esta alianza estratégica, hemos podido ofrecer a nuestros estudiantes acceso a recursos educativos de vanguardia, prácticas profesionales y oportunidades de desarrollo que han enriquecido su formación académica.</p>
                       <p>La cooperación entre ambas instituciones ha demostrado ser invaluable para la comunidad, al brindar a los jóvenes un futuro más prometedor y contribuir al crecimiento y la prosperidad de nuestra región.</p>',
            'file_url' => 'https://i.pravatar.cc/400',
            'order' => 1,
            'weighting' => 10,
            'color_class' => 'primary',
            'status_active' => true,
            'status_published' => true,
            'status_alliances' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16"><path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/></svg>',
        ]);

        // Segundo post: Alianza con la Alcaldía
        Post::create([
            'user_id' => 1,
            'category_id' => 8,
            'title' => 'Alianza con la Alcaldía',
            'description' => 'Trabajando juntos por el bienestar de la comunidad.',
            'body' => '<h2>Alianza con la Alcaldía</h2>
                       <p>Nuestra fundación se enorgullece de contar con una fuerte alianza con la Alcaldía de nuestra ciudad. Juntos hemos emprendido iniciativas que han impactado positivamente en la comunidad, brindando a los estudiantes de nuestro colegio oportunidades de desarrollo y acceso a recursos que han mejorado su calidad de vida.</p>
                       <p>La colaboración entre ambas instituciones ha demostrado ser clave para abordar desafíos sociales y promover el crecimiento y el bienestar de nuestra región.</p>',
            'file_url' => 'https://i.pravatar.cc/400',
            'order' => 2,
            'weighting' => 9,
            'color_class' => 'success',
            'status_active' => true,
            'status_published' => true,
            'status_alliances' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-city" viewBox="0 0 16 16"><path d="M14.882 13.692l-3-3a.5.5 0 0 0-.707.707l2.647 2.646h-.938a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .498-.503v-2a.5.5 0 0 0-.5-.5h-1z"/><path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7-3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm1 2v3a1 1 0 1 0 2 0v-3a1 1 0 1 0-2 0z"/></svg>',
        ]);

        // Tercer post: Alianza con la Empresa Local
        Post::create([
            'user_id' => 1,
            'category_id' => 8,
            'title' => 'Alianza con la Empresa Local',
            'description' => 'Fortaleciendo el vínculo entre el colegio y el sector productivo.',
            'body' => '<h2>Alianza con la Empresa Local</h2>
                       <p>Nuestra fundación se enorgullece de contar con una alianza estratégica con la Empresa Local, una institución líder en su sector. Juntos hemos desarrollado programas de pasantías y capacitación que han permitido a nuestros estudiantes adquirir valiosas habilidades y experiencia práctica, preparándolos para su futuro laboral.</p>
                       <p>Esta colaboración ha sido fundamental para fortalecer los vínculos entre el colegio y el sector productivo, brindando a los jóvenes oportunidades que les permiten desarrollar sus talentos y contribuir al crecimiento de nuestra comunidad.</p>',
            'file_url' => 'https://i.pravatar.cc/400',
            'order' => 3,
            'weighting' => 8,
            'color_class' => 'info',
            'status_active' => true,
            'status_published' => true,
            'status_alliances' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16"><path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/></svg>',
        ]);

        // Cuarto post: Alianza con la ONG
        Post::create([
            'user_id' => 1,
            'category_id' => 8,
            'title' => 'Alianza con la ONG',
            'description' => 'Uniendo esfuerzos por el bienestar social.',
            'body' => '<h2>Alianza con la ONG</h2>
                       <p>Nuestra fundación se enorgullece de mantener una estrecha colaboración con la ONG local, una organización dedicada al bienestar social y el desarrollo comunitario. Juntos hemos implementado programas que han brindado a nuestros estudiantes acceso a recursos, capacitaciones y oportunidades que han mejorado su calidad de vida.</p>
                       <p>La sinergia entre ambas instituciones ha demostrado ser valiosa para abordar los desafíos que enfrentan los jóvenes en nuestra comunidad, ofreciendo soluciones integrales que han tenido un impacto positivo en el crecimiento y el futuro de nuestros estudiantes.</p>',
            'file_url' => 'https://i.pravatar.cc/400',
            'order' => 4,
            'weighting' => 7,
            'color_class' => 'warning',
            'status_active' => true,
            'status_published' => true,
            'status_alliances' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16"><path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/></svg>',
        ]);

        // Quinto post: Alianza con la Asociación de Padres
        Post::create([
            'user_id' => 1,
            'category_id' => 8,
            'title' => 'Alianza con la Asociación de Padres',
            'description' => 'Fortaleciendo los lazos entre el colegio y las familias.',
            'body' => '<h2>Alianza con la Asociación de Padres</h2>
                       <p>Nuestra fundación se enorgullece de contar con una sólida alianza con la Asociación de Padres de Familia de nuestro colegio. Juntos hemos trabajado para fortalecer los vínculos entre la institución y las familias, brindando a los estudiantes un entorno de apoyo y oportunidades que han contribuido a su desarrollo integral.</p>
                       <p>Esta colaboración ha sido fundamental para promover la participación de los padres en la vida del colegio, fomentando una comunidad educativa más unida y comprometida con el éxito de nuestros estudiantes.</p>',
            'file_url' => 'https://i.pravatar.cc/400',
            'order' => 5,
            'weighting' => 6,
            'color_class' => 'negative',
            'status_active' => true,
            'status_published' => true,
            'status_alliances' => true,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/><path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/></svg>',
        ]);
    }
}
