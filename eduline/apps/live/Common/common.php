<?php
//根据url读取文本
function getDataByUrl($url , $type = true){
	return json_decode(file_get_contents($url) , $type);
}

