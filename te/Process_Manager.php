<?php

class Process_Manager implements Countable
{
	protected $processes = array();
	protected $is_child  = FALSE;

	public function count()
	{
		return count($this->processes);
	}

	public function signal_handler($signal)
	{
		// Don't do anything if we're not in the parent process
		if ($this->is_child)
		{
			return;
		}

		switch ($signal)
		{
			case SIGINT:
			case SIGTERM:
				echo "\nUser terminated the application\n";

				// Kill all child processes before terminating the parent
				$this->kill_all();
				exit(0);

			case SIGCHLD:
				// Reap a child process
				//echo "SIGCHLD received\n";
				$this->reap_child();
		}
	}

	public function kill_all()
	{
		foreach ($this->processes as $pid => $is_running)
		{
			posix_kill($pid, SIGKILL);
		}
	}

	public function fork_child($callback, $data)
	{
		$pid = pcntl_fork();

		switch($pid)
		{
			case 0:
				// Child process
				$this->is_child = TRUE;
				call_user_func_array($callback, $data);
				posix_kill(posix_getppid(), SIGCHLD);
				exit;

			case -1:
				// Parent process, fork failed
				throw new Exception("Out of memory!");

			default:
				// Parent process, fork succeeded
				$this->processes[$pid] = TRUE;
				return $pid;
		}
	}

	public function reap_child()
	{
		// Check if any child process has terminated,
		// and if so remove it from memory
		$pid = pcntl_wait($status,  WNOHANG);
		if ($pid < 0)
		{
			throw new Exception("Out of memory");
		}
		elseif ($pid > 0)
		{
			unset($this->processes[$pid]);
		}	
	}
}

