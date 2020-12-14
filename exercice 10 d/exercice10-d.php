<?php

$dateToTransform = '2004-04-16 12:00:00';
strtotime($dateToTransform,  time() + (435*24*3600));
echo date($dateToTransform);