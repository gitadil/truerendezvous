<?php


     function getParamValue(&$value, $default = null)
     {
         return isset($value) ? $value : $default;
     }

