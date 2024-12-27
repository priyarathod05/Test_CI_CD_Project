<?php
use PHPUnit\Framework\TestCase;

class TestNewTestFile extends TestCase
{
    public function testFileExecution()
    {
        // Start output buffering
        ob_start();

        try {
            // Include the file to test
            include 'new_test_file.php'; // Replace with the correct path

            // Clean output buffer (if file executes successfully)
            ob_end_clean();

            // If no exception occurs, the test should fail
            $this->fail("No syntax error detected in the file.");
        } catch (\ParseError $e) {
            // Clean output buffer in case of an error
            ob_end_clean();

            // Assert that the error message contains a "syntax error"
            $this->assertStringContainsString("syntax error", $e->getMessage());
        }
    }
}
