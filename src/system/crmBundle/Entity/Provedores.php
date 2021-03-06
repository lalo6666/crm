<?php 
//C:\Users\EduardoHumberto\Desktop\SCAOcrm
//php app/console doctrine:generate:entities system/crmBundle/Entity
namespace system\crmBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="provedores")
 */
class Provedores
{
	
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $nombre;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $contacto;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $direccion;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $estado;
	/**
	* @ORM\Column(type="string", length=100)
	 */
	protected $municipio;
	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $telefono;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $telefono2;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $otro;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $ramo;
	/**
	 * @ORM\Column(type="string", length=50)
	 */
	protected $formaPago;
	/**
	* @ORM\Column(type="string", length=100)
	 */
	protected $email;
	/**
	 * @ORM\Column(type="text")
	 */
	protected $observaciones;
	/**
	 * @ORM\Column(type="text")
	 */
	protected $web;
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $fechaModificacion;
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $orden;
  

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Provedores
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Provedores
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Provedores
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Provedores
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     * @return Provedores
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Provedores
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return Provedores
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set otro
     *
     * @param string $otro
     * @return Provedores
     */
    public function setOtro($otro)
    {
        $this->otro = $otro;

        return $this;
    }

    /**
     * Get otro
     *
     * @return string 
     */
    public function getOtro()
    {
        return $this->otro;
    }

    /**
     * Set ramo
     *
     * @param string $ramo
     * @return Provedores
     */
    public function setRamo($ramo)
    {
        $this->ramo = $ramo;

        return $this;
    }

    /**
     * Get ramo
     *
     * @return string 
     */
    public function getRamo()
    {
        return $this->ramo;
    }

    /**
     * Set formaPago
     *
     * @param string $formaPago
     * @return Provedores
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;

        return $this;
    }

    /**
     * Get formaPago
     *
     * @return string 
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Provedores
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Provedores
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Provedores
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return Provedores
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Provedores
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}
