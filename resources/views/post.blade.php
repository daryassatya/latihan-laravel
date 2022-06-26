@extends('layouts.main')
@section('container')
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a
            href="{{ route('category.spesific', $post->category->slug) }}"
            class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p>{!! $post->body !!}</p>
    <a href="{{ route('post') }}" class="d-block">Back to posts</a>
@endsection

{{-- Category::create([
    'name' => 'Personal',
    'slug' => 'personal'
])

Post::create([
    'category_id' => 3,
    'title' => "Judul keempat",
    'slug' => "judul-keempat",
    'excerpt' => "Lorem ipsum empat",
    'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
]) --}}
