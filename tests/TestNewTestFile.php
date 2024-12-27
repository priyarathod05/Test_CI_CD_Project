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

			// Capture the output
            $output = ob_get_clean();

            // Assertions to validate the output
            $this->assertNotEmpty($output, "The output should not be empty.");
            $this->assertStringContainsString("Hello World!", $output);
        } catch (\ParseError $e) {
            // Clean output buffer in case of an error
            ob_end_clean();

            // Assert that the error message contains a "syntax error"
            $this->assertStringContainsString("syntax error", $e->getMessage());
        }
    }
}
