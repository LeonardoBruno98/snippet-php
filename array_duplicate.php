function has_duplicate($array) {
  $tmp = array();
  foreach ($array as $val) {
    if (isset($tmp[$val])) {
      return true;
    }else{
      $tmp[$val] = true;
    }
  }
  return false;
}
