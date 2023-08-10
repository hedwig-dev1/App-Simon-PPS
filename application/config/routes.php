<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Main';

// Seksi PPS
$route['list_permohonan'] = 'C_permohonan/index';
$route['progress_pekerjaan'] = 'C_permohonan/progress_pekerjaan';
$route['pro_load_pekerjaan'] = 'C_permohonan/create_process_progress';
$route['daftar_progress'] = 'C_permohonan/daftar_progress';
$route['add_permohonan'] = 'C_permohonan/create';
$route['pro_permohonan_add'] = 'C_permohonan/create_process';
$route['arsip_berkas'] = 'C_permohonan/arsip_berkas';

// auth
$route['login'] = 'C_auth/login';
$route['pro_login'] = 'C_auth/proses_login';
$route['register'] = 'C_auth/register';
$route['pro_register'] = 'C_auth/proses_register';

// admin
$route['daftar_akun'] = 'C_admin/create_akun';
$route['set_akun'] = 'C_admin/set_akun';
$route['pro_akses'] = 'C_admin/proses_level_akses';
$route['list_akun'] = 'C_admin/list_akun';
$route['aktivasi/(:any)'] = 'C_admin/aktivasi_akun/$1';
$route['delete/(:any)'] = 'C_admin/delete/$1';

// 404
$route['404'] = 'C_admin/error';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
