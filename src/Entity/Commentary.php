<?php 

namespace App\Entity;

class Commentary
{
    public $idCommentary;
    public $author;
    public $date;
    public $content;
    public $visibility;
    public $idArticle;

    /**
     * Get the value of idCommentary
     */ 
    public function getIdCommentary()
    {
        return $this->idCommentary;
    }

    /**
     * Set the value of idCommentary
     *
     * @return  self
     */ 
    public function setIdCommentary($idCommentary)
    {
        $this->idCommentary = $idCommentary;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of visibility
     */ 
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set the value of visibility
     *
     * @return  self
     */ 
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get the value of idArticle
     */ 
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set the value of idArticle
     *
     * @return  self
     */ 
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->setIdCommentary($data["id_commentaire"]);
            $this->setAuthor($data["auteur"]);
            $this->setDate($data["date"]);
            $this->setContent($data["contenu"]);
            $this->setVisibility($data["visibilite"]);
            $this->setIdArticle($data["id_article"]);
        }
    }
}