<?php
// Error Handling
function sayHello($a)
{
     if (!is_string($a)) {
          return throw new Exception("Argument Harus string");
     }
     echo "Hallo $a";
}

try {
     sayHello(8768);
} catch (Exception $e) {
     echo $e->getMessage();
} finally {
     echo "<br>Hallo";
}
