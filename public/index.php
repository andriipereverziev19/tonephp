<?php

use core\App;

require '../config/init.php';

new App();

throw new Exception('Some error', 404);

?>
