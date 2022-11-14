<?php

namespace  App\Entity;


class PropertySearch{


    private $Price;

    private $BureauType;

    private $Surface;

    private $DateStart;

    private $DateEnd;

    private $NmbrePer;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param mixed $Price
     * @return PropertySearch
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBureauType()
    {
        return $this->BureauType;
    }

    /**
     * @param mixed $BureauType
     * @return PropertySearch
     */
    public function setBureauType($BureauType)
    {
        $this->BureauType = $BureauType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurface()
    {
        return $this->Surface;
    }

    /**
     * @param mixed $Surface
     * @return PropertySearch
     */
    public function setSurface($Surface)
    {
        $this->Surface = $Surface;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateStart()
    {
        return $this->DateStart;
    }

    /**
     * @param mixed $DateStart
     * @return PropertySearch
     */
    public function setDateStart($DateStart)
    {
        $this->DateStart = $DateStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->DateEnd;
    }

    /**
     * @param mixed $DateEnd
     * @return PropertySearch
     */
    public function setDateEnd($DateEnd)
    {
        $this->DateEnd = $DateEnd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNmbrePer()
    {
        return $this->NmbrePer;
    }

    /**
     * @param mixed $NmbrePer
     * @return PropertySearch
     */
    public function setNmbrePer($NmbrePer)
    {
        $this->NmbrePer = $NmbrePer;
        return $this;
    }

}