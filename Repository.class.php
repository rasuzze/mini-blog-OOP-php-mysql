<?php
abstract class Repository {
    /**
     * @var PDO
     */
    protected $pdo;
    /**
     * Kadangi visos mūsų repozitorijos veiks per PDO (mes taip nusprendėm), todėl per konstruktorių gauname
     * tą PDO objektą (šitaip mums nereikia nei duomenų bazės credentialų, nei galvoti kaip prisijungti,
     * mes gauname PDO objektą, kuris jau yra prisijungęs prie DB.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    // Toliau esantys metodai yra abstraktūs - t.y. mes nežinome, kaip jie veikia, bet mes žinome, kad kiekviena
    // repozitorija sugebės paimti visus įrašus, ištrinti vieną, gauti vieną arba išsaugoti į duomenų bazę, nesvarbu
    // ar tai bus komentarų repozitorija, ar publikacijų
    /**
     * @return array
     */
    public abstract function getAll();
    /**
     * @param $item
     * @return void
     */
    public abstract function delete($item);
    /**
     * @param int $id
     * @return mixed
     */
    public abstract function getById($id);
    /**
     * @param $item
     * @return void
     */
    public abstract function save($item);
}