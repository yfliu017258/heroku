<?php
header( 'Content-type: image/svg+xml' );

$R = 290
$backgroundX = 600
$backgroundY = 600
$panelX = 300
$panelY = 300


echo << <SVG
	<?xml version="1.0" encoding="UTF-8" standalone="no"?>
	
	<svg width="{$backgroundX}" height="{$backgroundY}" version="1.1" xmlns="http://www.w3.org/2000/svg">
	 
	<circle fill="none" cx="{$panelX}" cy="{$panelX}" r="{$R}" stroke="#000000" stroke-width="10" stroke-linejoin="round">
	 
	</svg>
	SVG;
?> 