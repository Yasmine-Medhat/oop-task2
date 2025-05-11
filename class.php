<?php
class Product{
    public string $name;
    public float $price;
    public string $description;
    public string $image;
 public function _construct($name,$price,$description) {
    $this->name=$name;
    if($price>0){
    $this->price=$price;}
    $this->description=$description;

 }  
public function calcPrice(){
    return $this->price;
}
public function uploadImage($image){

    $this->image=$image;
}}
class Book extends Product{
    private array $publisher=[];
    public string $writer;
    public string $color;
    public string $supplier;
public function _construct($name,$price,$description,$writer,$color,$supplier){
    parent::_construct($name,$price,$description);
    $this->writer=$writer;
    $this->color=$color;
    $this->supplier=$supplier;
}
public function setPublisher($publisher){
 
$this->publisher=$publisher;
    }
public function choosePublisher(){
    return array_rand($this->publisher);
}    
public function showPublisher(){
    foreach($this->publisher as $value){
        echo $value,"<br>";
    }
}
}
class BabyCar extends Product{
private int $age;
private float $weight;
private array $materials=[];
private float $specialTax;
public function _construct($name,$price,$description,$age,$weight,$specialTax){
    parent::_construct($name,$price,$description);
    $this->age=$age;
    $this->weight=$weight;
    $this->specialTax=$specialTax;
}
public function setMaterials($materials){
 
    $this->materials=$materials;
        }
public function displayMaterials(){
    foreach($this->materials as $material){
        echo $material,"<br>";
    }
}
public function getFinalPrice(){
    return ($this->price-($this->price*$specialTax));
}
}


$p1=new book('back_end',20.4,"back_end resourse","elzero","purple","yasmine");
$publishers=['m7md','yara','menna'];
$p1->setPublisher($publisher);
$p1->choosePublisher();