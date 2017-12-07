<?
/**
 * @TaskDeleteTest
 * 
 * based on TaskController
 * 
 * This is a Test if the deletion of a Task runs correctly
 * 
*/

use tests\TestCase;

class TaskDeletionTest extends TestCase
{
	
	public function testIfDeletionIsSuccesfull()
    {
        $task = new app\Task;
        $this->assertEmpty($task);

    }
}