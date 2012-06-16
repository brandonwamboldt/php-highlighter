<?php
/**
 * PHPLighter
 *
 * A PHP syntax highlighting engine the utilizes token_get_all() to produce a
 * level of syntax highlighting that rivals any modern editor. No more barebone
 * generic syntax highlighting!
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the file LICENSE. It is also available through
 * the world wide web at this URL:
 * 
 * http://opensource.org/licenses/OSL-3.0
 * 
 * @package phplighter
 * @author Brandon Wamboldt <brandon.wamboldt@gmail.com>
 * @license http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link http://brandonwamboldt.ca/phplighter
 * @since 1.0.0
 */

// Namespaces
namespace Content\Sample\Files;

use Vendor\Library\Router;

/**
 * This is a very simple abstract class, loosely based off code I wrote for my
 * Router available at brandonwamboldt.ca. This isn't real code and shouldn't 
 * be used for any projects
 *
 * @author Brandon Wamboldt <brandon.wamboldt@gmail.com>
 */
abstract class AbstractClass
{
	/**
	 * This is a protected property
	 * 
	 * @var string
	 */
	protected $foo;
	
	/** 
	 * This is another protected property
	 * 
	 * @var string
	 */
	protected $bar = 'string value';
	
	/**
	 * Random variables just to test syntax highlighting
	 */
	private $baz = 12345;
	private $bz;
	public $routes;
	public $music = FALSE;
	public $value = TRUE;
	public $nil = NULL;
	public $arr = array();
	public $farr = array( 'value1', 'value2', 'value3', 'key1' => 'value4', 5 => 'value5', TRUE, FALSE, NULL );
	
	// Static variables
	public static $myvar;
	public static $yourvar = 'Your value';
	
	const PI = '3.14159';
	
	/**
	 * This is a function (Magic method)
	 */
	public function __construct( $param1, $param2 = array(), $param3 = 5, $param4 = '', MagicType $param5 ) 
	{
		global $fakevar;
		
		// If statement checks + print/echo/string checks
		if ( $param1 === 5 && $param2 == 'string' ) {
			echo 'hello world';
		} else if ( $param1 == 6 ) {
			print 'hello \ \\ \' world';
		} elseif ( $param1 == 7 ) {
			echo "hello {$this->bar}, welcome!" . "Another value {$param3} over here";
		}
		
		// Variable assignment
		$var1 = 1;
		$var2 = '';
		$var3 = "";
		$var4 = 'Hello World';
		$var5 = TRUE;
		$var6 = FALSE;
		$var7 = NULL;
		$var8 = (array) array( 'a', 'b', 'c', 'd', 'e' );
		$var9 = 51.5;
		$abc1 &= $var1;
		
		unset( $abc1 );
		
		// PHP functions 
		$var1 = explode( '|', 'a|b|c|d|e|f|g' );
		$var2 = implode( '|', $var1 );
		$var3 = array_merge( $var8, array( 'f', 'g' ) );
		
		// Eval
		eval( "<?php echo 'hello world'; ?>" );
		
		// Exec
		`ls /etc`;
		exec( 'ls /etc/' );
		
		if ( 256 & 64 ) {
			# Bitwise and
		} else if ( 128 | 32 ) {
			# Bitwise or
		}
		
		// Try catch
		try {
			throw new Exception( 'OH NOES, AN EXCEPTION!', 16525 );
		} catch( Exception $e ) {
			
		} 
		
		// Foreach loops
		foreach ( $var8 as $key => $val ) {
			echo $key;
		}
		
		// For loop
		for ( $i = 0; $i < 100; $i++ ) {
			echo $i . '<br />';
		}
		
		// While loop
		while ( $i > 0 ) {
			$i--;
		}
		
		// Switch statement
		switch ( 'hello' ):
			case 'hi':
				break;
			case 'hey':
			case 'hay':
				echo 'hey is for horses';
				break;
			default:
				# Do stuff
		endswitch;
			
		# Magic constants
		echo __CLASS__;
		echo __NAMESPACE__;
		echo __FILE__;
		echo __DIR__;
		echo __FUNCTION__;
		
		// If statement
		if ( $var1 and $var2 or $var3 ) {
			
		}
	}
	
	/**
	 * Static method
	 */
	final public static function bar()
	{
		echo self::$myvar;
	}
}

class RealClass extends AbstractClass implements ClassInterface
{
	
}