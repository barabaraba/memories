#database must be in odbc.ini

$connect = odbc_connect("servername", "user", "pass");
$result = odbc_exec($connect, "select * from table");
$row=odbc_fetch_array($result);
