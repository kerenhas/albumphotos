<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albums
 *
 * @ORM\Table(name="albums", indexes={@ORM\Index(name="FK_photo", columns={"idPhotos"}), @ORM\Index(name="FK_user", columns={"idUser"})})
 * @ORM\Entity
 */
class Albums
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAlbum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalbum;

    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="idPhotos", type="integer", nullable=false)
     */
    private $idphotos;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    public function getIdalbum(): ?int
    {
        return $this->idalbum;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdphotos(): ?int
    {
        return $this->idphotos;
    }

    public function setIdphotos(int $idphotos): self
    {
        $this->idphotos = $idphotos;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


}
