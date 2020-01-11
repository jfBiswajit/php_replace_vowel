<?php
function replaceVowel($str, $target) {
  $vowelArr = str_split('aeiou');
  $strArr = str_split($str);
  
  foreach ($strArr as $sKey => $sVal) {
    foreach ($vowelArr as $vKey => $vVal) {
      if ($sVal == $vVal) {
        $strArr[$sKey] = $target;
      }
    }
  }

  return $strArr;
}

echo "<pre>";
print_r(replaceVowel('biswajit', '@'));