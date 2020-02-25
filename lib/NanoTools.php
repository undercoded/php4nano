<?php

	/*

	USAGE:

	Include NanoTools.php
		
		require_once 'PATH/php4nano/lib/NanoTools.php';

	Example of call:
	
		echo NanoTools::den2raw( 5, 'NANO' );

		// Output '5000000000000000000000000000000'
		
		echo NanoTools::raw2den( '5000000000000000000000000000000', 'NANO' );

		// Output 5

	*/
	
	
	
	class NanoTools
	{

		// Denominations and raw values
	
		const raw2 =
		[
			'unano' => '1000000000000000000',
			'mnano' => '1000000000000000000000',
			 'nano' => '1000000000000000000000000',
			'knano' => '1000000000000000000000000000',
			'Mnano' => '1000000000000000000000000000000',
			 'NANO' => '1000000000000000000000000000000',
			'Gnano' => '1000000000000000000000000000000000'
		];	
	
	
	
		// *** Converts $amount $denomination to raw ***
	
	
	
		public static function den2raw( string $amount, string $denomination )
		{
			
			$raw2denomination = self::raw2[$denomination];
			
			if( $amount == 0 )
			{
				return '0';
			}
			
			if( strpos( $amount, '.' ) )
			{

				$dot_pos = strpos( $amount, '.' );
				
				$number_len = strlen( $amount ) -1;

				$raw2denomination = substr( $raw2denomination, 0, - ( $number_len - $dot_pos ) );
			
			}
			
			$amount = str_replace( '.', '', $amount ) . str_replace( '1', '', $raw2denomination );
			
			// Remove useless zeroes from left
			
			while( substr( $amount, 0, 1 ) == '0' )
			{
				$amount = substr( $amount, 1 );	
			}
			
			return $amount;

		}
	
	
	
		// *** Converts $amount raw to $denomination ***
	
	
	
		public static function raw2den( string $amount, string $denomination )
		{
			
			$raw2denomination = self::raw2[$denomination];
			
			if( $amount == '0' )
			{
				return 0;
			}
			
			$prefix_lenght = 39 - strlen( $amount );
			
			$i = 0;
			
			while( $i < $prefix_lenght )
			{
				
				$amount = '0' . $amount;
				$i++;
				
			}
			
			$amount = substr_replace( $amount, '.', - ( strlen( $raw2denomination ) - 1 ), 0 );
		
			// Remove useless zeroes from left
		
			while( substr( $amount, 0, 1 ) == '0' && substr( $amount, 1, 1 ) != '.' )
			{
				$amount = substr( $amount, 1 );	
			}
		
			// Remove useless decimals
		
			while( substr( $amount, -1 ) == '0' )
			{
				$amount = substr( $amount, 0, -1 );	
			}
			
			// Remove dot if all decimals are zeroes
			
			if( substr( $amount, -1 ) == '.' )
			{
				$amount = substr( $amount, 0, -1 );	
			}	
		
			return $amount;
		
		}
		
	}

?>