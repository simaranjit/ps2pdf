<?php
ini_set('max_execution_time',0);

function mediaTimeDeFormater($seconds)
{
    if (!is_numeric($seconds))
        throw new Exception("Invalid Parameter Type!");


    $ret = "";

    $hours = (string )floor($seconds / 3600);
    $secs = (string )$seconds % 60;
    $mins = (string )floor(($seconds - ($hours * 3600)) / 60);

    if (strlen($hours) == 1)
        $hours = "0" . $hours;
    if (strlen($secs) == 1)
        $secs = "0" . $secs;
    if (strlen($mins) == 1)
        $mins = "0" . $mins;

    if ($hours == 0)
        $ret = "$mins:$secs";
    else
        $ret = "$hours:$mins:$secs";

    return $ret;
}


$files = scandir('files');
$total = count($files)-2; // ./ and ../
$i = 1;
foreach ($files as $file) {
if ($file == '.' or $file == '..') {
	continue;
}
$startTime = time();
$info = pathinfo('files/'.$file);
$name = $info['filename'];
$extension = $info['extension'];
$percent = round($i/$total*100);
	echo "Fixing file: ". 'files/'.$file." ($percent%)\n";
	if ($extension == 'ps') {
		$command = 'utils\ghost\gs9.19\bin\gswin32c.exe ^ -sDEVICE=pdfwrite ^ -o "files/'.$name.'.pdf" ^ "files/'.$file.'"';
	
		exec($command);
		
		unlink('files/'.$file);
	}
	$i++;
}
$endTime = time();

$totalTime = $endTime-$startTime;

echo mediaTimeDeFormater($totalTime);
