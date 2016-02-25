<?php
if (get_magic_quotes_gpc())
{
  $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
  while (list($key, $val) = each($process))
  {
    foreach ($val as $k => $v)
    {
      unset($process[$key][$k]);
      if (is_array($v))
      {
        $process[$key][stripslashes($k)] = $v;
        $process[] = &$process[$key][stripslashes($k)];
      }
      else
      {
        $process[$key][stripslashes($k)] = stripslashes($v);
      }
    }
  }
  unset($process);
  }
  if (isset($_GET['addstory']))
{
include 'submitform.html.php';
exit();
}
try
{
$pdo = new PDO('mysql:host=localhost;dbname=fitlifestyle', 'fitlifestyle',
'bullie666');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
$error = 'Oops! Looks like you are Unable to login. check to see that you have no errors. ' .$e->getMessage(); 
include 'error.html.php';
exit();
}
if (isset($_POST['storytext']))
{
try
{
$sql = 'INSERT INTO story SET
storytext = :storytext,
storydate = CURDATE()';
$s = $pdo->prepare($sql);
$s->bindValue(':storytext', $_POST['storytext']);
$s->execute();
}
catch (PDOException $e)
{
$error = 'Error adding submitted story: ' . $e->getMessage();
include 'error.html.php';
exit();
}
header('Location: .');
exit();
}
try
{
$sql = 'SELECT id,storytext
 FROM story';
$result = $pdo->query($sql);
}
catch (PDOException $e)
{
$error = 'Error fetching stories: ' . $e->getMessage();
include 'error.html.php';
exit();
}
foreach ($result as $row)
{
$stories[] = array(
'id' => $row['id'],
'text' => $row['storytext'],
);
}
include 'stories.html.php';
