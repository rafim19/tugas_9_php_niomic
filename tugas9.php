<?php
  // Nomor 1
  function fibonacci($angka) {
    if ($angka == 0) {
      return 0;
    } else if ($angka == 1) {
      return 1;
    } else {
      return (fibonacci($angka-1) + fibonacci($angka-2));
    }
  }
  
  $n = 20;
  echo "Fibonacci = ";
  for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i)." ";
  }
?>

<?php
  // Nomor 2
  echo "<br><br>Prima = ";
  $n = 200;
  for ($i = 2; $i <= $n; $i++) {
    if ($i == 2 || $i == 3 || $i == 5 || $i == 7) {
      echo $i." ";
    } else {
      if ($i % 2 != 0 && $i % 3 != 0 && $i % 5 != 0 && $i % 7 != 0) {
        echo $i." ";
      }
    }
  }
?>