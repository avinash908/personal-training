<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', url('/'));
});

Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Blog', url('blog'));
});

Breadcrumbs::for('article', function ($trail, $post) {
    $trail->parent('blog');
    $trail->push('Article');
    $trail->push($post->title, url('article', $post));
});

Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About', url('about'));
});

Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact Us', url('contact'));
});

Breadcrumbs::for('faq', function ($trail) {
    $trail->parent('home');
    $trail->push('Faq', url('faq'));
});

Breadcrumbs::for('trainers', function ($trail) {
    $trail->parent('home');
   $trail->push('Trainers', url('trainers'));
});

Breadcrumbs::for('profile', function ($trail, $user) {
    $trail->parent('home');
    $trail->push('Profile');
    $trail->push($user->name, url('/', $user));
});

Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
   $trail->push('Sign In', url('login'));
});

Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
   $trail->push('Register', url('reg'));
});

Breadcrumbs::for('verify', function ($trail) {
    $trail->parent('home');
   $trail->push('Verify', url('verify'));
});