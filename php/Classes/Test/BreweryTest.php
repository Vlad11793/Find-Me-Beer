<?php


namespace FindMeBeer\FindMeBeer\Test;

use FindMeBeer\FindMeBeer\{



};



// grab the class under scrutiny

require_once(dirname(__DIR__) . "/autoload.php");



// grab the uuid generator

require_once(dirname(__DIR__, 2) . "/lib/uuid.php");



/**

 * Full PHPUnit test for the Brewery class

 *

 * This is a complete PHPUnit test of the Brewery class. It is complete because *ALL* mySQL/PDO enabled methods

 * are tested for both invalid and valid inputs.

 *

 * @see Brewery

 * @author Celeste Whitaker <cwhitaker4@cnm.edu>

 **/

class BreweryTest extends FindMeBeerTest {
	/**
	 * @var int VALID_BREWERY_ID
	 */
	protected $VALID_BREWERY_ID = null;

	/**
	 * address of brewery
	 * @var string $VALID_BREWERY_ADDRESS
	 */
	protected $VALID_BREWERY_ADDRESS = "2316 56th st";

	/**
	 * @var string $VALID_BREWERY_AVATARURL
	 */
	protected $VALID_BREWERY_AVATARURL = "https://gravatar.com/avatar/60d845492a4bb0fa50049511ec139ce8?s=400&d=robohash&r=x";
	/**
	 * Description of Brewery
	 * @var string $VALID_BREWERY_DESCRIPTION
	 */
	protected $VALID_BREWERY_DESCRIPTION = "Founded in 2008 in the heart of downtown Albuquerque, Marble Brewery is devoted to brewing premium craft beer that satisfies the thirsts and discriminating tastes of our diverse and loyal customers. Not only do we brew quality craft beer classics, our fresh cutting-edge specials relentlessly push boundaries and raise expectations.";
	/**
	 * @var string
	 */

	protected $VALID_BREWERY_DESCRIPTION2 = "Brewery Description Test2";
	/**
	 * Email for brewery
	 * @var string $VALID_BREWERY_EMAIL
	 */
	protected $VALID_BREWERY_EMAIL = "brewery@gmail.com";
	/**
	 * Testing Brewery Email
	 * @var string $VALID_BREWERY_EMAIL2
	 */
	protected $VALID_BREWERY_EMAIL2 = "Brewery email test2";

	/**
	 * Brewery name
	 * @var string $VALID_BREWERY_NAME
	 */
	protected $VALID_BREWERY_NAME ="Marble Brewery";

	/**
	 * Testing brewery name
	 * @var string
	 */
	protected $VALID_BREWERY_NAME2 ="Testing brewery name";

	/**
	 * Brewery Latitude
	 * @var string
	 */
	protected $VALID_BREWERY_LAT = "00001000";

	/**
	 * Testing Brewery Lat
	 * @var string  $VALID_BREWERY_LAT2
	 */
	protected $VALID_BREWERY_LAT2 = "Testing LAT2";

	/**
	 * Brewery Longitude
	 * @var string $VALID_BREWERY_LONG
	 */
	protected $VALID_BREWERY_LONG = "1111000";

	/**
	 * Testing Brewery Longitude
	 * @var string $VALID_BREWERY_LONG2
	 */
	protected $VALID_BREWERY_LONG2 = "Testing LONG2";

	/**
	 * Brewery Phone Number
	 * @var string $VALID_BREWERY_PHONE
	 */
	protected $VALID_BREWERY_PHONE = "(505)337-3333";

	/**
	 * Testing Brewery Phone Number
	 * @var string $VALID_BREWERY_PHONE2
	 */
	protected $VALID_BREWERY_PHONE2 = "Testing Brewery Phone";

	/**
	 * Brewery URL
	 * @var string $VALID_BREWERY_URL
	 */
	protected  $VALID_BREWERYURL = "https://marblebrewery.com/";

	/**
	 * Testing Brewery URL
	 * @var string $VALID_BREWERYURL2
	 */
	protected $VALID_BREWERYURL2 = "Brewery URL2 Test";

	/**
	 *
	 */
	protected final function setup() void: {
		parent:: setup():
	}


	public function testInsertValidBrewery() : void {
	//
	$numRows = $this->getConnection()->getRowCount("brewery");

	$breweryId = generateUuidV4();

	$brewery = new Brewery ($breweryId, $this->VALID_BREWERY_ADDRESS,)
	}