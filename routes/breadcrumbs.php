<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Breadcrumbs;

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Master Data
Breadcrumbs::for('master_data', function (BreadcrumbTrail $trail) {
    $trail->push('Master Data');
});

// Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->push('Contact');
});


// Supplier
Breadcrumbs::for('supplier_index', function (BreadcrumbTrail $trail) {
    $trail->parent('contact');
    $trail->push('Supplier', route('supplier.index'));
});

Breadcrumbs::for('supplier_create', function (BreadcrumbTrail $trail) {
    $trail->parent('supplier_index');
    $trail->push('Create', route('supplier.create'));
});

Breadcrumbs::for('supplier_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('supplier_index');
    $trail->push('Edit');
});

// Customer
Breadcrumbs::for('customer_index', function (BreadcrumbTrail $trail) {
    $trail->parent('contact');
    $trail->push('Customer', route('customer.index'));
});

Breadcrumbs::for('customer_create', function (BreadcrumbTrail $trail) {
    $trail->parent('customer_index');
    $trail->push('Create', route('customer.create'));
});

Breadcrumbs::for('customer_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('customer_index');
    $trail->push('Edit');
});


// Category
Breadcrumbs::for('category_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Category', route('category.index'));
});

Breadcrumbs::for('category_create', function (BreadcrumbTrail $trail) {
    $trail->parent('category_index');
    $trail->push('Create', route('category.create'));
});

Breadcrumbs::for('category_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('category_index');
    $trail->push('Edit');
});
