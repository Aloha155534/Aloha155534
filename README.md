- 👋 Hi, I’m @Aloha155534
- 👀 I’m interested in ...
- 🌱 I’m currently learning ...
- 💞️ I’m looking to collaborate on ...
- 📫 How to reach me ...

<!---
Aloha155534/Aloha155534 is a ✨ special ✨ repository because its `README.md` (this file) appears on your GitHub profile.
You can click the Preview link to take a look at your changes.
--->

<?php 
include_once 'db.php';

class Survey extends DB{

 private $totalVotes;
 private $optionSelected;

 public function setOptionSelected($option){
 	$this->optionSelected = $option;
 }

 public function getOptionSelected(){
 	return $this->optionSelected;
   }

   public function vote(){
   	$query = $this->connect()->prepare('UPDATE videojuegos SET votos = votos + 1 WHERE opcion = :opcion');
   	$query->execute(['opcion' => $this->optionSelected]);
   }

}
?>
