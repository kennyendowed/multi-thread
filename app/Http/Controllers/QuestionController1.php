<?php

namespace App\Http\Controllers;
use App\Services\ProcessManager;
use Symfony\Component\HttpFoundation\Response;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class QuestionController1 extends Controller
{

    public function billUsers()
    {
        $contact=User::all();
  
            $pm = new ProcessManager();
            declare(ticks = 1);

           
        // Setup our signal handlers
        $callback = array($pm, 'signal_handler');
        pcntl_signal(SIGTERM, $callback);
        pcntl_signal(SIGINT,  $callback);
        pcntl_signal(SIGCHLD, $callback);


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
    printf("\nProcess %d: sent message %d (%d ms)\n", posix_getpid(), $message_id, $ms);
   // $data1['info']="Process %d: sent message %d (%d ms)\n". posix_getpid(). $message_id. $ms;
};

    // Start the timer
$start_time = microtime(TRUE);

// Fork processes to send the emails
foreach ($queue as $message_id => $message)
{
	$args = array(
		'message_id' => $message_id,
		'message' => $message,
	);

	// Execution will not proceed past this line
	// except for in the parent process.
	$pm->fork_child($sender, $args);

	// Limit concurrency to 5 processes
	if (count((array)$pm) >= 5)
	{
		while (count((array)$pm) >= 5)
		{
			usleep(500000); // sleep 500 ms
		}
	}
}


// Wait for all processes to end
echo "\nThe queue is empty, waiting for all processes to finish\n\n\n";
//$data1['message']="The queue is empty, waiting for all processes to finish\n";
while (count((array)$pm) > 0)
{
	usleep(500000); // sleep 500 ms
}

// Stop the timer
$runtime = microtime(TRUE) - $start_time;
printf("\nDone! Sent %d messages in %d seconds\n\n", count((array)$queue), $runtime);

exit;

    }

  
}
