<?php

$file_url = $_GET['file'] == 'stage3' ? 'http://mirror.bytemark.co.uk/gentoo/releases/amd64/autobuilds/latest-stage3-amd64-nomultilib.txt' : 'http://mirror.bytemark.co.uk/gentoo/releases/amd64/autobuilds/latest-install-amd64-minimal.txt';

$location = explode(' ',explode("\n", file_get_contents($file_url))[2])[0];
$location = "http://mirror.bytemark.co.uk/gentoo/releases/amd64/autobuilds/$location";

header("Location: $location");
