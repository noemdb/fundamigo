<?php

namespace Database\Seeders;

use App\Models\app\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoryN1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Crear el primer post
                Post::create([
                    'user_id' => 1, // Cambia esto según el ID de un usuario existente
                    'category_id' => 1, // Comunidad Amigoniana
                    'title' => 'Bienvenida a la Comunidad Amigoniana',
                    'description' => 'Un espacio para todos los miembros de la comunidad.',
                    'body' => '<h2>Bienvenida a la Comunidad Amigoniana</h2>
                            <p>Nos alegra dar la bienvenida a todos los nuevos miembros de la Comunidad Amigoniana. Aquí encontrarás <strong>información relevante</strong> y oportunidades para involucrarte. No dudes en participar en nuestras actividades y eventos, donde podrás conocer a otros miembros y compartir experiencias.</p>
                            <p>A continuación, te presentamos algunas de las actividades más destacadas:</p>
                            <ul>
                                <li><strong>Actividades Mensuales:</strong> Participa en nuestras reuniones y talleres, que se llevan a cabo cada primer sábado del mes.</li>
                                <li><strong>Redes Sociales:</strong> Síguenos en nuestras plataformas para estar al tanto de novedades y eventos.</li>
                                <li><strong>Comunidad Activa:</strong> Conoce a otros miembros que comparten tus intereses y valores.</li>
                            </ul>
                            <p>Además, contamos con un programa de mentoría donde exalumnos pueden guiar a nuevos miembros. ¡Juntos podemos lograr grandes cosas y fortalecer nuestra comunidad!</p>
                            
                            <p>La Comunidad Amigoniana se distingue no solo por su compromiso con la educación, sino también por su enfoque en el desarrollo integral de cada miembro. En este espacio, fomentamos el intercambio de ideas y experiencias, creando un ambiente de apoyo mutuo. A lo largo del año, organizamos diversas actividades que van desde talleres educativos hasta encuentros culturales, donde cada miembro puede aportar su perspectiva y enriquecer el aprendizaje colectivo. Además, promovemos iniciativas de voluntariado que invitan a todos a participar activamente en proyectos comunitarios. Estos proyectos no solo benefician a quienes los reciben, sino que también fortalecen los lazos entre los participantes, generando un sentido de pertenencia y colaboración. Creemos firmemente que cada acción, por pequeña que sea, puede tener un impacto significativo en la vida de los demás. Así, la Comunidad Amigoniana se convierte en un espacio donde la solidaridad y la amistad florecen, y donde cada miembro tiene la oportunidad de crecer y contribuir. Te invitamos a ser parte de esta misión, participando en nuestras actividades y compartiendo tus propias historias, porque juntos podemos construir un futuro mejor para todos.</p>
                            ',
                    'order' => 1,
                    "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                    'weighting' => 10,
                    'color_class' => 'primary',
                    'status_posts' => true,
                    'status_active' => true,
                    'status_published' => true,
                ]);
        
                // Crear el segundo post
                Post::create([
                    'user_id' => 1, // Cambia esto según el ID de un usuario existente
                    'category_id' => 1, // Comunidad Amigoniana
                    'title' => 'Historias de Éxito',
                    'description' => 'Conoce a nuestros exalumnos destacados.',
                    'body' => '<h2>Historias de Éxito</h2>
                            <p>En esta sección, compartiremos <strong>historias inspiradoras</strong> de nuestros exalumnos que han hecho contribuciones significativas a la sociedad. Estas narrativas reflejan el espíritu de la Comunidad Amigoniana y sirven como motivación para todos.</p>
                            <p>Conocerás a personas que, gracias a su educación y formación, han logrado grandes cosas. Desde líderes en sus campos hasta voluntarios apasionados, estas historias destacan la importancia de la <strong>solidaridad</strong>, el <strong>compromiso social</strong> y el trabajo en equipo.</p>
                            <p>Por ejemplo, uno de nuestros exalumnos, Juan Pérez, ha fundado una organización sin fines de lucro que ayuda a jóvenes en riesgo. Su trabajo ha impactado a cientos de vidas y es un testimonio del poder de la educación y el apoyo comunitario.</p>
                            <p>¡No te las pierdas y únete a nosotros en este viaje de aprendizaje y crecimiento!</p>
                            <p>Cada una de estas historias no solo celebra los logros individuales, sino que también resalta el impacto positivo que la Comunidad Amigoniana ha tenido en la vida de sus miembros. Los exalumnos que compartiremos han enfrentado desafíos significativos, pero han utilizado las enseñanzas y valores adquiridos en nuestra comunidad para superarlos. Por ejemplo, María González, quien tras graduarse se dedicó a la educación, ha implementado programas de tutoría para estudiantes de escasos recursos en su ciudad. Su compromiso ha transformado vidas, ofreciendo a jóvenes la oportunidad de acceder a una educación de calidad. Además, en nuestros eventos, estas historias inspiran a nuevas generaciones, mostrando que el esfuerzo y la dedicación pueden llevar a grandes resultados. La comunidad no se limita a un espacio físico; se extiende a través de redes de apoyo y colaboración. A medida que compartimos estas historias, invitamos a todos a reflexionar sobre su propio camino y a considerar cómo pueden contribuir al bienestar de otros. La Comunidad Amigoniana es un lugar donde cada éxito se celebra, y cada miembro tiene el potencial de hacer una diferencia significativa en el mundo.</p>
                            ',
                    'order' => 2,
                    "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                    'weighting' => 9,
                    'color_class' => 'secondary',
                    'status_posts' => true,
                    'status_active' => true,
                    'status_published' => true,
                ]);
    }
}
