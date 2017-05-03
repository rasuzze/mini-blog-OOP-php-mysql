<?php
// jei nėra Repository klasės (t.y. dar failas nebuvo includintas), tai mes jį includiname
if (! class_exists('Repository')) {
    require_once 'Repository.class.php';
}
// analogiškai kaip ir su Repository klase, kadangi mums reikalinga ir Publication klasė,
// tai tikriname ar ji yra. jei ne - includinam ir tada trim
if (! class_exists('Publication')) {
    require_once 'Publication.class.php';
}
class PublicationRepository extends Repository {
    /**
     * Gražina visus įrašus iš duomenų bazės, įmautus į Publication tipo objektus
     *
     * @return array
     */
    public function getAll()
    {
        // pasiimame iš duomenų bazės visus įrašus
        $query = $this->pdo->query("SELECT * FROM `publications`");
        $resultFromDatabase = $query->fetchAll();
        // susikuriame masyvą, į kurį dėsime Publication tipo objektus
        $result = [];
        // bėgame per DB įrašus
        foreach ($resultFromDatabase as $singleResult) {
            // įrašui kuriame po Publication tipo objektą
            $publication = new Publication();
            // surašome įrašo duomenis į Publication tipo objektą per setterius
            $publication->setId($singleResult['id']);
            $publication->setContent($singleResult['content']);
            $publication->setTitle($singleResult['title']);
            // įdedame objektą į masyvą
            $result[] = $publication;
        }
        // gražiname Publication tipo objektų masyvą
        return $result;
    }
    public function delete($item)
    {
        // TODO: Implement delete() method.
    }
    public function getById($id)
    {
        // TODO: Implement getById() method.
    }
    public function save($item)
    {
        // TODO: Implement save() method.
    }
}