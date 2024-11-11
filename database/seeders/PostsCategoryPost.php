<?php

namespace Database\Seeders;

use App\Models\app\Post;
use App\Models\app\Post\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsCategoryPost extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::inRandomOrder()->first() ?? User::factory()->create();

        // Obtener la categoría "Posts"
        $category = Category::inRandomOrder()->first();

        // Crear un post solo si la categoría "Posts" existe
        if ($category) {
            Post::create([
                'user_id' => $user->id,
                'category_id' => $category->id,
                'title' => 'Fortaleciendo la Familia Amigoniana',
                'description' => 'Unión de esfuerzos para una educación de excelencia y transformación social',
                'body' => 'La Fundación FUNDAMIGÓ se enfoca en fortalecer la unidad de la Familia Amigoniana, promoviendo el sentido de pertenencia en exalumnos, alumnos, personal, y amigos del Colegio “Fray Luis Amigó” de San Felipe, Venezuela. Este esfuerzo une las potencialidades de todos los miembros para garantizar una educación de excelencia y construir una sociedad mejor. Las actividades clave incluyen la recaudación de fondos, apoyo en becas, modernización de infraestructura, y oportunidades de voluntariado y mentoría para los estudiantes actuales&#8203;:contentReference[oaicite:0]{index=0}.',
                'file_url' => 'https://picsum.photos/500/500', // Imagen aleatoria con relación 1:1
                'status_posts' => true,
                'status_active' => true,
                'status_published' => true,
                'color_class' => 'secondary',
            ]);
        } else {
            echo "La categoría 'Posts' no existe. Asegúrate de crearla primero.\n";
        }
    }
}
