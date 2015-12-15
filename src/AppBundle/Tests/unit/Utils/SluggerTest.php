<?php
namespace AppBundle\Utils;

class SluggerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getSlugs
     */
    public function testSlugify($string, $slug)
    {
        $slugger = new Slugger();
        $result = $slugger->slugify($string);

        $this->assertEquals($slug, $result);
    }

    public function getSlugs()
    {
        return array(
            array('Lorem Ipsum'     , 'lorem-ipsum'),
            array('  Lorem Ipsum  ' , 'lorem-ipsum'),
            array(' lOrEm  iPsUm  ' , 'lorem-ipsum'),
            array('!Lorem Ipsum!'   , 'lorem-ipsum'),
            array('lorem-ipsum'     , 'lorem-ipsum'),
        );
    }
}
