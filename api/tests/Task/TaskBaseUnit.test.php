<?
/**
 * @TaskUnitTest
 * 
 * based on Task
 * 
 * This is a Test if Task is valid or not
 * 
*/

use tests\TestCase;

class TaskUnitTest extends TestCase
{

    public function testIfTitleIsEmpty()
    {
        $title = $fillable['title'];
        $this->assertEmpty($title);

        return $title;
    }

    public function testIfTitleIsFilled()
    {
        $title = $fillable['title'];
        $this->assertNotEmpty($title);

        return $title;
    }

    public function testIfCheckedIsEmpty()
    {
        $checked= $fillable['checked'];
        $this->assertEmpty($checked);

        return $checked;
    }

    public function testIfCheckedIsFilled()
    {
        $checked= $fillable['checked'];
        $this->asserNotEmpty($checked);

        return $checked;
    }
    
}