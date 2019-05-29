<?php
session_start();

function	get_data()
{
	if ((isset($_POST['login']) && $_POST['login'] != NULL) &&
		(isset($_POST['passwd']) && $_POST['passwd'] != NULL) &&
		(isset($_POST['submit']) && $_POST['submit'] === "OK"))
	{
		$tab['login'] = $_POST['login'];
		$tab['passwd'] = hash(sha256, $_POST['passwd']);
	}
	else
	{
		echo "ERROR01\n";
		exit();
	}
	return ($tab);
}

$path = "../private";
$file = $path."/passwd";

$tab = get_data();
if (!file_exists($path))
{
	mkdir ("../private/");
	mkdir ($path);
}

if (!file_exists($file))
{
	$relize[] = $tab;
	$srelize[] = serialize($relize);
	file_put_contents($file, $srelize);
}
else
{
	$relize = unserialize(file_get_contents($file));
	foreach ($relize as $elem)
	{
		foreach ($elem as $login=>$value) {
		if ($value == $tab['login']) {
			echo "ERROR\n";
			exit();
		}
	}
	}
	$relize[] = $tab;
	$srelize = serialize($relize);
	file_put_contents($file, $srelize);
}
header('Location: ../index.html');
echo "OK\n";
?>
