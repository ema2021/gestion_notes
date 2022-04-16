<?php
class Etudiant
{
    public function __construct($nom, $maths, $info)
    {
        $this->nom = $nom;
        $this->maths = $maths;
        $this->info = $info;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getMaths()
    {
        return $this->maths;
    }
    public function setMaths($maths)
    {
        $this->maths = $maths;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function __destruct()
    {
<<<<<<< HEAD
        return "Etudiant ( " . $this->nom . ") a ete supprime";
=======
        return "Etudiant ( " . $this->nom . " ) a ete supprime";
>>>>>>> master
    }
    public function __toString()
    {
        return "Etudiant ( " . $this->nom . "," . $this->maths . "," . $this->info . ")";
    }
    public function avg()
    {
        return ($this->maths + $this->info) / 2;
    }
    public
    function mention()
    {
        $mention = '';
        if ($this->avg() < 10) {
            $mention = 'Mauvais';
        } else {
            if ($this->avg() < 12) {
                $mention = 'Assez Bien';
            } else {
                if ($this->avg() < 15) {
                    $mention = 'Assez Bien';
                } else {
                    if ($this->avg() < 18) {
                        $mention = 'Très Bien';
                    } else {
                        $mention = 'Excellent';
                    }
                }
            }
        }
        return $mention;
    }
}
