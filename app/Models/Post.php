<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Bisa menggunakan ini:
    // protected $fillable = ['title', 'excerpt', 'body']; // Selain ini maka TIDAK BOLEH diisi/diubah

    //Atau ini :
    protected $guarded = ['id']; // Selain ini maka BOLEH diisi/diubah

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

// Coding dibawah ini, Jangan diUncomment !
// Cara Create/Update dengan tinker :

// Create Cara 1
// $post = new Post();
// $post->title = "Judul Ke Sekian";
// $post->slug = "judul-ke-sekian";
// $post->excerpt = "Lorem ipsum dolor, sit amet consectetur adipisicing elit.";
// $post->body = "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>";
// $post->save();

// Create Cara 2
// Post::create([
//     'title' => "Judul pertama",
//     'slug' => "judul-pertama",
//     'excerpt' => "Lorem ipsum pertama",
//     'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
// ]);

// Update Cara 1
// // find()
// Post::find(3)->update([
//     'title' => "Judul Ketiga Berubah",
// ]);

// // where()
// Post::where('title', "Judul Ketiga Berubah")->update([
//     'excerpt' => "Excerpt Ini Diubah",
// ]);

// Update Cara 2
// $post = Post::find(3);
// $post->title = "Judul Ke Sekian..";
// $post->save();
