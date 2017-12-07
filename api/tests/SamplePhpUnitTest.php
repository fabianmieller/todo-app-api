<?

class SamplePhpUnitTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }

    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Felix');

        $this->assertEquals($user->getFirstName(), 'Felix');
    }

}