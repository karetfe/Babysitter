<?php

namespace Proxies\__CG__\BabySitter\BabySitterBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Jaime extends \BabySitter\BabySitterBundle\Entity\Jaime implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'idJaime', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'idpar', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'idagen', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'idbb', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'iduser');
        }

        return array('__isInitialized__', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'idJaime', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'idpar', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'idagen', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'idbb', '' . "\0" . 'BabySitter\\BabySitterBundle\\Entity\\Jaime' . "\0" . 'iduser');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Jaime $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getIdJaime()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdJaime();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdJaime', array());

        return parent::getIdJaime();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdpar($idpar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdpar', array($idpar));

        return parent::setIdpar($idpar);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdpar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdpar', array());

        return parent::getIdpar();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdagen($idagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdagen', array($idagen));

        return parent::setIdagen($idagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdagen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdagen', array());

        return parent::getIdagen();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbb($idbb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbb', array($idbb));

        return parent::setIdbb($idbb);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbb', array());

        return parent::getIdbb();
    }

    /**
     * {@inheritDoc}
     */
    public function setIduser(\BabySitter\BabySitterBundle\Entity\Utilisateur $iduser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIduser', array($iduser));

        return parent::setIduser($iduser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIduser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIduser', array());

        return parent::getIduser();
    }

}
