<?php
use PHPUnit\Framework\TestCase;

class TestFileTest extends TestCase
{
    public function testFileExecution()
    {
        // Capture the output of the file
        ob_start();
        include 'my_fist_test_project.php';
        $output = ob_get_clean();

        // Check if output contains expected content
        $this->assertStringContainsString("Hello World!", $output);

        // Test for errors
        $this->assertNotFalse($output, "An error occurred in test.php execution.");
    }
}
