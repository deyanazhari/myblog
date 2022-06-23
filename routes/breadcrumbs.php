<?php // routes/breadcrumbs.php

// // Note: Laravel will automatically resolve `Breadcrumbs::` without
// // this import. This is nice for IDE syntax and refactoring.
// use Diglactic\Breadcrumbs\Breadcrumbs;

// // This import is also not required, and you could replace `BreadcrumbTrail $trail`
// //  with `$trail`. This is nice for IDE type checking and completion.
// use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function($trail){
    $trail->push('Dashboard', route('dashboard.index'));
});
//Dashboard > home
Breadcrumbs::for('dashboard_home', function($trail){
    $trail->parent('dashboard');
    $trail->push('Home', '#');
});
Breadcrumbs::for('categories', function($trail){
    $trail->parent('dashboard');
    $trail->push('Categories', route('categories.index'));
});
Breadcrumbs::for('add_category', function($trail){
    $trail->parent('categories');
    $trail->push('add', route('categories.create'));
});