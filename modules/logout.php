<?php

session_start();
session_destroy();

header("Location:index.php?cm=login&m=log");
