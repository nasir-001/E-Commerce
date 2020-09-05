<?php

declare(strict_types=1);

use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

//Screens

// Platform > System > Users
Breadcrumbs::for('platform.systems.users', function (BreadcrumbsGenerator $trail) {
    $trail->parent('platform.systems.index');
    $trail->push(__('Users'), route('platform.systems.users'));
});

// Platform > System > Users > User
Breadcrumbs::for('platform.systems.users.edit', function (BreadcrumbsGenerator $trail, $user) {
    $trail->parent('platform.systems.users');
    $trail->push(__('Edit'), route('platform.systems.users.edit', $user));
});

// Platform > System > Roles
Breadcrumbs::for('platform.systems.roles', function (BreadcrumbsGenerator $trail) {
    $trail->parent('platform.systems.index');
    $trail->push(__('Roles'), route('platform.systems.roles'));
});

// Platform > System > Roles > Create
Breadcrumbs::for('platform.systems.roles.create', function (BreadcrumbsGenerator $trail) {
    $trail->parent('platform.systems.roles');
    $trail->push(__('Create'), route('platform.systems.roles.create'));
});

// Platform > System > Roles > Role
Breadcrumbs::for('platform.systems.roles.edit', function (BreadcrumbsGenerator $trail, $role) {
    $trail->parent('platform.systems.roles');
    $trail->push(__('Role'), route('platform.systems.roles.edit', $role));
});

// Platform -> Example Screen
Breadcrumbs::for('platform.example', function (BreadcrumbsGenerator $trail) {
    $trail->parent('platform.index');
    $trail->push(__('Example screen'));
});

// Platform -> Example Fields
Breadcrumbs::for('platform.example.fields', function (BreadcrumbsGenerator $trail) {
    $trail->parent('platform.index');
    $trail->push(__('Form controls'));
});

// Platform -> Example Layouts
Breadcrumbs::for('platform.example.layouts', function (BreadcrumbsGenerator $trail) {
    $trail->parent('platform.index');
    $trail->push(__('Overview layouts'));
});

            // My BreadCrumbs
Breadcrumbs::for('platform.email', function ($trail) {
    $trail->parent('platform.index');
    $trail->push('Email sender');
});

Breadcrumbs::for('platform.category.edit', function ($trail) {
    $trail->parent('platform.index');
    $trail->push('Create categories');
});

Breadcrumbs::for('platform.category.list', function ($trail) {
    $trail->parent('platform.index');
    $trail->push('All categories');
});

Breadcrumbs::for('platform.product.edit', function($trail) {
    $trail->parent('platform.index');
    $trail->push('Create products');
});

Breadcrumbs::for('platform.product.list', function($trail) {
    $trail->parent('platform.index');
    $trail->push('All products');
});

Breadcrumbs::for('platform.order.list', function($trail) {
    $trail->parent('platform.index');
    $trail->push('All Orders');
});