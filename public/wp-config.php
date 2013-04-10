<?php

if(is_file('../wp-config-local.php')){
	require_once('../wp-config-local.php');
} else if(is_file('../../wp-config-local.php')){
	require_once('../../wp-config-local.php');
}
