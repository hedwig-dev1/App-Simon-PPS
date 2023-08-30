<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Main';

// satker or guest
$route['daftar_permohonan'] = 'View_controller/guest_view';
$route['daftar_progress'] = 'View_controller/daftarProgress_view';
$route['permohonan/kirim_progress/(:any)'] = 'Update_controller/sendProgress/$1';
$route['pesan/pesan_masuk'] = 'View_controller/guestPesan_view';
$route['progress/send_progress/(:any)'] = 'Update_controller/update_process_progress/$1';
$route['permohonan/add_document'] = 'Insert_controller/create_permohonan';
$route['permohonan/pro/save_doc'] = 'Insert_controller/prosessPermohonan';

// seksi-pps
$route['seksi-pps/daftar_permohonan'] = 'View_controller/seksiPps_view';
$route['seksi-pps/daftar_progress'] = 'View_controller/daftarProgress_Pps';
$route['progress/kirim_pemberitahuan'] = 'Insert_controller/approveProg';
$route['permohonan/tindak_lanjuti/(:any)'] = 'Update_controller/tindakPermohonan/$1';
$route['permohonan/terima/(:any)'] = 'Update_controller/approvePermohonan/$1';
$route['permohonan/tolak/(:any)'] = 'Update_controller/cancelPermohonan/$1';
$route['permohonan/pro/tindak_lanjuti/(:any)'] = 'Update_controller/processTindak/$1';
$route['permohonan/pro/approve/(:any)'] = 'Update_controller/processApprove/$1';
$route['permohonan/pro/cancel/(:any)'] = 'Update_controller/processCancel/$1';



$route['download/(:any)'] = 'Update_controller/download_berkas/$1';

// auth
$route['login'] = 'Insert_controller/login';
$route['auth/login'] = 'Insert_controller/proses_login';
$route['register'] = 'Insert_controller/register';
$route['auth/register'] = 'Insert_controller/proses_register';

// admin
$route['daftar_user'] = 'Insert_controller/create_user';
$route['list_user'] = 'View_controller/list_user';
$route['admin/go/process'] = 'Insert_controller/process_create_user';
$route['process_register'] = 'Insert_controller/process_register';
$route['aktivasi/(:any)'] = 'Insert_controller/aktivasi_akun/$1';
$route['delete/(:any)'] = 'Update_controller/delete/$1';

// 404
$route['404'] = 'Main/error';


//Zia Routes
$route['guest/form_permohonan'] = 'Guest/Insert_controller/form_permohonan';
$route['guest/form_permohonan/send'] = 'Guest/Insert_controller/permohonan_process';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
