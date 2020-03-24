<?php
if (isset($_GET['getDataSetTable']))
{
    getDataSetTable();
}
else if (isset($_GET['getDataSetColumn']))
{
    getDataSetColumn();
}

/**#@+
* function getDataSetColumn()
* Get set() values from a given table column as select options
*
* @since 0.3.1
*
**/
function getDataSetColumn($table, $data, $leadTrim, $followTrimm)
{

    if (empty($leadTrim))
    {
        $leadTrim = 17;
    }
    if (empty($followTrim))
    {
        $leadTrim = 22;
    }
    try{
        $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    } catch(PDOException $ex)
    {
        $_SESSION['error'] = "Could not connect -> ".$ex->getMessage();
        $_SESSION['error_blob'] = $ex;
        header('Location: '.BASE_URL.'/plugins/error/index.php');
        die();
    }

    $query = "SHOW COLUMNS FROM ".DB_PREFIX.$table." LIKE '".$data."'";
    $stmt = $pdo->prepare( $query );
    if (!$stmt)
    {
        $_SESSION['error'] = $pdo->errorInfo();
        header('Location: '.BASE_URL.'/plugins/error/index.php');
        die();
    }

    $result = $stmt -> execute();
    if ($result) 
    {
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        $dataSet = implode($row);
    
        // Remove "set(" at start and ");" at end.
        $dataSet  = substr($dataSet,$leadTrim,strlen($dataSet)-$followTrim);
        $dataSet = preg_split("/','/",$dataSet);
    
        foreach ($dataSet as $key=>$value)
        {
            echo "<option name = '$value' value = '$value'>$value</option>\n";
        };
    }
}


/**#@+
* function getDataTable()
* Get values from a given table column as select options
*
* @since 0.3.1
*
**/
function getDataSetTable($data, $column1, $column2, $leadTrim, $followTrimm)
{
    try{
        $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    } catch(PDOException $ex)
    {
        $_SESSION['error'] = "Could not connect -> ".$ex->getMessage();
        $_SESSION['error_blob'] = $ex;
        header('Location: '.BASE_URL.'/plugins/error/index.php');
        die();
    }

    $result = $pdo->query("SELECT * from ".DB_PREFIX.$data);
    if (!$result)
    {
        $_SESSION['error'] = $pdo->errorInfo();
        header('Location: '.BASE_URL.'/plugins/error/index.php');
        die();
    }

    $dataSet  = substr($dataSet,$leadTrim,strlen($dataSet)-$followTrim);
    $dataSet = preg_split("/','/",$dataSet);

    foreach ($result as $row)
    {
        if( empty($row[$column2]) )
        {
            echo '<option value="'. $row[$column1] . '">'. $row[$column1] .'</option>\n';
        }
        if ( $isRegistration = true)
        {
            echo '<option value="'. $row[$column1] . '">'. $row[$column2] .'</option>\n';
        } else {
            echo '<option value="'. $row[$column1] .' | ' . $row[$column2] . '">'. $row[$column1] .' | '.$row[$column2] . '</option>\n';
        }
    }
    $pdo = null;
}

?>