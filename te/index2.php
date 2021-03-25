<?php

require dirname(__FILE__).'/Process_Manager.php';

// Create a batch of test messages to send
$email = array(
	'to' => 'test@test.com',
	'subject' => 'This is a test',
	'body' => 'Hello, world of multi-processing!'
);
$queue = array_fill(0, 50, $email);

// Create a function simulate sending an email message
$sender = function($message_id, $message)
{
	// Pretend to send it, we'll assume a normal latency of 500-1000ms
	$ms = rand(500, 1000);
	usleep($ms * 1000);
	printf("Process %d: sent message %d (%d ms)\n", posix_getpid(), $message_id, $ms);
};

// Start the timer
$start_time = microtime(TRUE);

// Send the emails
foreach ($queue as $message_id => $message)
{
	$sender($message_id, $message);
}

// Stop the timer
$runtime = microtime(TRUE) - $start_time;
printf("\nDone! Sent %d messages in %d seconds\n\n", count($queue), $runtime);

exit;

