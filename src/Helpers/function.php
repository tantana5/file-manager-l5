<?php
function file_load($fid){
	return TanTan\FileManager\Models\File::find($fid);
}
