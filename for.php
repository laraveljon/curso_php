<?php
$people = array( 'P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7', 'P8', 'P9', 'P10', 'P11', 'P12', 'P13', 'P14', 'P15', 'P16', 'P17' );
$lines = array( 'line 1', 'line 2', 'line 3', 'line 4' );
$num_people = count( $people );
$num_lines = count( $lines );
$iterations = $num_people / $num_lines;
$iterations = $iterations < 0 ? 1 : $iterations;
$result = array();
for( $i = 0; $i <= $iterations; $i++ ) {
	for( $j = 0; $j <= $num_lines - 1; $j++ ) {
		( count( $people ) > 0 ) ?	$result[$lines[$j]][] = array_shift( $people ) : '';
	}
}
echo '<pre>';
print_r( $result );
echo '</pre>';