<?php

/**
 * Provide API connection to plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.raneydaydesign.com
 * @since      1.0.0
 *
 * @package    Settings_Page
 * @subpackage Settings_Page/admin/partials
 */


$rdd_care_plan_settings = get_option( 'rdd_care_plan_settings' );
$project_id = $rdd_care_plan_settings['client_project_id'];

$curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_URL => "https://raneydaydesignllc.teamwork.com/projects/". $project_id ."/time_entries.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
        "Authorization: Basic dHdwXzNsRGJ4WVF1T0U3MG00ekpHU0tORmt2T1V1aE06MQ==",
    "Cookie: tw-auth=tw-45A6282286A1F02872F4654921B4A018-V9DkkrX2xdDnWry8DFjYNfQIrCoFUV-278622; JSESSIONID=3830c0efd101adc3331c64596b1117722850; RDS=2; PROJLB=s2"
  ),
));

$response = json_decode(curl_exec($curl), true);

curl_close($curl);