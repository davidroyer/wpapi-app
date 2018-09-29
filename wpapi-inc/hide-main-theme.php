<?php
if ( !is_main_site($blog_id)) {
  add_filter( 'wp_prepare_themes_for_js', 'hideThemes');
}

function hideThemes($arr){
  unset($arr["wpapi-app"]);
  return $arr;
}
