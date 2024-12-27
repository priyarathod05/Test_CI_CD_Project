<?php
use PHPUnit\Framework\TestCase;

class TestFileTest extends TestCase
{
    public function testFileExecution()
    {
        // Start output buffering
        ob_start();

        try {
            // Include the file to test
            include 'my_fist_test_project.php';

            // Capture the output
            $output = ob_get_clean();

            // Assertions to validate the output
            $this->assertNotEmpty($output, "The output should not be empty.");
            $this->assertStringContainsString("Hello World!", $output);
        } catch (\Throwable $e) {
            // Clean the buffer in case of errors
            ob_end_clean();
            throw $e;
        }
    }
}
