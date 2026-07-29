<?php
// Central Contact Configuration Helper for Maid It Easy

function get_contacts_config_file_path() {
    return dirname(__DIR__) . '/config/contacts.json';
}

function load_contacts_config() {
    $defaults = [
        'phone_raw' => '9866769832',
        'phone_display' => '+91 98667 69832',
        'whatsapp_raw' => '919866769832',
        'whatsapp_display' => '+91 98667 69832',
        'email' => 'maiditeasy21@gmail.com'
    ];

    $file_path = get_contacts_config_file_path();
    if (file_exists($file_path)) {
        $content = file_get_contents($file_path);
        $json = json_decode($content, true);
        if (is_array($json)) {
            return array_merge($defaults, $json);
        }
    }
    return $defaults;
}

function save_contacts_config($data) {
    $file_path = get_contacts_config_file_path();
    $dir = dirname($file_path);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    $clean_data = [
        'phone_raw' => trim(preg_replace('/[^0-9+]/', '', $data['phone_raw'] ?? '')),
        'phone_display' => trim($data['phone_display'] ?? ''),
        'whatsapp_raw' => trim(preg_replace('/[^0-9]/', '', $data['whatsapp_raw'] ?? '')),
        'whatsapp_display' => trim($data['whatsapp_display'] ?? ''),
        'email' => trim(filter_var($data['email'] ?? '', FILTER_SANITIZE_EMAIL))
    ];
    return file_put_contents($file_path, json_encode($clean_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) !== false;
}

$SITE_CONTACTS = load_contacts_config();

$SITE_PHONE_RAW        = htmlspecialchars($SITE_CONTACTS['phone_raw']);
$SITE_PHONE_DISPLAY    = htmlspecialchars($SITE_CONTACTS['phone_display']);
$SITE_WHATSAPP_RAW     = htmlspecialchars($SITE_CONTACTS['whatsapp_raw']);
$SITE_WHATSAPP_DISPLAY = htmlspecialchars($SITE_CONTACTS['whatsapp_display']);
$SITE_EMAIL            = htmlspecialchars($SITE_CONTACTS['email']);
