<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $name;
    private $password;
    private $dbname;
  
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $database;

    public function __construct(string $host, string $name, string $password)
    {
    
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
       
    }

    public function connect()
    {
       
        try{
            $dsn = "mysql:host=localhost;dbname=curd";
            $conn = new PDO($dsn, $this->name, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->database =$conn;

           
        }catch (PDOExpeption $e){
            echo "connection failed".$e->getMessage();
        }
        
    }
}
