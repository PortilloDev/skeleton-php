<?php

if (!function_exists('greetUser')) {
    /**
     * Greets the user with a simple message.
     *
     * @param string $name The name of the user to greet.
     * @return string The greeting message.
     */
    function greetUser(string $name): string
    {
        return "Hello, " . ucfirst($name) . "! Welcome to the project.";
    }
}
