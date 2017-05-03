<?php
/**
 * Klasės Publication esmė yra laikyti duomenis.
 * Kadangi mes norime turėti daugiau lankstumo, todėl properčius darome privačius ir kiekvienam
 * iš jų sukuriame po setterį ir getterį (pvz getId, setId metodai). Taip mes galime vykdyti
 * betkokią logiką duomenų paėmimui ar įrašymui (pvz. galime propertyje saugoti Super Ultra HD
 * kokybės nuotraukas, bet parodant jas (getteryje), šiek tiek apkarpyti, kad sumažinti duomenų
 * srauto poreikius)
 */
class Publication {
    /**
     * @var id
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $content;
    /**
     * @var array
     */
    private $comments;
    /**
     * Getter for id property
     *
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Setter for id property
     *
     * @param id $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Getter for title property
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Setter for title property
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * Getter for content property
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Setter for content property
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    /**
     * Getter for comments property
     *
     * @return array
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Setter for comments property
     *
     * @param array $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
}