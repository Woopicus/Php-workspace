<?php

$tasks = $app['database']->selectALL('todos');

require 'views/index.view.php';