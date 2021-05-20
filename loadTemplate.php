<?php
//file with all the functions
function loadTemplate($fileName, $templateVars)
{
  extract($templateVars);
  ob_start();
  require $fileName;
  $contents = ob_get_clean();
  return $contents;
}
?>
