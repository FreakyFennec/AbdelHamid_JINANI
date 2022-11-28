<?php

class Pays
{
    private string $pays;

    public function __construct(string $pays)
    {
        $this->pays = $pays;
    }

    /**
     * Get the value of pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    public function __toString()
    {
        return $this->pays;
    }
}
