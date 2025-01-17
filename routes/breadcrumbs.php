<?php

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

// Legal
Breadcrumbs::for('legal', function (BreadcrumbTrail $trail) {
    $trail->push('HR-Legal');
});

// sales
Breadcrumbs::for('sales', function (BreadcrumbTrail $trail) {
    $trail->push('Sales');
});

// purchases
Breadcrumbs::for('purchases', function (BreadcrumbTrail $trail) {
    $trail->push('Purchases');
});


// setting
Breadcrumbs::for('setting', function (BreadcrumbTrail $trail) {
    $trail->push('Setting');
});

// Inventory
Breadcrumbs::for('inventory', function (BreadcrumbTrail $trail) {
    $trail->push('Inventory');
});

// Electronic Document
Breadcrumbs::for('electronic_document', function (BreadcrumbTrail $trail) {
    $trail->push('Electronic Document');
});

// Accounting
Breadcrumbs::for('accounting', function (BreadcrumbTrail $trail) {
    $trail->push('Accounting');
});

// Payroll
Breadcrumbs::for('payroll', function (BreadcrumbTrail $trail) {
    $trail->push('Payroll');
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

// Category Request
Breadcrumbs::for('category_request_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Category Request', route('category-request.index'));
});

Breadcrumbs::for('category_request_create', function (BreadcrumbTrail $trail) {
    $trail->parent('category_request_index');
    $trail->push('Create', route('category-request.create'));
});

Breadcrumbs::for('category_request_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('category_request_index');
    $trail->push('Edit');
});

// Category Potongan
Breadcrumbs::for('category_potongan_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Category Potongan', route('category-potongan.index'));
});

Breadcrumbs::for('category_potongan_create', function (BreadcrumbTrail $trail) {
    $trail->parent('category_potongan_index');
    $trail->push('Create', route('category-potongan.create'));
});

Breadcrumbs::for('category_potongan_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('category_potongan_index');
    $trail->push('Edit');
});

// Category Benefit
Breadcrumbs::for('category_benefit_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Category Benefit', route('category-benefit.index'));
});

Breadcrumbs::for('category_benefit_create', function (BreadcrumbTrail $trail) {
    $trail->parent('category_benefit_index');
    $trail->push('Create', route('category-benefit.create'));
});

Breadcrumbs::for('category_benefit_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('category_benefit_index');
    $trail->push('Edit');
});


// Unit
Breadcrumbs::for('unit_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Unit', route('unit.index'));
});

Breadcrumbs::for('unit_create', function (BreadcrumbTrail $trail) {
    $trail->parent('unit_index');
    $trail->push('Create', route('unit.create'));
});

Breadcrumbs::for('unit_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('unit_index');
    $trail->push('Edit');
});

// Lokasi
Breadcrumbs::for('lokasi_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Lokasi', route('lokasi.index'));
});

Breadcrumbs::for('lokasi_create', function (BreadcrumbTrail $trail) {
    $trail->parent('lokasi_index');
    $trail->push('Create', route('lokasi.create'));
});

Breadcrumbs::for('lokasi_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('lokasi_index');
    $trail->push('Edit');
});


// Jabatan
Breadcrumbs::for('jabatan_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Jabatan', route('jabatan.index'));
});

Breadcrumbs::for('jabatan_create', function (BreadcrumbTrail $trail) {
    $trail->parent('jabatan_index');
    $trail->push('Create', route('jabatan.create'));
});

Breadcrumbs::for('jabatan_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('jabatan_index');
    $trail->push('Edit');
});

// Status Karyawan
Breadcrumbs::for('status_karyawan_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Status Karyawan', route('status-karyawan.index'));
});

Breadcrumbs::for('status_karyawan_create', function (BreadcrumbTrail $trail) {
    $trail->parent('status_karyawan_index');
    $trail->push('Create', route('status-karyawan.create'));
});

Breadcrumbs::for('status_karyawan_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('status_karyawan_index');
    $trail->push('Edit');
});

// Divisi
Breadcrumbs::for('divisi_index', function (BreadcrumbTrail $trail) {
    $trail->parent('master_data');
    $trail->push('Divisi', route('status-karyawan.index'));
});

Breadcrumbs::for('divisi_create', function (BreadcrumbTrail $trail) {
    $trail->parent('divisi_index');
    $trail->push('Create', route('status-karyawan.create'));
});

Breadcrumbs::for('divisi_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('divisi_index');
    $trail->push('Edit');
});


// karyawan
Breadcrumbs::for('karyawan_index', function (BreadcrumbTrail $trail) {
    $trail->parent('legal');
    $trail->push('Karyawan', route('karyawan.index'));
});

Breadcrumbs::for('karyawan_create', function (BreadcrumbTrail $trail) {
    $trail->parent('karyawan_index');
    $trail->push('Create', route('karyawan.create'));
});

Breadcrumbs::for('karyawan_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('karyawan_index');
    $trail->push('Edit');
});


// Karyawan File
Breadcrumbs::for('berkas_karyawan_index', function (BreadcrumbTrail $trail) {
    $trail->parent('legal');
    $trail->push('Karyawan File');
});

Breadcrumbs::for('berkas_karyawan_create', function (BreadcrumbTrail $trail) {
    $trail->parent('berkas_karyawan_index');
    $trail->push('Create', route('berkas-karyawan.create'));
});

Breadcrumbs::for('berkas_karyawan_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('berkas_karyawan_index');
    $trail->push('Edit');
});

// Dokumen HRGA
Breadcrumbs::for('dokumen_hrga_index', function (BreadcrumbTrail $trail) {
    $trail->parent('legal');
    $trail->push('Dokumen HRGA', route('dokumen-hrga.index'));
});

Breadcrumbs::for('dokumen_hrga_create', function (BreadcrumbTrail $trail) {
    $trail->parent('dokumen_hrga_index');
    $trail->push('Create', route('dokumen-hrga.create'));
});

Breadcrumbs::for('dokumen_hrga_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('dokumen_hrga_index');
    $trail->push('Edit');
});

Breadcrumbs::for('dokumen_hrga_show', function (BreadcrumbTrail $trail) {
    $trail->parent('dokumen_hrga_index');
    $trail->push('Detail');
});



// Profile
Breadcrumbs::for('profile_index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Profile', route('profile.index'));
});


// Role
Breadcrumbs::for('role_index', function (BreadcrumbTrail $trail) {
    $trail->parent('setting');
    $trail->push('Role', route('role.index'));
});

Breadcrumbs::for('role_create', function (BreadcrumbTrail $trail) {
    $trail->parent('role_index');
    $trail->push('Create', route('role.create'));
});

Breadcrumbs::for('role_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('role_index');
    $trail->push('Edit');
});

// Permission
Breadcrumbs::for('permission_index', function (BreadcrumbTrail $trail) {
    $trail->parent('setting');
    $trail->push('Permission', route('permission.index'));
});

Breadcrumbs::for('permission_create', function (BreadcrumbTrail $trail) {
    $trail->parent('permission_index');
    $trail->push('Create', route('permission.create'));
});

Breadcrumbs::for('permission_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('permission_index');
    $trail->push('Edit');
});

// User
Breadcrumbs::for('user_index', function (BreadcrumbTrail $trail) {
    $trail->parent('setting');
    $trail->push('User', route('user.index'));
});

Breadcrumbs::for('user_create', function (BreadcrumbTrail $trail) {
    $trail->parent('user_index');
    $trail->push('Create', route('user.create'));
});

Breadcrumbs::for('user_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('user_index');
    $trail->push('Edit');
});


// Spal
Breadcrumbs::for('spal_index', function (BreadcrumbTrail $trail) {
    $trail->parent('sales');
    $trail->push('Spal', route('spal.index'));
});

Breadcrumbs::for('spal_create', function (BreadcrumbTrail $trail) {
    $trail->parent('spal_index');
    $trail->push('Create', route('spal.create'));
});

Breadcrumbs::for('spal_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('spal_index');
    $trail->push('Edit');
});

// sale
Breadcrumbs::for('sale_index', function (BreadcrumbTrail $trail) {
    $trail->parent('sales');
    $trail->push('Sale', route('sale.index'));
});

Breadcrumbs::for('sale_create', function (BreadcrumbTrail $trail) {
    $trail->parent('sale_index');
    $trail->push('Create', route('sale.create'));
});

Breadcrumbs::for('sale_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('sale_index');
    $trail->push('Edit');
});

Breadcrumbs::for('sale_show', function (BreadcrumbTrail $trail) {
    $trail->parent('sale_index');
    $trail->push('Detail');
});

// Time Sheet
Breadcrumbs::for('time_sheet_index', function (BreadcrumbTrail $trail) {
    $trail->parent('sales');
    $trail->push('Time Sheet', route('time_sheet.index'));
});

Breadcrumbs::for('time_sheet_create', function (BreadcrumbTrail $trail) {
    $trail->parent('time_sheet_index');
    $trail->push('Create Time Sheet', route('time_sheet.create'));
});


// purchase
Breadcrumbs::for('purchase_index', function (BreadcrumbTrail $trail) {
    $trail->parent('purchases');
    $trail->push('Purchase', route('purchase.index'));
});

Breadcrumbs::for('purchase_create', function (BreadcrumbTrail $trail) {
    $trail->parent('purchase_index');
    $trail->push('Create', route('purchase.create'));
});

Breadcrumbs::for('purchase_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('purchase_index');
    $trail->push('Edit');
});

Breadcrumbs::for('purchase_show', function (BreadcrumbTrail $trail) {
    $trail->parent('purchase_index');
    $trail->push('Detail');
});


// Item/Good & Service
Breadcrumbs::for('item_index', function (BreadcrumbTrail $trail) {
    $trail->parent('inventory');
    $trail->push('item', route('item.index'));
});

Breadcrumbs::for('item_create', function (BreadcrumbTrail $trail) {
    $trail->parent('item_index');
    $trail->push('Create', route('item.create'));
});

Breadcrumbs::for('item_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('item_index');
    $trail->push('Edit');
});

Breadcrumbs::for('item_tracking', function (BreadcrumbTrail $trail) {
    $trail->parent('item_index');
    $trail->push('Tracking');
});



// BAC Terima
Breadcrumbs::for('bac_terima_index', function (BreadcrumbTrail $trail) {
    $trail->parent('inventory');
    $trail->push('BAC Terima', route('bac-terima.index'));
});

Breadcrumbs::for('bac_terima_create', function (BreadcrumbTrail $trail) {
    $trail->parent('bac_terima_index');
    $trail->push('Create', route('bac-terima.create'));
});

Breadcrumbs::for('bac_terima_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('bac_terima_index');
    $trail->push('Edit');
});

Breadcrumbs::for('bac_terima_show', function (BreadcrumbTrail $trail) {
    $trail->parent('bac_terima_index');
    $trail->push('Detail');
});

// BAC Pakai
Breadcrumbs::for('bac_pakai_index', function (BreadcrumbTrail $trail) {
    $trail->parent('inventory');
    $trail->push('BAC Pakai', route('bac-pakai.index'));
});

Breadcrumbs::for('bac_pakai_create', function (BreadcrumbTrail $trail) {
    $trail->parent('bac_pakai_index');
    $trail->push('Create', route('bac-pakai.create'));
});

Breadcrumbs::for('bac_pakai_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('bac_pakai_index');
    $trail->push('Edit');
});

Breadcrumbs::for('bac_pakai_show', function (BreadcrumbTrail $trail) {
    $trail->parent('bac_pakai_index');
    $trail->push('Detail');
});

// ASO
Breadcrumbs::for('aso_index', function (BreadcrumbTrail $trail) {
    $trail->parent('inventory');
    $trail->push('ASO', route('aso.index'));
});

Breadcrumbs::for('aso_create', function (BreadcrumbTrail $trail) {
    $trail->parent('aso_index');
    $trail->push('Create', route('aso.create'));
});

Breadcrumbs::for('aso_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('aso_index');
    $trail->push('Edit');
});

Breadcrumbs::for('aso_show', function (BreadcrumbTrail $trail) {
    $trail->parent('aso_index');
    $trail->push('Detail');
});

// Received
Breadcrumbs::for('received_index', function (BreadcrumbTrail $trail) {
    $trail->parent('inventory');
    $trail->push('Received', route('received.index'));
});

Breadcrumbs::for('received_create', function (BreadcrumbTrail $trail) {
    $trail->parent('received_index');
    $trail->push('Create', route('received.create'));
});

Breadcrumbs::for('received_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('received_index');
    $trail->push('Edit');
});

Breadcrumbs::for('received_show', function (BreadcrumbTrail $trail) {
    $trail->parent('received_index');
    $trail->push('Detail');
});




// Document
Breadcrumbs::for('document_index', function (BreadcrumbTrail $trail) {
    $trail->parent('electronic_document');
    $trail->push('Document', route('document.index'));
});

Breadcrumbs::for('document_create', function (BreadcrumbTrail $trail) {
    $trail->parent('document_index');
    $trail->push('Create', route('document.create'));
});

Breadcrumbs::for('document_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('document_index');
    $trail->push('Edit');
});


// Category Document
Breadcrumbs::for('category_document_index', function (BreadcrumbTrail $trail) {
    $trail->parent('electronic_document');
    $trail->push('Category Document', route('category-document.index'));
});

Breadcrumbs::for('category_document_create', function (BreadcrumbTrail $trail) {
    $trail->parent('category_document_index');
    $trail->push('Create', route('category-document.create'));
});

Breadcrumbs::for('category_document_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('category_document_index');
    $trail->push('Edit');
});


// Request Form
Breadcrumbs::for('request_form_index', function (BreadcrumbTrail $trail) {
    $trail->push('Request Form', route('request-form.index'));
});

Breadcrumbs::for('request_form_create', function (BreadcrumbTrail $trail) {
    $trail->parent('request_form_index');
    $trail->push('Create', route('request-form.create'));
});

Breadcrumbs::for('request_form_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('request_form_index');
    $trail->push('Edit');
});

Breadcrumbs::for('request_form_show', function (BreadcrumbTrail $trail) {
    $trail->parent('request_form_index');
    $trail->push('Detail');
});

// Akun
Breadcrumbs::for('akun', function (BreadcrumbTrail $trail) {
    $trail->parent('accounting');
    $trail->push('Akun');
});

Breadcrumbs::for('buku_besar_index', function (BreadcrumbTrail $trail) {
    $trail->parent('accounting');
    $trail->push(trans('sidebar.sub_menu.buku_besar'), route('buku-besar.index'));
});

Breadcrumbs::for('neraca_index', function (BreadcrumbTrail $trail) {
    $trail->parent('accounting');
    $trail->push(trans('sidebar.sub_menu.neraca'), route('neraca.index'));
});


//grup
// Breadcrumbs::for('grup_index', function (BreadcrumbTrail $trail) {
//     $trail->parent('accounting');
//     $trail->push('Akun Grup', route('akun-grup.index'));
// });

// Breadcrumbs::for('grup_create', function (BreadcrumbTrail $trail) {
//     $trail->parent('grup_index');
//     $trail->push('Create', route('akun-grup.create'));
// });

// Breadcrumbs::for('grup_edit', function (BreadcrumbTrail $trail) {
//     $trail->parent('grup_index');
//     $trail->push('Edit');
// });


//Header
// Breadcrumbs::for('header_index', function (BreadcrumbTrail $trail) {
//     $trail->parent('accounting');
//     $trail->push('Akun Header', route('akun-header.index'));
// });

// Breadcrumbs::for('header_create', function (BreadcrumbTrail $trail) {
//     $trail->parent('header_index');
//     $trail->push('Create', route('akun-header.create'));
// });

// Breadcrumbs::for('header_edit', function (BreadcrumbTrail $trail) {
//     $trail->parent('header_index');
//     $trail->push('Edit');
// });

//jurnal umum
Breadcrumbs::for('jurnal_umum_index', function (BreadcrumbTrail $trail) {
    $trail->parent('accounting');
    $trail->push(trans('sidebar.sub_menu.jurnal_umum'), route('jurnal-umum.index'));
});

Breadcrumbs::for('jurnal_umum_create', function (BreadcrumbTrail $trail) {
    $trail->parent('jurnal_umum_index');
    $trail->push('Create', route('jurnal-umum.create'));
});

Breadcrumbs::for('jurnal_umum_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('jurnal_umum_index');
    $trail->push('Edit');
});


//COA
Breadcrumbs::for('coa_index', function (BreadcrumbTrail $trail) {
    $trail->parent('accounting');
    $trail->push('COA', route('coa.index'));
});

Breadcrumbs::for('coa_create', function (BreadcrumbTrail $trail) {
    $trail->parent('coa_index');
    $trail->push('Create', route('coa.create'));
});

Breadcrumbs::for('coa_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('coa_index');
    $trail->push('Edit');
});

Breadcrumbs::for('coa_show', function (BreadcrumbTrail $trail) {
    $trail->parent('coa_index');
    $trail->push('Detail');
});


// Invoice
Breadcrumbs::for('invoice_index', function (BreadcrumbTrail $trail) {
    $trail->parent('accounting');
    $trail->push('Invoice', route('invoice.index'));
});

Breadcrumbs::for('invoice_create', function (BreadcrumbTrail $trail) {
    $trail->parent('invoice_index');
    $trail->push('Create', route('invoice.create'));
});

Breadcrumbs::for('invoice_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('invoice_index');
    $trail->push('Edit');
});

Breadcrumbs::for('invoice_show', function (BreadcrumbTrail $trail) {
    $trail->parent('invoice_index');
    $trail->push('Detail');
});


// Billing
Breadcrumbs::for('billing_index', function (BreadcrumbTrail $trail) {
    $trail->parent('accounting');
    $trail->push('Billing', route('billing.index'));
});

Breadcrumbs::for('billing_create', function (BreadcrumbTrail $trail) {
    $trail->parent('billing_index');
    $trail->push('Create', route('billing.create'));
});

Breadcrumbs::for('billing_edit', function (BreadcrumbTrail $trail) {
    $trail->parent('billing_index');
    $trail->push('Edit');
});

Breadcrumbs::for('billing_show', function (BreadcrumbTrail $trail) {
    $trail->parent('billing_index');
    $trail->push('Detail');
});

//potongan
Breadcrumbs::for('potongan_index', function (BreadcrumbTrail $trail) {
    $trail->parent('payroll');
    $trail->push('Data Potongan', route('potongan.index'));
});
//benefit
Breadcrumbs::for('benefit_index', function (BreadcrumbTrail $trail) {
    $trail->parent('payroll');
    $trail->push('Data Benefit', route('benefit.index'));
});
