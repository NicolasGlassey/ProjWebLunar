<?php
/**
 * @file      dbConnector.php
 * @brief     Connect the server with the database
 * @author    Created by Nathan Chauveau
 * @version   16.06.2022
 */

/**
 * @param $query
 * @return array|false|null
 */
function executeQuerySelect($query)
{
    $queryResult = null;

    $dbConnection = openDBConnection();
    if ($dbConnection != null) {
        $statement = $dbConnection->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll();
    }
    $dbConnection = null;
    return $queryResult;
}

/**
 * @return PDO|null
 */
function openDBConnection(): ?PDO
{
    $tempDTConnection = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'projweblunar';
    $username = 'admin'; //TODO a modifier avec celui du serveur (admin)
    $userPsw = 'Pa$$w0rd';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDTConnection = new PDO($dsn, $username, $userPsw);
    } catch (PDOEception $exception) {
        echo 'Connection failed' . $exception->getMessage();
    }
    return $tempDTConnection;
}