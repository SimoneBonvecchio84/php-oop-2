<?php
trait Weightable {
   private float $weight;

   /**
    * Get the value of weight
    */ 
   public function getWeight()
   {
      return $this->weight;
   }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        if($weight >= 0.1 || $weight <= 100 ) {
            throw new Exception("Peso non valido");
        }
    }
}