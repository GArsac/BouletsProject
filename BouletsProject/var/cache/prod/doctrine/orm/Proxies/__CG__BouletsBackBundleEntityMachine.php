<?php

namespace Proxies\__CG__\Boulets\BackBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Machine extends \Boulets\BackBundle\Entity\Machine implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'id', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'ip', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'nom', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'type', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'ram', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'disque', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'statut', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'incident', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'date', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'id_salle'];
        }

        return ['__isInitialized__', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'id', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'ip', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'nom', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'type', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'ram', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'disque', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'statut', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'incident', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'date', '' . "\0" . 'Boulets\\BackBundle\\Entity\\Machine' . "\0" . 'id_salle'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Machine $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIp($ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIp', [$ip]);

        return parent::setIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIp', []);

        return parent::getIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setRam($ram)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRam', [$ram]);

        return parent::setRam($ram);
    }

    /**
     * {@inheritDoc}
     */
    public function getRam()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRam', []);

        return parent::getRam();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisque($disque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisque', [$disque]);

        return parent::setDisque($disque);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisque()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisque', []);

        return parent::getDisque();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut($statut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setIncident($incident)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIncident', [$incident]);

        return parent::setIncident($incident);
    }

    /**
     * {@inheritDoc}
     */
    public function getIncident()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIncident', []);

        return parent::getIncident();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setId_salle($id_salle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId_salle', [$id_salle]);

        return parent::setId_salle($id_salle);
    }

    /**
     * {@inheritDoc}
     */
    public function getId_salle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId_salle', []);

        return parent::getId_salle();
    }

}
