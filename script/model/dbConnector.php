<?php
/**
 * @file      dbConnector.php
 * @brief     Connect the server with the database
 * @author    Created by Nathan Chauveau
 * @version   16.06.2022
 */

/**
 * @param $query
 * @return null
 */
function executeQuerySelect($query)
{
    $queryResult = null;

    $dbConnection = openDBConnection();
    if ($dbConnection != null) {
        $statement = $dbConnection->prepare($query); //Query prepare
        $statement->execute(); //Execute query
        $queryResult = $statement->fetchAll(); //prepart result for client
    }
    $dbConnection = null; //Close connection
    return $queryResult;
}

function openDBConnection()
{
    $tempDTConnection = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'projweblunar';
    $username = ''; //TODO a modifier avec celui du serveur (admin)
    $userPsw = ''; //TODO a modifier avec celui du serveur (password)
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDTConnection = new PDO($dsn, $username, $userPsw);
    } catch (PDOEception $eception) {
        echo 'Connection faild' . $eception->getMessage();
    }
    return $tempDTConnection;
}

//class for exeptions' management
class ModelDataExeption
{

}