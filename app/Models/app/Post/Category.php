<?php

namespace App\Models\app\Post;

use App\Models\app\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descriptions',
        'color_class',
        'order',
        'status_navabar',
        'status_aside',
        'status_active',
        'status_published',
    ];

    const COLUMN_COMMENTS = [
        'name' => 'Nombre',
        'descriptions'=>'Descripción',
        'color_class'=>'Color de la categoría',
        'order'=>'Orden',
        'status_navabar'=>'Disponible en el navabar del sitio',
        'status_aside'=>'Disponible en el aside',
        'status_active'=>'Estado',
        'status_published'=>'Publicado',
    ];

    const COLORS = ['primary','secondary','positive','negative','warning','info','dark','white','black','slate','gray','zinc','neutral','stone','red','orange','amber','lime','green','emerald','teal','cyan','sky','blue','indigo','violet','purple','fuchsia','pink','rose'];

    public function posts()
    {
        return $this->hasMany(Post::class,'category_id');
    }

    public function scopePublic($query)
    {
        return $query->where('categories.status_active',true)->where('categories.status_published',true);
    }    

    public static function getCategoryPublic($category_id)
    {
        return Category::public()->where('categories.id',$category_id)->first();
    }

    public function getPublicPostsAttribute()
    {
        $posts =
        Post::select('posts.*')
            ->public()
            ->pinned()
            ->where('posts.category_id',$this->id)
            ->get();

        return $posts;
    }
    public function getIconClassAttribute()
    {
        switch ($this->icon) {
            case 'institution': $icon = 'office-building'; break;
            case 'control': $icon = 'document-text'; break;
            case 'administrator': $icon = 'folder-open'; break;
            
            default:  $icon = 'document'; break;
        };

        return $icon;
    }

    public function getIconSvgAttribute()
    {
        $path = public_path().'image/categories/svg/'; ///home/nuser/code/cfla/public/image/categories/svg/building-gear.svg
        switch ($this->icon) {
            case 'institution': $svg = 'buildings.svg'; break;
            case 'administrator': $svg = 'building-gear.svg'; break;
            case 'academic': $svg = 'folder.svg'; break;
            
            default:  $svg = 'document.svg'; break;
        };
        // return $path.$icon;
        return $svg;
    }

    public static function getPosts($category,$limit=4) : Collection
    {
        $category = Category::where('name', $category)->first();        
        return ($category) ? Post::public()->where('category_id',3)->limit($limit)->orderBy('created_at','desc')->get() : collect();
    }
}
