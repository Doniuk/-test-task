<?php

namespace App\tests\Service;

use App\Service\Search;
use PHPUnit\Framework\TestCase;
class SearchTest extends TestCase
{
    public function testSearch()
    {
    $search = new Search();
    $names1=array('john','JOHN','John','jOhn','joHn','johN','JOhn','joHN','JoHn','jOhN','mary','MARY','Mary','mAry','maRy','marY','MAry','maRY','MaRy','mArY','test');
    $result1= $search->search_john_mary($names1);
    $names0=array('JOHN','John','jOhn','joHn','johN','JOhn','joHN','JoHn','jOhN','mary','MARY','Mary','mAry','maRy','marY','MAry','maRY','MaRy','mArY','test');
    $result0= $search->search_john_mary($names0);
    $names=array('Eva','Tom','Joh','Ary','Tomas');
    $result= $search->search_john_mary($names);

    $this->assertEquals(1, $result1); // 10xJohn, 10xMary
    $this->assertEquals(0, $result0); // 9xJohn, 10xMary
    $this->assertEquals(1, $result); // 0xJohn, 0xMary
    }
}