<?php

namespace FindMeBeer\FindMeBeer\Test;

use FindMeBeer\FindMeBeer\{Beer, BeerTag, Brewery, Tag};
use Exception;


//grab the classes under scrutiny
require_once ("FindMeBeerTest.php");
require_once (dirname(__DIR__) . "/autoload.php");

//grab the uuid generator
require_once (dirname(__DIR__) . "/../lib/uuid.php");

/**
 * Full PHPUnit test for the BeerTag class
 *
 *
 * This is a complete PHPUnit test of the BeerTag class. It is complete because *ALL* mySQL/PDO enabled methods
 * are tested for both invalid and valid inputs.
 *
 * @see \FindMeBeer\FindMeBeer\BeerTag
 * @see \FindMeBeer\FindMeBeer\Brewery
 * @see \FindMeBeer\FindMeBeer\Tag
 * @author Patrick Leyba <pleyba4@cnm.edu>
 **/

class BeerTagTest extends FindMeBeerTest {

	/**
	 * Beer this is to test foreign key relations inside BeerTag
	 * @var
	 **/
	protected $beer;

	/**
	 * Brewery that created the beer; this is to test foreign key relations inside beerTag
	 * @var Brewery
	 **/

	protected $brewery;

	/**
	 * Tag that created the Tag and BerTag; this is to test foreign key relations
	 * @var Tag
	 **/
	protected $tag;

	/**
	 * create dependent objects before running each test
	 *
	 * @throws Exception
	 */
	public final function setUp() : void {
		//run the default setUp() method first
		parent::setUp();

		//create a beer a tag and a brewery for the beerTag test example

		/** @var TYPE_NAME $beerId
		 * @var TYPE_NAME $breweryId
		 * @var TYPE_NAME $tagId
		 */
		$beerId = generateUuidV4();
		$breweryId = generateUuidV4();
		$tagId = generateUuidV4();

		$this->brewery = new Brewery($breweryId, "123 main st Albuquerque NM 87102", "http://meows.cat.com", "A relaxed atmosphere", "brewery@email.com", "Marble Brewery", -73.989308, 40.741895, "505-798-7980", "www.marble.com");
		$this->brewery->insert($this->getPDO());

		$this->tag = new Tag($tagId, "beer tag content goes here");
		$this->tag->insert($this->getPDO());

		$this->beer = new Beer($beerId, $this->brewery->getbreweryId(), 5.25, "hoppy", "Duff", "Lager");
		$this->beer->insert($this->getPDO());
	}

	/**
	 * test inserting a valid BeerTag and verify that the actual mySQL data matches
	 *
	 * @throws Exception
	 */
	public function testInsertValidBeerTag() : void {
		//count the current number of rows and save for later
		$numRows = $this->getConnection()->getRowCount("beerTag");

		//create a beerTag and insert
		$beerTag = new BeerTag($this->beer->getBeerId(), $this->tag->getTagId());
		$beerTag->insert($this->getPDO());

		//verify the rowCount matches
		$pdoBeerTag = BeerTag::getBeerTagByBeerTagBeerIdAndBeerTagTagId($this->getPDO(), $this->beer->getBeerId(), $this->tag->getTagId());
		$this->assertEquals($numRows + 1, $this->getConnection()->getRowCount("beerTag"));
		$this->assertEquals($pdoBeerTag->getBeerTagBeerId(), $this->beer->getBeerId());
		$this->assertEquals($pdoBeerTag->getBeerTagTagId(), $this->tag->getTagId());
	}

	/**
	 * test getting a BeerTag by tag id and verify
	 *
	 * @throws Exception
	 */
	public function testGetBeerTagsByBeerTagTagId() {
		//count the current number of rows and save for later
		$numRows = $this->getConnection()->getRowCount("beerTag");

		//create a beerTag and insert
		$beerTag = new BeerTag($this->beer->getBeerId(), $this->tag->getTagId());
		$beerTag->insert($this->getPDO());

		//grab from mysql and verify count
		$results = BeerTag::getBeerTagsByBeerTagTagId($this->getPDO(), $this->tag->getTagId());
		$this->assertEquals($numRows + 1, $this->getConnection()->getRowCount("beerTag"));
		$this->assertCount(1, $results);

		// enforce no other objects are bleeding into the test
		$this->assertContainsOnlyInstancesOf("FindMeBeer\\FindMeBeer\\BeerTag", $results);

		//grab the first array index and validate
		$pdoBeerTag = $results[0];
		$this->assertEquals($pdoBeerTag->getBeerTagBeerId(), $this->beer->getBeerId());
		$this->assertEquals($pdoBeerTag->getBeerTagTagId(), $this->tag->getTagId());
	}

	/**
	 * test grabbing a BeerTag by a tag id that does not exist
	 **/
//	public function testGetInvalidBeerTagTagId() {
//		$beerTag = BeerTag::getBeerTagByBeerTagTagId($this->getPDO(), generateUuidV4());
//		$this->assertCount(0, $beerTag);
//	}

	/**
	 * test getting a BeerTag by BeerTagBeerId and verify
	 *
	 * @throws Exception
	 */
	public function testGetBeerTagByBeerTagBeerId() {
		//count the current number of rows and save for later
		$numRows = $this->getConnection()->getRowCount("beerTag");

		//create a beerTag and insert
		$beerTag = new BeerTag($this->beer->getBeerId(), $this->tag->getTagId());
		$beerTag->insert($this->getPDO());

		//grab from mysql and verify count
		$results = BeerTag::getBeerTagsByBeerTagBeerId($this->getPDO(), $this->beer->getBeerId());
		$this->assertCount(1, $results);

		// enforce no other objects are bleeding into the test
		$this->assertContainsOnlyInstancesOf("FindMeBeer\\FindMeBeer\\BeerTag", $results);

		//grab the first array index and validate
		$pdoBeerTag = $results[0];
		$this->assertEquals($numRows + 1, $this->getConnection()->getRowCount("beerTag"));
		$this->assertEquals($pdoBeerTag->getBeerTagBeerId(), $this->beer->getBeerId());
		$this->assertEquals($pdoBeerTag->getBeerTagTagId(), $this->tag->getTagId());
	}

	/**
	 * test getting a BeerTag by beerId and tagId, and verify
	 * @param getBeerTagBeerId
	 * @param getBeerTagTagId
	 * @param getBeerId
	 * @param getTagId
	 * @throws Exception
	 */

	public function testGetBeerTagsByBeerTagBeerIdAndBeerTagTagId() {
		//count the current number of rows and save for later
		$numRows = $this->getConnection()->getRowCount("beerTag");

		//create a beerTag and insert
		$beerTag = new BeerTag($this->beer->getBeerId(), $this->tag->getTagId());
		$beerTag->insert($this->getPDO());

		//grab from mysql and verify count
		$result = BeerTag::getBeerTagByBeerTagBeerIdAndBeerTagTagId($this->getPDO(), $this->beer->getBeerId(), $this->tag->getTagId());
		$this->assertEquals($numRows + 1, $this->getConnection()->getRowCount("beerTag"));
		$this->assertEquals($result->getBeerTagBeerId(), $this->beer->getBeerId());
		$this->assertEquals($result->getBeerTagTagId(), $this->tag->getTagId());
	}

	/**
	 * test grabbing a beerTag that does not exist
	 **/
//	public function testGetInvalidBeerTagByBeerIdAndTagId() {
//		$beerTag = beerTag ::getLikeByLikePostIdAndLikeProfileId($this->getPDO(), generateUuidV4(), generateUuidV4());
//		$this->assertNull($beerTag);
//	}

	/**
	 * test grabbing all beerTags
	 *
	 * @throws Exception
	 */
	public function testGetAllValidBeerTags() {
		//count the number of rows and save it for later
		$numRows = $this->getConnection()->getRowCount("beerTag");

		//create a beerTag and insert
		$beerTag = new BeerTag($this->beer->getBeerId(), $this->tag->getTagId());
		$beerTag->insert($this->getPDO());

		//grab the posts from mysql, verify row count and namespace is correct
		$results = BeerTag::getBeerTagsByBeerTagBeerId($this->getPDO(), $this->beer->getBeerId(), $this->tag->getTagId());
		$this->assertEquals($numRows + 1, $this->getConnection()->getRowCount("beerTag"));
		$this->assertCount(1, $results);

		// enforce no other objects are bleeding into the test
		$this->assertContainsOnlyInstancesOf("FindMeBeer\\FindMeBeer\\BeerTag", $results);

		//verify that all fields match

		$pdoTag = $results[0];
		$this->assertEquals($pdoTag->getBeerTagBeerId(), $this->beer->getBeerId());
		$this->assertEquals($pdoTag->getBeerTagTagId(), $this->tag->getTagId());
	}
}
