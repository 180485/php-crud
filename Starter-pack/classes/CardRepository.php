<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;
 
 

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        
        
    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one
        /*return [
           // ['name' => 'Bulbasaur'],
            ['name' => 'Ivysaur'],
            ['name' => 'Venusaur.'],
            ['name' => 'Charmander'],
            ['name' => 'Charmeleon'],
            ['name' => 'Charizard'],
            ['name' => 'Squirtle'],
            ['name' => 'Wartortle'],
    
        ];*/

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)
        $stmt = $this->databaseManager->database->query("SELECT * FROM card");
        while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['name'];
        return $stmt;
       
        }
        
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}