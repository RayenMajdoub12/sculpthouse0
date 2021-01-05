<?PHP
	class Event{
		private $title = null;
		private $start_Event = null;
		
		function __construct(string $title, string $start_Event){
			
			$this->title=$title;
			$this->start_Event=$start_Event;
		}
		
		
		function gettitle(): string{
			return $this->title;
		}
		function getstart_Event(): string{
			return $this->start_Event;
		}


		function settitle(string $title): void{
			$this->title=$title;
		}
		function setstart_Event(string $start_Event): void{
			$this->start_Event;
		}
	}
?>