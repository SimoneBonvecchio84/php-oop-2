<?php
require_once __DIR__ ."/../trait/weightable.php";



class Products {
    use Weightable;

    protected string $name;
    protected float  $price;
    protected string $image;
    protected string $type;

     public function __construct(string $name, float $price, string $image, string $type)
    {
        $this->name  = $name;
        $this->price = $price; 
        $this->image = $image;
        $this->type  = $type; 

        if(!in_array($type,["Cane", "Gatto"])){
            throw new Exception("Categoria non valida");
        }
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        if($price > 1 || $price < 300) {
            throw new Exception("Prezzo inserito non valido");
        }
    }
    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

        /**
         * Get the value of image
         */ 
        public function getImage()
        //se l immagine esiste e non è vuota restituiscimi l immagine
        {
            if(isset($this->image) && !empty($this->image)){
                return $this->image;
            }
        }

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

}