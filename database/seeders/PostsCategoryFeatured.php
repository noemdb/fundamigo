<?php

namespace Database\Seeders;

use App\Models\app\Post as AppPost;
use App\Models\app\Post\Category as PostCategory;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostsCategoryFeatured extends Seeder
{
    public function run()
    {
        // Obtener un usuario aleatorio como autor del post
        $user = User::inRandomOrder()->first() ?? User::factory()->create();

        // Obtener la categoría "Featured"
        $category = PostCategory::where('name', 'Featured')->first();

        // Crear un post solo si la categoría "Featured" existe
        if ($category) {
            AppPost::create([
                'user_id' => $user->id,
                'category_id' => $category->id,
                'title' => 'Destacando los Logros de FUNDAMIGÓ',
                'description' => 'Un enfoque en los proyectos más destacados de nuestra fundación.',
                'body' => 'La Fundación FUNDAMIGÓ está comprometida con la excelencia en la educación y el desarrollo de la comunidad a través de sus proyectos clave. Desde becas para estudiantes sobresalientes en situaciones difíciles, hasta la modernización de la infraestructura educativa, cada proyecto refleja nuestra misión de transformar vidas y construir una sociedad más solidaria y unida. Únete a nosotros en este viaje de impacto positivo y sé parte de un cambio significativo.',
                'file_url' => 'https://picsum.photos/500/500', // Imagen aleatoria con relación 1:1
                'status_active' => true,
                'status_published' => true,
                'color_class' => 'primary',
            ]);
        } else {
            echo "La categoría 'Featured' no existe. Asegúrate de crearla primero.\n";
        }
    }
}
