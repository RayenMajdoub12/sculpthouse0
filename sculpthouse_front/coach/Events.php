<?PHP
	class Events{
		private $id = null;
		private $description = null;
		private $name = null;
		private $date = null;
		private $heure = null;
		
		function __construct(string $id, string $description, string $name, string $date, string $heure){
			
			$this->id=$id;
			$this->description=$description;
			$this->name=$name;
			$this->date=$date;
			$this->heure=$heure;
		}
		
		function getId(): string{
			return $this->id;
		}
		function getDescription(): string{
			return $this->description;
		}
		function getDate(): string{
			return $this->date;
		}
		function getName(): string{
			return $this->name;
		}
		function getHeure(): string{
			return $this->heure;
		}

		function setId(string $id): void{
			$this->id=$id;
		}
		function setDescription(string $description): void{
			$this->description;
		}
		function setdate(string $name): void{
			$this->date=$name;
		}
		function setName(string $description): void{
			$this->name=$description;
		}
		function setHeure(string $heure): void{
			$this->heure=$heure;
		}
	}
?>