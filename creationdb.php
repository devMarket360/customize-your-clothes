<?php 
/* Crea las tablas para almacenar  los modelos, colores y materiales*/

function mrk_create_table_model() {
 global $wpdb;
 $clothes= $wpdb->prefix . 'mrk_clothes';
 $charset_collate = $wpdb->get_charset_collate();
 $sql = "CREATE TABLE $clothes (
      id int(9) NOT NULL AUTO_INCREMENT,
      model_type varchar(55) NOT NULL,
      parts INT(10) NOT NULL,
      description varchar(255),
      model_style varchar(255),
      material varchar(255),
      colors varchar(55),
      model_link varchar(255),
      size varchar(55),
      UNIQUE KEY id(id)
      ) $charset_collate;";

 require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
 dbDelta($sql);
}
register_activation_hook(__FILE__, 'mrk_create_table_model');

function mrk_create_table_colors() {
     global $wpdb;
     $colors= $wpdb->prefix . 'mrk_colors';
     $charset_collate = $wpdb->get_charset_collate();
     $sql = "CREATE TABLE $colors (
          id int(9) NOT NULL AUTO_INCREMENT,
          color_name varchar(55) NOT NULL,
          color INT(10) NOT NULL,
          color_use varchar(55),
          UNIQUE KEY id(id)
          ) $charset_collate;";
    
     require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
     dbDelta($sql);
    }
    register_activation_hook(__FILE__, 'mrk_create_table_colors');

function mrk_create_table_materials() {
     global $wpdb;
     $materials= $wpdb->prefix . 'mrk_materials';
     $charset_collate = $wpdb->get_charset_collate();
     $sql = "CREATE TABLE $materials (
          id int(9) NOT NULL AUTO_INCREMENT,
          color_name varchar(55) NOT NULL,
          color INT(10) NOT NULL,
          color_use varchar(55),
          UNIQUE KEY id(id)
          ) $charset_collate;";
    
     require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
     dbDelta($sql);
    }
    register_activation_hook(__FILE__, 'mrk_create_table_materials');