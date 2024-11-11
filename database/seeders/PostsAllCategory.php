<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsAllCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            // 1. Comunidad Amigoniana
            [
                "user_id" => 1,
                "category_id" => 1,
                "title" => "Bienvenidos a la Familia Amigoniana Yaracuyana",
                "description" =>
                "Conoce nuestra comunidad y únete a nuestra misión de fortalecer los lazos entre exalumnos, alumnos y personal.",
                "body" =>
                "Conoce nuestra comunidad y únete a nuestra misión de fortalecer los lazos entre exalumnos, alumnos y personal.",
                "body" => 'La Familia Amigoniana Yaracuyana representa más que una simple comunidad educativa; somos un tejido social vibrante y dinámico que ha florecido a lo largo de generaciones en San Felipe, Venezuela. Nuestra historia comenzó con una visión simple pero poderosa: crear un espacio donde la educación trascienda las aulas y se convierta en una experiencia transformadora de vida.
                En el corazón de nuestra comunidad late el compromiso inquebrantable con los valores Amigonianos: la excelencia académica, la formación integral y el servicio a los demás. Estos principios han guiado a generaciones de estudiantes, docentes y familias, creando una red de apoyo que se extiende más allá de las fronteras geográficas.
                Nuestra comunidad se distingue por su capacidad de adaptación y crecimiento continuo. A través de los años, hemos desarrollado programas innovadores, fomentado el intercambio cultural y establecido conexiones significativas entre actuales estudiantes y exalumnos exitosos. Estas relaciones han dado fruto a innumerables proyectos colaborativos, mentorías y oportunidades de desarrollo personal y profesional.
                Como miembro de la Familia Amigoniana, tendrás acceso a una red global de profesionales comprometidos con el crecimiento mutuo. Organizamos regularmente encuentros, talleres y eventos que fortalecen nuestros lazos y crean oportunidades de colaboración. Cada miembro aporta sus propias experiencias y conocimientos, enriqueciendo así el tejido de nuestra comunidad.
                Te invitamos a ser parte activa de esta familia, donde cada individuo es valorado y tiene la oportunidad de contribuir al crecimiento colectivo. Juntos, continuaremos construyendo un legado de excelencia, solidaridad y servicio que trascienda generaciones.',
                "order" => 1,
                "weighting" => 100,
                "color_class" => "blue",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_featured" => true,
                "status_active" => true,
                "status_published" => true,
            ],

            // 2. Programas Educativos
            [
                "user_id" => 1,
                "category_id" => 2,
                "title" => "Programa de Mentoría 2024",
                "description" =>
                "Conectando generaciones a través del conocimiento",
                "body" => 'El Programa de Mentoría 2024 representa la culminación de años de experiencia en la formación integral de estudiantes, combinando la sabiduría de generaciones anteriores con las aspiraciones de los jóvenes talentos actuales. Este programa innovador ha sido diseñado meticulosamente para crear puentes significativos entre exalumnos exitosos y estudiantes actuales del Colegio "Fray Luis Amigó".
                Nuestro enfoque se basa en tres pilares fundamentales: la orientación académica personalizada, el desarrollo de habilidades profesionales y el crecimiento personal. Los mentores, seleccionados por su destacada trayectoria y compromiso con los valores Amigonianos, dedican tiempo valioso para guiar a los estudiantes en su camino hacia la excelencia.
                El programa se estructura en sesiones mensuales que incluyen encuentros uno a uno, talleres grupales y proyectos prácticos. Los mentores comparten no solo sus conocimientos técnicos y profesionales, sino también sus experiencias de vida, desafíos superados y lecciones aprendidas. Esta transmisión de conocimiento intergeneracional fortalece nuestra comunidad y preserva la esencia de nuestra identidad Amigoniana.
                Los estudiantes participantes tienen la oportunidad de explorar diferentes campos profesionales, desarrollar habilidades de liderazgo y construir una red de contactos profesionales desde temprana edad. El programa también incluye visitas a lugares de trabajo, participación en proyectos reales y exposición a diferentes industrias y sectores.
                Al final del programa, los participantes habrán desarrollado un plan de carrera claro, establecido conexiones valiosas y adquirido herramientas prácticas para su futuro profesional. El éxito del programa se mide no solo en términos académicos, sino también en el crecimiento personal y la capacidad de nuestros estudiantes para convertirse en líderes comprometidos con el cambio social positivo.',
                "order" => 2,
                "weighting" => 90,
                "color_class" => "emerald",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_posts" => true,
                "status_active" => true,
                "status_published" => true,
            ],

            // 3. Proyectos de Infraestructura
            [
                "user_id" => 1,
                "category_id" => 3,
                "title" => "Modernización de Instalaciones Deportivas",
                "description" =>
                "Proyecto de renovación de canchas y equipamiento deportivo",
                "body" => 'El proyecto de Modernización de Instalaciones Deportivas 2024 marca un hito significativo en la historia de nuestra institución, representando la mayor inversión en infraestructura deportiva en la última década. Este ambicioso plan de renovación abarca múltiples aspectos esenciales para el desarrollo integral de nuestros estudiantes y la comunidad Amigoniana en general.
                La primera fase del proyecto incluye la completa renovación del sistema de iluminación de nuestras canchas deportivas, implementando tecnología LED de última generación que no solo mejorará la visibilidad durante las actividades nocturnas, sino que también reducirá significativamente nuestro consumo energético. Esta actualización permitirá extender los horarios de uso de las instalaciones, beneficiando a más miembros de nuestra comunidad.
                En la segunda fase, nos enfocamos en la renovación de las superficies deportivas, incluyendo la instalación de un nuevo pavimento deportivo de alta calidad en la cancha principal, la rehabilitación de las pistas de atletismo y la creación de nuevas áreas para deportes específicos. Estas mejoras no solo optimizarán el rendimiento deportivo, sino que también garantizarán la seguridad de nuestros atletas.
                El proyecto también contempla la creación de espacios verdes multifuncionales alrededor de las instalaciones deportivas, diseñados para fomentar tanto la práctica deportiva como la recreación pasiva. Estos espacios incluirán áreas de calentamiento, zonas de estiramiento y áreas de descanso con sombra natural.
                Además, estamos implementando un sistema de gestión y mantenimiento preventivo que asegurará la durabilidad y el óptimo funcionamiento de todas las instalaciones. Este sistema incluye programas de capacitación para el personal de mantenimiento y protocolos específicos para el cuidado de cada área.',
                "order" => 3,
                "weighting" => 85,
                "color_class" => "orange",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_projects" => true,
                "status_active" => true,
                "status_published" => true,
            ],

            // 4. Eventos y Actividades
            [
                "user_id" => 1,
                "category_id" => 4,
                "title" => "Encuentro Anual de Exalumnos 2024",
                "description" => "Celebrando el reencuentro de generaciones",
                "body" => 'El Encuentro Anual de Exalumnos 2024 promete ser un evento extraordinario que reunirá a generaciones de graduados del Colegio "Fray Luis Amigó" en una celebración sin precedentes de nuestra herencia educativa y valores compartidos. Este año, el encuentro adquiere un significado especial al coincidir con importantes hitos en la historia de nuestra institución.
                El programa del evento ha sido cuidadosamente diseñado para maximizar las oportunidades de conexión y celebración. Comenzaremos con una ceremonia de apertura que incluirá el reconocimiento especial a exalumnos destacados en diferentes campos profesionales, quienes han llevado los valores Amigonianos más allá de nuestras fronteras. Sus historias de éxito y servicio servirán como inspiración para las generaciones actuales y futuras.
                Durante el día, los participantes podrán disfrutar de una variedad de actividades que incluyen tours por las instalaciones renovadas del colegio, exhibiciones fotográficas que recorren la historia de nuestra institución, y paneles de discusión donde exalumnos compartirán sus experiencias y visiones para el futuro. Las actividades deportivas tradicionales, como el torneo de fútbol inter-promociones y los juegos amistosos de básquetbol, mantendrán vivo el espíritu competitivo y de camaradería.
                Un momento destacado será el almuerzo de confraternidad, donde las diferentes generaciones podrán compartir experiencias, reconectar con antiguos compañeros y establecer nuevos vínculos. El evento también incluirá presentaciones culturales preparadas por estudiantes actuales, demostrando la continuidad de nuestra tradición de excelencia.
                La jornada culminará con una cena de gala donde se presentarán los nuevos proyectos de desarrollo institucional y se establecerán compromisos para el apoyo continuo a nuestra alma mater. Este será un momento para renovar nuestro compromiso con los valores que nos definen como comunidad Amigoniana.',
                "order" => 4,
                "weighting" => 80,
                "color_class" => "purple",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_featured" => true,
                "status_active" => true,
                "status_published" => true,
            ],

            // 5. Oportunidades de Voluntariado
            [
                "user_id" => 1,
                "category_id" => 5,
                "title" => "Programa de Voluntariado Social",
                "description" => "Juntos por una mejor comunidad",
                "body" => 'El Programa de Voluntariado Social de la Familia Amigoniana representa una oportunidad única para canalizar el espíritu de servicio que caracteriza a nuestra comunidad. Este programa integral busca crear un impacto positivo y duradero en nuestra sociedad, mientras fortalece los lazos entre los miembros de nuestra familia educativa.
                Nuestro programa se estructura en tres áreas principales de acción: educación y tutoría, desarrollo comunitario y proyectos ambientales. En el ámbito educativo, los voluntarios participan en programas de refuerzo escolar, talleres de desarrollo de habilidades y mentorías académicas para estudiantes que necesitan apoyo adicional. Estas iniciativas no solo benefician a los estudiantes receptores, sino que también enriquecen la experiencia de los voluntarios.
                En el área de desarrollo comunitario, trabajamos en estrecha colaboración con organizaciones locales para identificar y abordar necesidades específicas de nuestra comunidad. Los proyectos incluyen programas de alfabetización digital para adultos mayores, campañas de salud preventiva y actividades recreativas para niños en situación de vulnerabilidad.
                El componente ambiental de nuestro programa se centra en la promoción de prácticas sostenibles y la conservación del medio ambiente. Los voluntarios participan en proyectos de reforestación, programas de reciclaje y campañas de concientización ambiental, contribuyendo así a la creación de un futuro más sostenible.
                Cada voluntario recibe capacitación específica para su área de trabajo y cuenta con el apoyo continuo de coordinadores experimentados. Además, implementamos un sistema de reconocimiento que valora y celebra las contribuciones significativas de nuestros voluntarios, fomentando un compromiso sostenido con el servicio comunitario.',
                "order" => 5,
                "weighting" => 75,
                "color_class" => "green",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_posts" => true,
                "status_active" => true,
                "status_published" => true,
            ],

            // 6. Becas y Ayuda Social
            [
                "user_id" => 1,
                "category_id" => 6,
                "title" => "Programa de Becas 2024",
                "description" =>
                "Apoyando el talento y la excelencia académica",
                "body" => 'El Programa de Becas 2024 representa nuestro compromiso continuo con la excelencia académica y la igualdad de oportunidades educativas. Este año, hemos ampliado significativamente nuestro programa para incluir diferentes modalidades de apoyo que se adaptan a las diversas necesidades de nuestra comunidad estudiantil.
                Las becas se distribuyen en varias categorías principales: Becas de Excelencia Académica, destinadas a estudiantes con desempeño sobresaliente; Becas de Necesidad Socioeconómica, para garantizar que ningún estudiante talentoso se quede sin acceso a una educación de calidad por razones económicas; y Becas de Talento Especial, que reconocen habilidades excepcionales en áreas como deportes, artes o ciencias.
                Cada beca incluye un paquete integral de beneficios que va más allá de la simple asistencia financiera. Los becarios reciben cobertura completa o parcial de sus gastos académicos, incluyendo matrícula, materiales escolares y uniformes. Además, tienen acceso a programas de tutoría personalizada, orientación vocacional y actividades extracurriculares que complementan su formación académica.
                El proceso de selección se realiza a través de un comité multidisciplinario que evalúa no solo el rendimiento académico, sino también el potencial de liderazgo, el compromiso con los valores Amigonianos y la participación en actividades comunitarias. Este enfoque holístico nos permite identificar y apoyar a estudiantes que verdaderamente ejemplifican el espíritu de nuestra institución.
                Como parte de nuestro compromiso con la transparencia y la equidad, hemos implementado un sistema de seguimiento y evaluación continua que permite monitorear el progreso de los becarios y brindar apoyo adicional cuando sea necesario. Los beneficiarios participan en programas de mentoría y se comprometen a mantener un alto rendimiento académico y una conducta ejemplar.',
                "order" => 6,
                "weighting" => 95,
                "color_class" => "cyan",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_help" => true,
                "status_active" => true,
                "status_published" => true,
            ],

            // 7. Noticias y Actualizaciones
            [
                "user_id" => 1,
                "category_id" => 7,
                "title" => "Logros Destacados de Nuestra Comunidad",
                "description" => "Celebrando los éxitos de nuestra familia",
                "body" => 'Con gran orgullo compartimos los logros excepcionales que miembros de nuestra comunidad Amigoniana han alcanzado durante el último año, demostrando la excelencia y el impacto positivo que caracteriza a nuestra institución. Estos logros abarcan diversos campos y confirman el alcance global de nuestra familia educativa.
                En el ámbito académico, cinco de nuestros exalumnos han recibido reconocimientos internacionales por sus investigaciones en campos como la medicina, la ingeniería sostenible y la educación innovadora. Destacamos especialmente el trabajo del Dr. Carlos Mendoza, quien desarrolló un nuevo método de tratamiento para enfermedades tropicales, y la Ing. María Rodríguez, quien recibió el premio de innovación sostenible por su proyecto de energías renovables en comunidades rurales.
                En el sector empresarial, varios miembros de nuestra comunidad han fundado startups exitosas que están generando impacto social positivo. El proyecto de tecnología educativa liderado por Juan Pérez ha recibido financiamiento significativo y está siendo implementado en más de 50 escuelas en Latinoamérica. Por su parte, Ana Torres ha establecido una red de emprendimientos sociales que está generando empleo para comunidades vulnerables.
                Nuestros deportistas también han brillado este año. El equipo de atletismo del colegio ha batido tres récords nacionales, y dos de nuestros exalumnos representaron al país en competencias internacionales. En el ámbito cultural, el grupo de teatro Amigoniano ganó el primer lugar en el Festival Nacional de Artes Escénicas, y nuestra coral juvenil fue invitada a presentarse en importantes escenarios internacionales.
                Es especialmente gratificante ver cómo nuestros valores de servicio y compromiso social se reflejan en las acciones de nuestra comunidad. Más de 50 miembros han liderado proyectos de impacto social en diferentes regiones del país, desde programas de educación ambiental hasta iniciativas de desarrollo comunitario.',
                "order" => 7,
                "weighting" => 70,
                "color_class" => "indigo",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_posts" => true,
                "status_active" => true,
                "status_published" => true,
            ],

            // 8. Desarrollo Profesional
            [
                "user_id" => 1,
                "category_id" => 8,
                "title" => "Talleres de Desarrollo Profesional",
                "description" => "Fortaleciendo competencias para el futuro",
                "body" => 'Los Talleres de Desarrollo Profesional 2024 representan una iniciativa integral diseñada para potenciar las carreras de los miembros de nuestra comunidad Amigoniana, adaptándose a las demandas del mercado laboral actual y futuro. Este programa comprensivo abarca múltiples dimensiones del desarrollo profesional, desde habilidades técnicas hasta competencias de liderazgo y gestión.
                El programa se estructura en cinco módulos principales, cada uno diseñado para abordar aspectos críticos del desarrollo profesional contemporáneo. El primer módulo, "Liderazgo Transformacional", se enfoca en desarrollar habilidades de liderazgo adaptativo y gestión de equipos en entornos dinámicos. Los participantes aprenden técnicas avanzadas de comunicación, resolución de conflictos y toma de decisiones estratégicas.
                El segundo módulo, "Innovación y Transformación Digital", aborda las tecnologías emergentes y su impacto en diferentes industrias. Los participantes exploran temas como inteligencia artificial, análisis de datos, economía digital y transformación de modelos de negocio. Este módulo incluye proyectos prácticos que permiten aplicar estos conocimientos en situaciones reales.
                El tercer módulo se centra en "Habilidades Blandas y Comunicación Efectiva", desarrollando competencias esenciales como la inteligencia emocional, negociación, presentaciones de alto impacto y networking estratégico. Se realizan simulaciones y ejercicios prácticos que permiten a los participantes perfeccionar estas habilidades en un ambiente seguro y constructivo.
                Los módulos cuarto y quinto abordan "Gestión de Proyectos y Metodologías Ágiles" y "Emprendimiento e Innovación Social" respectivamente, proporcionando herramientas concretas para la gestión eficiente de iniciativas y el desarrollo de proyectos con impacto social.',
                "order" => 8,
                "weighting" => 65,
                "color_class" => "sky",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_projects" => true,
                "status_active" => true,
                "status_published" => true,
            ],

            // 9. Colaboraciones y Networking
            [
                "user_id" => 1,
                "category_id" => 9,
                "title" => "Red de Networking Amigoniano",
                "description" =>
                "Conectando profesionales, construyendo oportunidades",
                "body" => 'La Red de Networking Amigoniano se ha convertido en uno de los recursos más valiosos para nuestra comunidad, facilitando conexiones significativas que trascienden fronteras geográficas y generacionales. Este ecosistema de colaboración profesional está diseñado para maximizar las oportunidades de crecimiento y desarrollo para todos sus miembros.
                Nuestra plataforma de networking integra múltiples canales de comunicación y colaboración, desde eventos presenciales hasta herramientas digitales de última generación. El programa incluye encuentros mensuales temáticos donde profesionales de diferentes industrias comparten sus experiencias y conocimientos, creando oportunidades únicas para el aprendizaje cruzado y la colaboración interdisciplinaria.
                Hemos establecido alianzas estratégicas con importantes organizaciones y empresas lideradas por exalumnos, creando un circuito privilegiado de oportunidades laborales y proyectos colaborativos. Nuestra base de datos de profesionales Amigonianos, que actualmente cuenta con más de 5,000 miembros activos en 25 países, facilita la conexión entre profesionales con intereses y objetivos complementarios.
                El programa de mentoría profesional conecta a profesionales experimentados con miembros más jóvenes de la comunidad, facilitando la transferencia de conocimiento y la orientación profesional personalizada. Estos vínculos han resultado en numerosos casos de éxito, desde el desarrollo de nuevos emprendimientos hasta importantes avances en carreras corporativas.
                Organizamos regularmente foros de industria específicos, donde miembros de sectores particulares pueden profundizar en tendencias, desafíos y oportunidades relevantes para sus campos. Estos eventos incluyen sesiones de networking estructurado, presentaciones de proyectos y oportunidades de colaboración específicas para cada sector.',
                "order" => 9,
                "weighting" => 60,
                "color_class" => "violet",
                "file_url" => "https://picsum.photos/500/500", // Imagen aleatoria con relación 1:1
                "status_alliances" => true,
                "status_active" => true,
                "status_published" => true,
            ],
        ];

        foreach ($posts as $post) {
            $post["created_at"] = Carbon::now();
            $post["updated_at"] = Carbon::now();
            DB::table("posts")->insert($post);
        }
    }
}
