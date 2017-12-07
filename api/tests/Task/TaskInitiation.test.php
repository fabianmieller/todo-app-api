<?
/**
 * @TaskInitiationTest
 * 
 * based on TaskController
 * 
 * This is a Test if the first two functions of the controller wich initiate and create the task run correctly
 * 
*/

use tests\TestCase;

class TaskInitiationTest extends TestCase
{

    public function testIfTaskIsPartOfUser()
    {
        $user = new app\User;
        $this->assertObjectHasAttribute('tasks', $user);

        return $user;
    }

    public function testIfCreationOfUserRunsCorrectly()
    {
        $user = new app\User;
        $title = $user["title"];
        $this->assertNotEmpty($title);

        $checked = $user["checked"];
        $this->assertNotEmpty($checked);

        $this->assertObjectHasAttribute('title', $request);
        $this->assertEquals($checked, 0);
    }
    
}