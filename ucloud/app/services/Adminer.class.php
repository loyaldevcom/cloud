<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.7.1
*/error_reporting(6135);$jc=!preg_match('/^(unsafe_raw)?$/',ini_get("filter.default"));if($jc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$hg=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($hg)$$X=$hg;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé��a�'3I��d��!S��:4�+Md�g���ǃ���t��c������b{�H(Ɠєt1�)t�}F�p0��8�\\82�DL>�9`'C��ۗ889�� �xQ��\0�e4��Qʘl��P��V��b���T4�\\�W/����\n��` 7\"h�q��4ZM6�T�\r�r\\��C{h�7\r�x67���J��2.3��9�K��H�,�!m�Ɔo\$�.[\r&�#\$�<��f�)�Z�\0=�r��9��jΪJ��0�c,|�=�������Rs_6��ݷ������Z6�2B�p\\-�1s2��>�� X:\rܺ��3�b����-8SL����K.��-�ҥ\rH@ml�:��;�����J�0LR�2�!���A��2�	m���0eI��-:U\r��9��MWL�0��GcJv2(��F9�`�<�J�7+˚~���}DJ��HW�SN���e�u]1̥(O�LЪ<l��R[u&��H�3�v��U�t6��\$�6���X\"�<��}:O��<3x�O�8��>����C���1����HR��S�d�9��%�U1�Sn�a|.�ԁ`�8���:#���C�2��*[o��4X~�7j�\\���6/�09�\r�;��;V��n�n���މv��k�HB%�.k\">��[�\n���l��p�9�cFZ�s��|�>6 �5�l1V��ΐ�6����7��:�\"Az��de���\\�5*�մ��]�p[*�Am)Kt[�\n8g=;���2z���|���̣4�t8.���N#�ʲ��B\"�9���%���HQw�qd��F����\$&V��Q#�Q'��_�m�̡�� ���\r��h� Xrt0j5����W���4���ד�m����\"CA�F!�엖h>�b0�0�7;8�4Ka���	\0�p	a���HXF��1:�8�U9H��Ió�;�sQ�7F��cLpXM@e�����吞+g(��73O�3p��b�lEE>�Chb%�D�I8��E'�	#)�=%C��j�Y�1��y�h;cA��6�jK�\r���9�\$|������g-Z�o�\0���z���\$+D���V�w*�W��p�J���\\��F�O�'ɲa1�m,_ڧ\r��1�P�o�;\0�5����e\r& 3��^\r��6�MR2T\0���5?~�5����P>�85h��n�1;��\rRL8`�\\��@��`;z\n�\0�ԃ8��9R�yZP@�ib�?ƭv\$�<�%	A\r�?�\0�Sʥ��� �BÞ4JҨ��:�`#Hi�7ε�+}���v���o�J��Vڰ���9���W�2�Q�\r�T�D`��f�� ��w�L�����I]MKd7*rk*j\nAS��jF��-[ezz�r��ʁfU�3��~\\��Z��Z��{)��>>Ѓp���*����;zDb�w��]�mC\n���訓�KB��B���m@�����ִ>�����wU�*N�(ba�ƶ�@f�v�)��`�\0u�D)mD@/4����9j��������HBm1��I��5D��RuE��9��Aӗ=1b�0��e�y��1��s�;��������-�����]s��5�\\��\n1;���Q�^��b��i�;YJ2�d!s����#�kg�hށ]�W)>V��I�x]�r���;6�JLcpr��d{py�M��-�UVH�5'\nt��в�l���pH���o�e�Z�Ϩ��q�e��X�F�`Gy\r�!�Ww*����D��u�t%���d�Q��/�p�:�ih���t&���P��e,J͌��t�!�O�7��6�GgR���C[��sk�vqU�}y�h�AGV�����|�lF�ޅL^�.��]u&w�!��[jn��n��ڏ[k�C��v����k�rmOɭ��J>��WT�0����\n�pM�C����b�t��VG|oy8�����c�����");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($Gc){$Zc=substr($Gc,-1);return
str_replace($Zc.$Zc,$Zc,substr($Gc,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($Ae,$jc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Ae)){foreach($X
as$Tc=>$W){unset($Ae[$y][$Tc]);if(is_array($W)){$Ae[$y][stripslashes($Tc)]=$W;$Ae[]=&$Ae[$y][stripslashes($Tc)];}else$Ae[$y][stripslashes($Tc)]=($jc?$W:stripslashes($W));}}}}function
bracket_escape($Gc,$xa=false){static$Uf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Gc,($xa?array_flip($Uf):$Uf));}function
h($qf){return
htmlspecialchars(str_replace("\0","",$qf),ENT_QUOTES);}function
nbsp($qf){return(trim($qf)!=""?h($qf):"&nbsp;");}function
nl_br($qf){return
str_replace("\n","<br>",$qf);}function
checkbox($E,$Y,$Ja,$Xc="",$Qd="",$Ma=""){$K="<input type='checkbox' name='$E' value='".h($Y)."'".($Ja?" checked":"").($Qd?' onclick="'.h($Qd).'"':'').">";return($Xc!=""||$Ma?"<label".($Ma?" class='$Ma'":"").">$K".h($Xc)."</label>":$K);}function
optionlist($Td,$cf=null,$ng=false){$K="";foreach($Td
as$Tc=>$W){$Ud=array($Tc=>$W);if(is_array($W)){$K.='<optgroup label="'.h($Tc).'">';$Ud=$W;}foreach($Ud
as$y=>$X)$K.='<option'.($ng||is_string($y)?' value="'.h($y).'"':'').(($ng||is_string($y)?(string)$y:$X)===$cf?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($E,$Td,$Y="",$Pd=true){if($Pd)return"<select class='form-control' style='max-width: 220px; display: inline;' name='".h($E)."'".(is_string($Pd)?' onchange="'.h($Pd).'"':"").">".optionlist($Td,$Y)."</select>";$K="";foreach($Td
as$y=>$X)$K.="<label><input type='radio' name='".h($E)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$K;}function
confirm($db=""){return" onclick=\"return confirm('".'Are you sure?'.($db?" (' + $db + ')":"")."');\"";}function
print_fieldset($t,$ed,$tg=false,$Qd=""){echo"<fieldset><h2><a href='#fieldset-$t' onclick=\"".h($Qd)."return !toggle('fieldset-$t');\">$ed</a></h2><div id='fieldset-$t'".($tg?"":" class='hidden'").">\n";}function
bold($Da){return($Da?" class='active'":"");}function
odd($K=' class="odd"'){static$s=0;if(!$K)$s=-1;return($s++%2?$K:'');}function
js_escape($qf){return
addcslashes($qf,"\r\n'\\/");}function
json_row($y,$X=null){static$kc=true;if($kc)echo"{";if($y!=""){echo($kc?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$kc=false;}else{echo"\n}\n";$kc=true;}}function
ini_bool($Kc){$X=ini_get($Kc);return(preg_match('/^(on|true|yes)$/i',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($qf){global$g;return$g->quote($qf);}function
get_vals($I,$e=0){global$g;$K=array();$J=$g->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$e];}return$K;}function
get_key_vals($I,$h=null){global$g;if(!is_object($h))$h=$g;$K=array();$J=$h->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$h=null,$l="<p class='error'>"){global$g;$Ya=(is_object($h)?$h:$g);$K=array();$J=$Ya->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($h)&&$l&&defined("PAGE_HEADER"))echo$l.error()."\n";return$K;}function
unique_array($L,$v){foreach($v
as$u){if(preg_match("/PRIMARY|UNIQUE/",$u["type"])){$K=array();foreach($u["columns"]as$y){if(!isset($L[$y]))continue
2;$K[$y]=$L[$y];}return$K;}}}function
where($Z,$n=array()){global$x;$K=array();$uc='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$e=(preg_match($uc,$y)?$y:idf_escape($y));$K[]=$e.(($x=="sql"&&preg_match('/^[0-9]*\\.[0-9]*$/',$X))||$x=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($n[$y],q($X)));if($x=="sql"&&preg_match("/[^ -@]/",$X))$K[]="$e = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$y)$K[]=(preg_match($uc,$y)?$y:idf_escape($y))." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$n=array()){parse_str($X,$Ia);remove_slashes(array(&$Ia));return
where($Ia,$n);}function
where_link($s,$e,$Y,$Rd="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Rd:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$n,$N=array()){$K="";foreach($f
as$y=>$X){if($N&&!in_array(idf_escape($y),$N))continue;$sa=convert_field($n[$y]);if($sa)$K.=", $sa AS ".idf_escape($y);}return$K;}function
cookie($E,$Y){global$ba;$ge=array($E,(preg_match("/\n/",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ge[]=true;return
call_user_func_array('setcookie',$ge);}function
restart_session(){ return false; if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($yb,$O,$V,$k=null){global$zb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($zb))."|username|".($k!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($yb!="server"||$O!=""?urlencode($yb)."=".urlencode($O)."&":"")."username=".urlencode($V).($k!=""?"&db=".urlencode($k):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect_local($A,$C=null){if($C!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$C;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect_local($I,$A,$C,$Ge=true,$Xb=true,$dc=false){global$g,$l,$b;$Kf="";if($Xb){$mf=microtime();$dc=!$g->query($I);$Kf="; -- ".format_time_local($mf,microtime());}$lf="";if($I)$lf=$b->messageQuery($I.$Kf);if($dc){$l=error().$lf;return
false;}if($Ge)redirect_local($A,$C.$lf);return
true;}function
queries($I=null){global$g;static$De=array();if($I===null)return
implode("\n",$De);$mf=microtime();$K=$g->query($I);$De[]=(preg_match('/;$/',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I)."; -- ".format_time_local($mf,microtime());return$K;}function
apply_queries($I,$S,$Sb='table'){foreach($S
as$Q){if(!queries("$I ".$Sb($Q)))return
false;}return
true;}function
queries_redirect_local($A,$C,$Ge){return
query_redirect_local(queries(),$A,$C,$Ge,false,!$Ge);}function
format_time_local($mf,$Mb){return
sprintf('%.3f s',max(0,array_sum(explode(" ",$Mb))-array_sum(explode(" ",$mf))));}function
remove_from_uri($fe=""){return
substr(preg_replace("~(?<=[?&])($fe".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$hb){return" ".($F==$hb?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F":"")).'">'.($F+1)."</a>");}function
get_file($y,$ob=false){$hc=$_FILES[$y];if(!$hc)return
null;foreach($hc
as$y=>$X)$hc[$y]=(array)$X;$K='';foreach($hc["error"]as$y=>$l){if($l)return$l;$E=$hc["name"][$y];$Rf=$hc["tmp_name"][$y];$Za=file_get_contents($ob&&preg_match('/\\.gz$/',$E)?"compress.zlib://$Rf":$Rf);if($ob){$mf=substr($Za,0,3);if(function_exists("iconv")&&preg_match("/^\xFE\xFF|^\xFF\xFE/",$mf,$Ne))$Za=iconv("utf-16","utf-8",$Za);elseif($mf=="\xEF\xBB\xBF")$Za=substr($Za,3);}$K.=$Za."\n\n";}return$K;}function
upload_error($l){$qd=($l==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($l?'Unable to upload a file.'.($qd?" ".sprintf('Maximum allowed file size is %sB.',$qd):""):'File does not exist.');}function
repeat_pattern($G,$fd){return
str_repeat("$G{0,65535}",$fd/65535)."$G{0,".($fd%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($qf,$fd=80,$uf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$fd).")($)?)u",$qf,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$fd).")($)?)",$qf,$B);return
h($B[1]).$uf.(isset($B[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Ae,$Hc=array()){while(list($y,$X)=each($Ae)){if(is_array($X)){foreach($X
as$Tc=>$W)$Ae[$y."[$Tc]"]=$W;}elseif(!in_array($y,$Hc))echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$ec=false){$K=table_status($Q,$ec);return($K?$K:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$K=array();foreach($b->foreignKeys($Q)as$o){foreach($o["source"]as$X)$K[$X][]=$o;}return$K;}function
enum_input($U,$ua,$m,$Y,$Lb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$ld);$K=($Lb!==null?"<label><input type='$U'$ua value='$Lb'".((is_array($Y)?in_array($Lb,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($ld[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ja=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$K.=" <label><input type='$U'$ua value='".($s+1)."'".($Ja?' checked':'').'>'.h($b->editVal($X,$m)).'</label>';}return$K;}function
input($m,$Y,$q){global$g,$cg,$b,$x;$E=h(bracket_escape($m["field"]));echo"<td class='function'>";$Pe=($x=="mssql"&&$m["auto_increment"]);if($Pe&&!$_POST["save"])$q=null;$vc=(isset($_GET["select"])||$Pe?array("orig"=>'original'):array())+$b->editFunctions($m);$ua=" name='fields[$E]'";if($m["type"]=="enum")echo
nbsp($vc[""])."<td>".$b->editInput($_GET["edit"],$m,$ua,$Y);else{$kc=0;foreach($vc
as$y=>$X){if($y===""||!$X)break;$kc++;}$Pd=($kc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($m["field"])))."]']; if ($kc > f.selectedIndex) f.selectedIndex = $kc;\"":"");$ua.=$Pd;echo(count($vc)>1?html_select("function[$E]",$vc,$q===null||in_array($q,$vc)||isset($vc[$q])?$q:"","functionChange(this);"):nbsp(reset($vc))).'<td>';$Mc=$b->editInput($_GET["edit"],$m,$ua,$Y);if($Mc!="")echo$Mc;elseif($m["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$ld);foreach($ld[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ja=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$E][$s]' value='".(1<<$s)."'".($Ja?' checked':'')."$Pd>".h($b->editVal($X,$m)).'</label>';}}elseif(preg_match('/blob|bytea|raw|file/',$m["type"])&&ini_bool("file_uploads"))echo"<input type='file' class='form-control' name='fields-$E'$Pd>";elseif(($If=preg_match('/text|lob/',$m["type"]))||preg_match("/\n/",$Y)){if($If&&$x!="sqlite")$ua.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$ua.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea class='form-control' $ua>".h($Y).'</textarea>';}else{$sd=(!preg_match('/int/',$m["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$m["length"],$B)?((preg_match("/binary/",$m["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$m["unsigned"]?1:0)):($cg[$m["type"]]?$cg[$m["type"]]+($m["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('/time/',$m["type"]))$sd+=7;echo"<input".(preg_match('/int/',$m["type"])?" type='number'":"")." class='form-control' value='".h($Y)."'".($sd?" maxlength='$sd'":"").(preg_match('/char|binary/',$m["type"])&&$sd>20?" size='40'":"")."$ua>";}}}function
process_input($m){global$b;$Gc=bracket_escape($m["field"]);$q=$_POST["function"][$Gc];$Y=$_POST["fields"][$Gc];if($m["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($m["auto_increment"]&&$Y=="")return
null;if($q=="orig")return($m["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($m["field"]):false);if($q=="NULL")return"NULL";if($m["type"]=="set")return
array_sum((array)$Y);if(preg_match('/blob|bytea|raw|file/',$m["type"])&&ini_bool("file_uploads")){$hc=get_file("fields-$Gc");if(!is_string($hc))return
false;return
q($hc);}return$b->processInput($m,$Y,$q);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$pc=false;foreach(table_status('',true)as$Q=>$R){$E=$b->tableName($R);if(isset($R["Engine"])&&$E!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$J=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$J||$J->fetch_row()){if(!$pc){echo"<ul>\n";$pc=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$E</a>\n":"$E: <span class='error'>".error()."</span>\n");}}}echo($pc?"</ul>":"<p class='message alert alert-info'>".'No tables.')."\n";}function
dump_headers($Fc,$zd=false){global$b;$K=$b->dumpHeaders($Fc,$zd);$de=$_POST["output"];if($de!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Fc).".$K".($de!="file"&&!preg_match('/[^0-9a-z]/',$de)?".$de":""));session_write_close();return$K;}function
dump_csv($L){foreach($L
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($q,$e){return($q?($q=="unixepoch"?"DATETIME($e, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$e)"):$e);}function
password_file($i){$vb=ini_get("upload_tmp_dir");if(!$vb){if(function_exists('sys_get_temp_dir'))$vb=sys_get_temp_dir();else{$ic=@tempnam("","");if(!$ic)return
false;$vb=dirname($ic);unlink($ic);}}$ic="$vb/adminer.key";$K=@file_get_contents($ic);if($K||!$i)return$K;$rc=@fopen($ic,"w");if($rc){$K=md5(uniqid(mt_rand(),true));fwrite($rc,$K);fclose($rc);}return$K;}function
is_mail($Ib){$ta='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$G="$ta+(\\.$ta+)*@($xb?\\.)+$xb";return
preg_match("(^$G(,\\s*$G)*\$)i",$Ib);}function
is_url($qf){$xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($xb?\\.)+$xb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$qf,$B)?strtolower($B[1]):"");}function
is_shortable($m){return
preg_match('/char|text|lob|geometry|point|linestring|polygon/',$m["type"]);}function
slow_query($I){global$b,$T;$k=$b->database();if(support("kill")&&is_object($h=connect())&&($k==""||$h->select_db($k))){$Vc=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Vc,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;$K=@get_key_vals($I,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";}return
array_keys($K);}function
lzw_decompress($Aa){$ub=256;$Ba=8;$Oa=array();$Qe=0;$Re=0;for($s=0;$s<strlen($Aa);$s++){$Qe=($Qe<<8)+ord($Aa[$s]);$Re+=8;if($Re>=$Ba){$Re-=$Ba;$Oa[]=$Qe>>$Re;$Qe&=(1<<$Re)-1;$ub++;if($ub>>$Ba)$Ba++;}}$tb=range("\0","\xFF");$K="";foreach($Oa
as$s=>$Na){$Hb=$tb[$Na];if(!isset($Hb))$Hb=$xg.$xg[0];$K.=$Hb;if($s)$tb[]=$xg.$Hb[0];$xg=$Hb;}return$K;}global$b,$g,$zb,$Fb,$Pb,$l,$vc,$zc,$ba,$Lc,$x,$ca,$Yc,$Od,$oe,$rf,$T,$Wf,$cg,$jg,$ga;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$ge=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ge[]=true;call_user_func_array('session_set_cookie_params',$ge);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$jc);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Vf,$Fd=null){if(is_array($Vf)){$qe=($Fd==1?0:1);$Vf=$Vf[$qe];}$Vf=str_replace("%d","%s",$Vf);$Fd=number_format($Fd,0,".",',');return
sprintf($Vf,$Fd);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$qe=array_search("SQL",$b->operators);if($qe!==false)unset($b->operators[$qe]);}function
dsn($Cb,$V,$ne,$Wb='auth_error'){set_exception_handler($Wb);parent::__construct($Cb,$V,$ne);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$dg=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$m=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$m];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$zb=array();$zb=array("server"=>"MySQL")+$zb;if(!defined("DRIVER")){$te=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$V,$ne){mysqli_report(MYSQLI_REPORT_OFF);list($Dc,$pe)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$Dc:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$ne!=""?$ne:ini_get("mysqli.default_pw")),null,(is_numeric($pe)?$pe:ini_get("mysqli.default_port")),(!is_numeric($pe)?$pe:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$m=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$m];}function
quote($qf){return"'".$this->escape_string($qf)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$ne){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$ne"!=""?$ne:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($qf){return"'".mysql_real_escape_string($qf,$this->_link)."'";}function
select_db($kb){return
mysql_select_db($kb,$this->_link);}function
query($I,$dg=false){$J=@($dg?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$m=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$m);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$ne){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$ne);$this->query("SET NAMES utf8");return
true;}function
select_db($kb){return$this->query("USE ".idf_escape($kb));}function
query($I,$dg=false){$this->setAttribute(1000,!$dg);return
parent::query($I,$dg);}}}function
idf_escape($Gc){return"`".str_replace("`","``",$Gc)."`";}function
table($Gc){return
idf_escape($Gc);}function
connect(){global$b;$g=new
Min_DB;$gb=$b->credentials();if($g->connect($gb[0],$gb[1],$gb[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$K=$g->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Ye=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Ye;return$K;}function
get_databases($lc){global$g;$K=get_session("dbs");if($K===null){$I=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($lc?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$z,$Hd=0,$ef=" "){return" $I$Z".($z!==null?$ef."LIMIT $z".($Hd?" OFFSET $Hd":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($k,$d){global$g;$K=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$K=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$K=$d[$B[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("/YES|DEFAULT/",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($j){$K=array();foreach($j
as$k)$K[$k]=count(get_vals("SHOW TABLES IN ".idf_escape($k)));return$K;}function
table_status($E="",$ec=false){global$g;$K=array();foreach(get_rows($ec&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($E!=""?"AND TABLE_NAME = ".q($E):"ORDER BY Name"):"SHOW TABLE STATUS".($E!=""?" LIKE ".q(addcslashes($E,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($E!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){return
preg_match("/InnoDB|IBMDB2I/i",$R["Engine"]);}function
fields($Q){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$B);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($L["Default"]!=""||preg_match("/char|set/",$B[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('/^on update (.+)/i',$L["Extra"],$B)?$B[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(explode(",",$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($Q,$h=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];$K[$L["Key_name"]]["descs"][]=null;}return$K;}function
foreign_keys($Q){global$g,$Od;static$G='`(?:[^`]|``)+`';$K=array();$eb=$g->result("SHOW CREATE TABLE ".table($Q),1);if($eb){preg_match_all("~CONSTRAINT ($G) FOREIGN KEY \\(((?:$G,? ?)+)\\) REFERENCES ($G)(?:\\.($G))? \\(((?:$G,? ?)+)\\)(?: ON DELETE ($Od))?(?: ON UPDATE ($Od))?~",$eb,$ld,PREG_SET_ORDER);foreach($ld
as$B){preg_match_all("~$G~",$B[2],$jf);preg_match_all("~$G~",$B[5],$Ef);$K[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$jf[0]),"target"=>array_map('idf_unescape',$Ef[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$K;}function
view($E){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($E),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$y=>$X)asort($K[$y]);return$K;}function
information_schema($k){global$g;return($g->server_info>=5&&$k=="information_schema")||($g->server_info>=5.5&&$k=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(preg_match('/ at line ([0-9]+)$/',$g->error,$Ne))return$Ne[1]-1;}function
create_database($k,$Ra){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($k).($Ra?" COLLATE ".q($Ra):""));}function
drop_databases($j){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($E,$Ra){if(create_database($E,$Ra)){$Oe=array();foreach(tables_list()as$Q=>$U)$Oe[]=table($Q)." TO ".idf_escape($E).".".table($Q);if(!$Oe||queries("RENAME TABLE ".implode(", ",$Oe))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$wa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$wa="";break;}if($u["type"]=="PRIMARY")$wa=" UNIQUE";}}return" AUTO_INCREMENT$wa";}function
alter_table($Q,$E,$n,$mc,$Va,$Nb,$Ra,$va,$ke){$ra=array();foreach($n
as$m)$ra[]=($m[1]?($Q!=""?($m[0]!=""?"CHANGE ".idf_escape($m[0]):"ADD"):" ")." ".implode($m[1]).($Q!=""?$m[2]:""):"DROP ".idf_escape($m[0]));$ra=array_merge($ra,$mc);$nf="COMMENT=".q($Va).($Nb?" ENGINE=".q($Nb):"").($Ra?" COLLATE ".q($Ra):"").($va!=""?" AUTO_INCREMENT=$va":"").$ke;if($Q=="")return
queries("CREATE TABLE ".table($E)." (\n".implode(",\n",$ra)."\n) $nf");if($Q!=$E)$ra[]="RENAME TO ".table($E);$ra[]=$nf;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$ra));}function
alter_indexes($Q,$ra){foreach($ra
as$y=>$X)$ra[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$ra));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($sg){return
queries("DROP VIEW ".implode(", ",array_map('table',$sg)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$sg,$Ef){$Oe=array();foreach(array_merge($S,$sg)as$Q)$Oe[]=table($Q)." TO ".idf_escape($Ef).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Oe));}function
copy_tables($S,$sg,$Ef){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$E=($Ef==DB?table("copy_$Q"):idf_escape($Ef).".".table($Q));if(!queries("DROP TABLE IF EXISTS $E")||!queries("CREATE TABLE $E LIKE ".table($Q))||!queries("INSERT INTO $E SELECT * FROM ".table($Q)))return
false;}foreach($sg
as$Q){$E=($Ef==DB?table("copy_$Q"):idf_escape($Ef).".".table($Q));$rg=view($Q);if(!queries("DROP VIEW IF EXISTS $E")||!queries("CREATE VIEW $E AS $rg[select]"))return
false;}return
true;}function
trigger($E){if($E=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($E));return
reset($M);}function
triggers($Q){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($E,$U){global$g,$Pb,$Lc,$cg;$pa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$bg="((".implode("|",array_merge(array_keys($cg),$pa)).")\\b(?:\\s*\\(((?:[^'\")]*|$Pb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$G="\\s*(".($U=="FUNCTION"?"":$Lc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$bg";$i=$g->result("SHOW CREATE $U ".idf_escape($E),2);preg_match("~\\(((?:$G\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$bg\\s+":"")."(.*)~is",$i,$B);$n=array();preg_match_all("~$G\\s*,?~is",$B[1],$ld,PREG_SET_ORDER);foreach($ld
as$fe){$E=str_replace("``","`",$fe[2]).$fe[3];$n[]=array("field"=>$E,"type"=>strtolower($fe[5]),"length"=>preg_replace_callback("~$Pb~s",'normalize_enum',$fe[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fe[8] $fe[7]"))),"null"=>1,"full_type"=>$fe[4],"inout"=>strtoupper($fe[1]),"collation"=>strtolower($fe[9]),);}if($U!="FUNCTION")return
array("fields"=>$n,"definition"=>$B[11]);return
array("fields"=>$n,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$P){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")");}function
insert_update($Q,$P,$we){foreach($P
as$y=>$X)$P[$y]="$y = $X";$kg=implode(", ",$P);return
queries("INSERT INTO ".table($Q)." SET $kg ON DUPLICATE KEY UPDATE $kg");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$I){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($af){return
true;}function
create_sql($Q,$va){global$g;$K=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$va)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($kb){return"USE ".idf_escape($kb);}function
trigger_sql($Q,$sf){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$L)$K.="\n".($sf=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($m){if(preg_match("/binary/",$m["type"]))return"HEX(".idf_escape($m["field"]).")";if($m["type"]=="bit")return"BIN(".idf_escape($m["field"])." + 0)";if(preg_match("/geometry|point|linestring|polygon/",$m["type"]))return"AsWKT(".idf_escape($m["field"]).")";}function
unconvert_field($m,$K){if(preg_match("/binary/",$m["type"]))$K="UNHEX($K)";if($m["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("/geometry|point|linestring|polygon/",$m["type"]))$K="GeomFromText($K)";return$K;}function
support($fc){global$g;return!preg_match("/scheme|sequence|type/".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$fc);}$x="sql";$cg=array();$rf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$cg+=$X;$rf[$y]=array_keys($X);}$jg=array("unsigned","zerofill","unsigned zerofill");$Sd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$vc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$zc=array("avg","count","count distinct","group_concat","max","min","sum");$Fb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ga="3.7.1";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(_CONFIG_DB_HOST,_CONFIG_DB_USER,_CONFIG_DB_PASS);}function
permanentLogin($i=false){return
password_file($i);}function
database(){return
DB;}function
databases($lc=true){return
get_databases($lc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$zb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$zb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($jd,$ne){return
true;}function
tableName($yf){return
h($yf["Name"]);}function
fieldName($m,$Vd=0){return'<span title="'.h($m["full_type"]).'">'.h($m["field"]).'</span>';}function
selectLinks($yf,$P=""){echo'<div class="btn-group">';echo" <a class='btn btn-default' href='".ADMIN_WEB_ROOT."/database_browser'><</a>";$id=array("select"=>'Select data',"table"=>'Show structure');if(is_view($yf))$id["view"]='Alter view';else$id["create"]='Alter table';if($P!==null)$id["edit"]='New item';foreach($id
as$y=>$X)echo" <a class='btn btn-default' href='".h(ME)."$y=".urlencode($yf["Name"]).($y=="edit"?$P:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"</div>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$xf){return
array();}function
backwardKeysPrint($ya,$L){}function
selectQuery($I){global$x,$T;return"<form action='".h(ME)."sql=' method='post'><p><span onclick=\"return !selectEditSql(event, this, '".'Execute'."');\">"."<code class='jush-$x'>".h(str_replace("\n"," ",$I))."</code>"." <a href='".h(ME)."sql=".urlencode($I)."'>".'Edit'."</a>"."</span><input type='hidden' name='token' value='$T'></p></form>\n";}function
rowDescription($Q){return"";}function
rowDescriptions($M,$nc){return$M;}function
selectLink($X,$m){}function
selectVal($X,$_,$m){$K=($X===null?"<i>NULL</i>":(preg_match("/char|binary/",$m["type"])&&!preg_match("/var/",$m["type"])?"<code>$X</code>":$X));if(preg_match('/blob|bytea|raw|file/',$m["type"])&&!is_utf8($X))$K=lang(array('%d byte','%d bytes'),strlen(html_entity_decode($X,ENT_QUOTES)));return($_?"<a href='".h($_)."'>$K</a>":$K);}function
editVal($X,$m){return$X;}function
selectSearchPrint($Z,$f,$v){echo "<fieldset><h2>Search</h2>";foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' class='form-control' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ha="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div><select class='form-control' name='where[$s][col]' onchange='$Ha' style='display: inline; max-width: 160px;'><option value=''>(".'anywhere'.")".optionlist($f,$X["col"],true)."</select>",html_select("where[$s][op]",$this->operators,$X["op"],$Ha),"<input type='search' class='form-control' name='where[$s][val]' style='display: inline; max-width: 300px;' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><h2>".'Limit'."</h2><div>";echo"<input type='number' name='limit' class='size form-control' value='".h($z)."' onchange='selectFieldChange(this.form);' style='max-width: 120px;'>","</div></fieldset>\n";}function
selectLengthPrint($Jf){if($Jf!==null){echo"<fieldset><h2>".'Text length'."</h2><div>","<input type='number' name='text_length' class='size form-control' value='".h($Jf)."' style='max-width: 120px;'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<div style='margin: 8px 0px 16px 0px;'>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$f[reset($u["columns"])]=1;}$f[""]=1;foreach($f
as$y=>$X)json_row($y);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($Jb,$f){}function
selectColumnsProcess($f,$v){global$vc,$zc;$N=array();$xc=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||(isset($f[$X["col"]])&&(!$X["fun"]||in_array($X["fun"],$vc)||in_array($X["fun"],$zc)))){$N[$y]=apply_sql_function($X["fun"],(isset($f[$X["col"]])?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$zc))$xc[]=$N[$y];}}return
array($N,$xc);}function
selectSearchProcess($n,$v){global$x;$K=array();foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$K[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$Xa=" $X[op]";if(preg_match('/IN$/',$X["op"])){$Ic=process_length($X["val"]);$Xa.=" (".($Ic!=""?$Ic:"NULL").")";}elseif($X["op"]=="SQL")$Xa=" $X[val]";elseif($X["op"]=="LIKE %%")$Xa=" LIKE ".$this->processInput($n[$X["col"]],"%$X[val]%");elseif(!preg_match('/NULL$/',$X["op"]))$Xa.=" ".$this->processInput($n[$X["col"]],$X["val"]);if($X["col"]!="")$K[]=idf_escape($X["col"]).$Xa;else{$Sa=array();foreach($n
as$E=>$m){$Rc=preg_match('/char|text|enum|set/',$m["type"]);if((is_numeric($X["val"])||!preg_match('/(^|[^o])int|float|double|decimal|bit/',$m["type"]))&&(!preg_match("/[\x80-\xFF]/",$X["val"])||$Rc)){$E=idf_escape($E);$Sa[]=($x=="sql"&&$Rc&&!preg_match('/^utf8/',$m["collation"])?"CONVERT($E USING utf8)":$E);}}$K[]=($Sa?"(".implode("$Xa OR ",$Sa)."$Xa)":"0");}}}return$K;}function
selectOrderProcess($n,$v){$K=array();foreach((array)$_GET["order"]as$y=>$X){if(isset($n[$X])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X))$K[]=(isset($n[$X])?idf_escape($X):$X).(isset($_GET["desc"][$y])?" DESC":"");}return$K;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$nc){return
false;}function
selectQueryBuild($N,$Z,$xc,$Vd,$z,$F){return"";}function
messageQuery($I){global$x;restart_session();$Bc=&get_session("queries");$t="sql-".count($Bc[$_GET["db"]]);if(strlen($I)>1e6)$I=preg_replace('/[\x80-\xFF]+$/','',substr($I,0,1e6))."\n...";$Bc[$_GET["db"]][]=array($I,time());return" <span class='time'>".@date("H:i:s")."</span>&nbsp;&nbsp;<a href='#$t' onclick=\"return !toggle('$t');\" style='color: #ffffff; font-weight: bold;'>[".'SQL command'."]</a><div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($I,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Bc[$_GET["db"]])-1)).'" style="color: #ffffff;">['.'Edit'.']</a></div>';}function
editFunctions($m){global$Fb;$K=($m["null"]?"NULL/":"");foreach($Fb
as$y=>$vc){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($vc
as$G=>$X){if(!$G||preg_match('/'.$G.'/',$m["type"]))$K.="/$X";}if($y&&!preg_match('/set|blob|bytea|raw|file/',$m["type"]))$K.="/SQL";}}return
explode("/",$K);}function
editInput($Q,$m,$ua,$Y){if($m["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$ua value='-1' checked><i>".'original'."</i></label> ":"").($m["null"]?"<label><input type='radio'$ua value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$ua,$m,$Y,0);return"";}function
processInput($m,$Y,$q=""){if($q=="SQL")return$Y;$E=$m["field"];$K=q($Y);if(preg_match('/^(now|getdate|uuid)$/',$q))$K="$q()";elseif(preg_match('/^current_(date|timestamp)$/',$q))$K=$q;elseif(preg_match('/^([+-]|\\|\\|)$/',$q))$K=idf_escape($E)." $q $K";elseif(preg_match('/^[+-] interval$/',$q))$K=idf_escape($E)." $q ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$K);elseif(preg_match('/^(addtime|subtime|concat)$/',$q))$K="$q(".idf_escape($E).", $K)";elseif(preg_match('/^(md5|sha1|password|encrypt)$/',$q))$K="$q($K)";return
unconvert_field($m,$K);}function
dumpOutput(){$K=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$K['gz']='gzip';return$K;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($k){}function
dumpTable($Q,$sf,$Sc=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($sf)dump_csv(array_keys(fields($Q)));}elseif($sf){if($Sc==2){$n=array();foreach(fields($Q)as$E=>$m)$n[]=idf_escape($E)." $m[full_type]";$i="CREATE TABLE ".table($Q)." (".implode(", ",$n).")";}else$i=create_sql($Q,$_POST["auto_increment"]);if($i){if($sf=="DROP+CREATE"||$Sc==1)echo"DROP ".($Sc==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($Sc==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($Q,$sf,$I){global$g,$x;$nd=($x=="sqlite"?0:1048576);if($sf){if($_POST["format"]=="sql"){if($sf=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$n=fields($Q);}$J=$g->query($I,1);if($J){$Nc="";$Fa="";$Uc=array();$uf="";$gc=($Q!=''?'fetch_assoc':'fetch_row');while($L=$J->$gc()){if(!$Uc){$pg=array();foreach($L
as$X){$m=$J->fetch_field();$Uc[]=$m->name;$y=idf_escape($m->name);$pg[]="$y = VALUES($y)";}$uf=($sf=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$pg):"").";\n";}if($_POST["format"]!="sql"){if($sf=="table"){dump_csv($Uc);$sf="INSERT";}dump_csv($L);}else{if(!$Nc)$Nc="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Uc)).") VALUES";foreach($L
as$y=>$X){$m=$n[$y];$L[$y]=($X!==null?unconvert_field($m,preg_match('/(^|[^o])int|float|double|decimal/',$m["type"])&&$X!=''?$X:q($X)):"NULL");}$Ye=($nd?"\n":" ")."(".implode(",\t",$L).")";if(!$Fa)$Fa=$Nc.$Ye;elseif(strlen($Fa)+4+strlen($Ye)+strlen($uf)<$nd)$Fa.=",$Ye";else{echo$Fa.$uf;$Fa=$Nc.$Ye;}}}if($Fa)echo$Fa.$uf;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($Fc){return
friendly_url($Fc!=""?$Fc:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($Fc,$zd=false){$de=$_POST["output"];$bc=(preg_match('/sql/',$_POST["format"])?"sql":($zd?"tar":"csv"));header("Content-Type: ".($de=="gz"?"application/x-gzip":($bc=="tar"?"application/x-tar":($bc=="sql"||$de!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($de=="gz")return$bc;}function
homepage(){return
true;}function
navigation($yd){global$ga,$T,$x,$zb;echo'<h1>
',$this->name(),' <span class="version">',$ga,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ga,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($yd=="auth"){$kc=true;foreach((array)$_SESSION["pwds"]as$yb=>$gf){foreach($gf
as$O=>$og){foreach($og
as$V=>$ne){if($ne!==null){if($kc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$kc=false;}$nb=$_SESSION["db"][$yb][$O][$V];foreach(($nb?array_keys($nb):array(""))as$k)echo"<a href='".h(auth_url($yb,$O,$V,$k))."'>($zb[$yb]) ".h($V.($O!=""?"@$O":"").($k!=""?" - $k":""))."</a><br>\n";}}}}}else{echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$yd){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"]))." title='".'Import'."'>".'SQL command'."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}echo'<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';$this->databasesPrint($yd);if($_GET["ns"]!==""&&!$yd&&DB!=""){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create new table'."</a>\n";$S=table_status('',true);if(!$S)echo"<p class='message alert alert-info'>".'No tables.'."\n";else{$this->tablesPrint($S);$id=array();foreach($S
as$Q=>$U)$id[]=preg_quote($Q,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $x: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$id).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";echo"</script>\n";}}}}function
databasesPrint($yd){global$g;$j=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$lb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo($j?"<select name='db'$lb>".optionlist(array(""=>"(".'database'.")")+$j,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($j?" class='hidden'":"").">\n";if($yd!="db"&&DB!=""&&$g->select_db(DB)){}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$nf){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q).">".'select'."</a> ",'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])))." title='".'Show structure'."'>".$this->tableName($nf)."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Sd;function
page_header($Mf,$l="",$Ea=array(),$Nf=""){global$ca,$b,$g,$zb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Of=$Mf.($Nf!=""?": ".h($Nf):"");$Pf=strip_tags($Of.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());
include_once('_header.inc.php');
echo'
<div role="main">
<div>
<div class="row">
<link rel="stylesheet" type="text/css" href="assets/styles/adminer.css">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.7.1",'"></script>
';echo'
<div class="col-md-12 col-sm-12 col-xs-12">
';if($Ea!==null){$_=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<h2>';$_=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):'Server');if($Ea===false)echo"$O\n";else{if($_GET["ns"]!=""||(DB!=""&&is_array($Ea)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ea)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ea
as$y=>$X){$rb=(is_array($X)?$X[1]:$X);if($rb!="")echo'<a href="'.h(ME."$y=").urlencode(is_array($X)?$X[0]:$X).'">'.h($rb).'</a> &raquo; ';}}echo"$Mf\n";}
echo '</h2>'; } echo '<div class="widget_inside">';
if (_CONFIG_DEMO_MODE == true)
{
	adminFunctions::setError("Browsing the database is not permitted in demo mode.");
	echo adminFunctions::compileErrorHtml();
	page_footer();
	die();
}
restart_session();$lg=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$wd=$_SESSION["messages"][$lg];if($wd){echo"<div class='message alert alert-info'>".implode("</div>\n<div class='message alert alert-info'>",$wd)."</div>\n";unset($_SESSION["messages"][$lg]);}$j=&get_session("dbs");if(DB!=""&&$j&&!in_array(DB,$j,true))$j=null;stop_session();if($l)echo"<div class='error'>$l</div>\n";define("PAGE_HEADER",1);}function
page_footer($yd=""){global$b;echo'</div>

<div id="menu" style="display: none;">
';$b->navigation($yd);echo'</div>
';
echo '</div></div></div></div>';
include_once('_footer.inc.php');
}function
int32($D){while($D>=2147483648)$D-=4294967296;while($D<=-2147483649)$D+=4294967296;return(int)$D;}function
long2str($W,$ug){$Ye='';foreach($W
as$X)$Ye.=pack('V',$X);if($ug)return
substr($Ye,0,end($W));return$Ye;}function
str2long($Ye,$ug){$W=array_values(unpack('V*',str_pad($Ye,4*ceil(strlen($Ye)/4),"\0")));if($ug)$W[]=strlen($Ye);return$W;}function
xxtea_mx($zg,$yg,$vf,$Tc){return
int32((($zg>>5&0x7FFFFFF)^$yg<<2)+(($yg>>3&0x1FFFFFFF)^$zg<<4))^int32(($vf^$yg)+($Tc^$zg));}function
encrypt_string($pf,$y){if($pf=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($pf,true);$D=count($W)-1;$zg=$W[$D];$yg=$W[0];$H=floor(6+52/($D+1));$vf=0;while($H-->0){$vf=int32($vf+0x9E3779B9);$Eb=$vf>>2&3;for($ee=0;$ee<$D;$ee++){$yg=$W[$ee+1];$_d=xxtea_mx($zg,$yg,$vf,$y[$ee&3^$Eb]);$zg=int32($W[$ee]+$_d);$W[$ee]=$zg;}$yg=$W[0];$_d=xxtea_mx($zg,$yg,$vf,$y[$ee&3^$Eb]);$zg=int32($W[$D]+$_d);$W[$D]=$zg;}return
long2str($W,false);}function
decrypt_string($pf,$y){if($pf=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($pf,false);$D=count($W)-1;$zg=$W[$D];$yg=$W[0];$H=floor(6+52/($D+1));$vf=int32($H*0x9E3779B9);while($vf){$Eb=$vf>>2&3;for($ee=$D;$ee>0;$ee--){$zg=$W[$ee-1];$_d=xxtea_mx($zg,$yg,$vf,$y[$ee&3^$Eb]);$yg=int32($W[$ee]-$_d);$W[$ee]=$yg;}$zg=$W[$D];$_d=xxtea_mx($zg,$yg,$vf,$y[$ee&3^$Eb]);$yg=int32($W[0]-$_d);$W[0]=$yg;$vf=int32($vf-0x9E3779B9);}return
long2str($W,true);}$g='';$T=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$oe=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$oe[$y]=$X;}}$c=$_POST["auth"];if($c){session_regenerate_id();$_SESSION["pwds"][$c["driver"]][$c["server"]][$c["username"]]=$c["password"];$_SESSION["db"][$c["driver"]][$c["server"]][$c["username"]][$c["db"]]=true;if($c["permanent"]){$y=base64_encode($c["driver"])."-".base64_encode($c["server"])."-".base64_encode($c["username"])."-".base64_encode($c["db"]);$ye=$b->permanentLogin(true);$oe[$y]="$y:".base64_encode($ye?encrypt_string($c["password"],$ye):"");cookie("adminer_permanent",implode(" ",$oe));}if(count($_POST)==1||DRIVER!=$c["driver"]||SERVER!=$c["server"]||$_GET["username"]!==$c["username"]||DB!=$c["db"])redirect_local(auth_url($c["driver"],$c["server"],$c["username"],$c["db"]));}elseif($_POST["logout"]){if($T&&$_POST["token"]!=$T){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect_local(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($oe&&!$_SESSION["pwds"]){session_regenerate_id();$ye=$b->permanentLogin();foreach($oe
as$y=>$X){list(,$La)=explode(":",$X);list($yb,$O,$V,$k)=array_map('base64_decode',explode("-",$y));$_SESSION["pwds"][$yb][$O][$V]=decrypt_string(base64_decode($La),$ye);$_SESSION["db"][$yb][$O][$V][$k]=true;}}function
unset_permanent(){global$oe;foreach($oe
as$y=>$X){list($yb,$O,$V,$k)=array_map('base64_decode',explode("-",$y));if($yb==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$k==DB)unset($oe[$y]);}cookie("adminer_permanent",implode(" ",$oe));}function
auth_error($Vb=null){global$g,$b,$T;$hf=session_name();$l="";if(!$_COOKIE[$hf]&&$_GET[$hf]&&ini_bool("session.use_only_cookies"))$l='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$hf]||$_GET[$hf])&&!$T)$l='Session expired, please login again.';else{$ne=&get_session("pwds");if($ne!==null){$l=h($Vb?$Vb->getMessage():(is_string($g)?$g:'Invalid credentials.'));if($ne===false)$l.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');$ne=null;}unset_permanent();}}page_header('Login',$l,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$te)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$T=$_SESSION["token"];if($c&&$_POST["token"])$_POST["token"]=$T;$l='';if($_POST){if($_POST["token"]!=$T){$Kc="max_input_vars";$rd=ini_get($Kc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$rd||$X<$rd)){$Kc=$y;$rd=$X;}}}$l=(!$_POST["token"]&&$rd?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$Kc'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$l=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$l.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}function
connect_error(){global$b,$g,$T,$l,$zb;$j=array();if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$l)queries_redirect_local(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$l,false);echo"<p><a href='".h(ME)."database='>".'Create new database'."</a>\n";foreach(array('privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$zb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$Le="<a href='".h(ME)."refresh=1'>".'Refresh'."</a>\n";$j=$b->databases();if($j){$bf=support("scheme");$d=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='table table-striped checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr><td>&nbsp;<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($j
as$k){$Ue=h(ME)."db=".urlencode($k);echo"<tr".odd()."><td>".checkbox("db[]",$k,in_array($k,(array)$_POST["db"])),"<th><a href='$Ue'>".h($k)."</a>","<td><a href='$Ue".($bf?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>".nbsp(db_collation($k,$d))."</a>","<td align='right'><a href='$Ue&amp;schema=' id='tables-".h($k)."' title='".'Database schema'."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$T'>\n",$Le,"</form>\n";}else
echo"<p>$Le";}page_footer("db");if($j)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}function
select($J,$h=null,$Ec="",$Yd=array()){$id=array();$v=array();$f=array();$Ca=array();$cg=array();$K=array();odd('');for($s=0;$L=$J->fetch_row();$s++){if(!$s){echo"<div class='horScroll'><table cellspacing='0' class='table table-striped'>\n","<thead><tr>";for($w=0;$w<count($L);$w++){$m=$J->fetch_field();$E=$m->name;$Xd=$m->orgtable;$Wd=$m->orgname;$K[$m->table]=$Xd;if($Ec)$id[$w]=($E=="table"?"table=":($E=="possible_keys"?"indexes=":null));elseif($Xd!=""){if(!isset($v[$Xd])){$v[$Xd]=array();foreach(indexes($Xd,$h)as$u){if($u["type"]=="PRIMARY"){$v[$Xd]=array_flip($u["columns"]);break;}}$f[$Xd]=$v[$Xd];}if(isset($f[$Xd][$Wd])){unset($f[$Xd][$Wd]);$v[$Xd][$Wd]=$w;$id[$w]=$Xd;}}if($m->charsetnr==63)$Ca[$w]=true;$cg[$w]=$m->type;$E=h($E);echo"<th".($Xd!=""||$m->name!=$Wd?" title='".h(($Xd!=""?"$Xd.":"").$Wd)."'":"").">".($Ec?"<a href='$Ec".strtolower($E)."' target='_blank' rel='noreferrer' class='help'>$E</a>":$E);}echo"</thead>\n";}echo"<tr".odd().">";foreach($L
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ca[$y]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($cg[$y]==254)$X="<code>$X</code>";}if(isset($id[$y])&&!$f[$id[$y]]){if($Ec){$Q=$L[array_search("table=",$id)];$_=$id[$y].urlencode($Yd[$Q]!=""?$Yd[$Q]:$Q);}else{$_="edit=".urlencode($id[$y]);foreach($v[$id[$y]]as$Pa=>$w)$_.="&where".urlencode("[".bracket_escape($Pa)."]")."=".urlencode($L[$w]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table></div>":"<p class='message alert alert-info'>".'No rows.')."\n";return$K;}function
referencable_primary($df){$K=array();foreach(table_status('',true)as$zf=>$Q){if($zf!=$df&&fk_support($Q)){foreach(fields($zf)as$m){if($m["primary"]){if($K[$zf]){unset($K[$zf]);break;}$K[$zf]=$m;}}}}return$K;}function
textarea($E,$Y,$M=10,$Sa=80){echo"<textarea name='$E' rows='$M' cols='$Sa' class='form-control sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$m,$d,$p=array()){global$rf,$cg,$jg,$Od;echo'<td><select name="',$y,'[type]" class="type form-control" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$m["type"]||isset($cg[$m["type"]])?array():array($m["type"]))+$rf+($p?array('Foreign keys'=>$p):array()),$m["type"]),'</select>
<td><input name="',$y,'[length]" value="',h($m["length"]),'" size="3" onfocus="editingLengthFocus(this);" class="form-control"><td class="options">';echo"<select name='$y"."[collation]'".(preg_match('/(char|text|enum|set)$/',$m["type"])?" class='form-control'":" class='hidden form-control'").'><option value="">('.'collation'.')'.optionlist($d,$m["collation"]).'</select>',($jg?"<select name='$y"."[unsigned]'".(!$m["type"]||preg_match('/((^|[^o])int|float|double|decimal)$/',$m["type"])?" class='form-control'":" class='hidden form-control'").'><option>'.optionlist($jg,$m["unsigned"]).'</select>':''),(isset($m['on_update'])?"<select name='$y"."[on_update]'".($m["type"]=="timestamp"?" class='form-control'":" class='hidden form-control'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$m["on_update"]).'</select>':''),($p?"<select name='$y"."[on_delete]'".(preg_match("/`/",$m["type"])?" class='form-control'":" class='hidden form-control'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$Od),$m["on_delete"])."</select> ":" ");}function
process_length($fd){global$Pb;return(preg_match("~^\\s*(?:$Pb)(?:\\s*,\\s*(?:$Pb))*\\s*\$~",$fd)&&preg_match_all("~$Pb~",$fd,$ld)?implode(",",$ld[0]):preg_replace('~[^0-9,+-]~','',$fd));}function
process_type($m,$Qa="COLLATE"){global$jg;return" $m[type]".($m["length"]!=""?"(".process_length($m["length"]).")":"").(preg_match('/(^|[^o])int|float|double|decimal/',$m["type"])&&in_array($m["unsigned"],$jg)?" $m[unsigned]":"").(preg_match('/char|text|enum|set/',$m["type"])&&$m["collation"]?" $Qa ".q($m["collation"]):"");}function
process_field($m,$ag){return
array(idf_escape(trim($m["field"])),process_type($ag),($m["null"]?" NULL":" NOT NULL"),(isset($m["default"])?" DEFAULT ".((preg_match("/time/",$m["type"])&&preg_match('/^CURRENT_TIMESTAMP$/i',$m["default"]))||($m["type"]=="bit"&&preg_match("/^([0-9]+|b'[0-1]+')\$/",$m["default"]))?$m["default"]:q($m["default"])):""),($m["type"]=="timestamp"&&$m["on_update"]?" ON UPDATE $m[on_update]":""),(support("comment")&&$m["comment"]!=""?" COMMENT ".q($m["comment"]):""),($m["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("/$y|$X/",$U))return" class='$y'";}}function
edit_fields($n,$d,$U="TABLE",$p=array(),$Wa=false){global$g,$Lc;echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" class="form-control" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td>Default values
',(support("comment")?"<td".($Wa?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($n))."]' src='".CORE_ASSETS_WEB_ROOT."/admin/images/icons/adminer/plus.gif' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($n),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($n
as$s=>$m){$s++;$Zd=$m[($_POST?"orig":"field")];$wb=(isset($_POST["add"][$s-1])||(isset($m["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$Zd=="");echo'<tr',($wb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$Lc),$m["inout"]):""),'<th>';if($wb){echo'<input class="form-control" name="fields[',$s,'][field]" value="',h($m["field"]),'" onchange="',($m["field"]!=""||count($n)>1?"":"editingAddRow(this); "),'editingNameChange(this);" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($Zd),'">
';edit_type("fields[$s]",$m,$d,$p);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$m["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($m["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$m["has_default"]),'<input name="fields[',$s,'][default]" value="',h($m["default"]),'" onchange="this.previousSibling.checked = true;" class="form-control">
',(support("comment")?"<td".($Wa?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($m["comment"])."' class='form-control' maxlength='".($g->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".CORE_ASSETS_WEB_ROOT."/admin/images/icons/adminer/plus.gif' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".CORE_ASSETS_WEB_ROOT."/admin/images/icons/adminer/move_up.gif' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".CORE_ASSETS_WEB_ROOT."/admin/images/icons/adminer/move_down.gif' alt='v' title='".'Move down'."'>&nbsp;":""),($Zd==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".CORE_ASSETS_WEB_ROOT."/admin/images/icons/adminer/remove.gif' alt='x' title='".'Remove'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$n){ksort($n);$Hd=0;if($_POST["up"]){$Zc=0;foreach($n
as$y=>$m){if(key($_POST["up"])==$y){unset($n[$y]);array_splice($n,$Zc,0,array($m));break;}if(isset($m["field"]))$Zc=$Hd;$Hd++;}}elseif($_POST["down"]){$pc=false;foreach($n
as$y=>$m){if(isset($m["field"])&&$pc){unset($n[key($_POST["down"])]);array_splice($n,$Hd,0,array($pc));break;}if(key($_POST["down"])==$y)$pc=$m;$Hd++;}}elseif($_POST["add"]){$n=array_values($n);array_splice($n,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($r,$_e,$f,$Nd){if(!$_e)return
true;if($_e==array("ALL PRIVILEGES","GRANT OPTION"))return($r=="GRANT"?queries("$r ALL PRIVILEGES$Nd WITH GRANT OPTION"):queries("$r ALL PRIVILEGES$Nd")&&queries("$r GRANT OPTION$Nd"));return
queries("$r ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$_e).$f).$Nd);}function
drop_create($_b,$i,$Ab,$Hf,$Bb,$A,$vd,$td,$ud,$Kd,$Cd){if($_POST["drop"])query_redirect_local($_b,$A,$vd);elseif($Kd=="")query_redirect_local($i,$A,$ud);elseif($Kd!=$Cd){$fb=queries($i);queries_redirect_local($A,$td,$fb&&queries($_b));if($fb)queries($Ab);}else
queries_redirect_local($A,$td,queries($Hf)&&queries($Bb)&&queries($_b)&&queries($i));}function
create_trigger($Nd,$L){global$x;$Lf=" $L[Timing] $L[Event]";return"CREATE TRIGGER ".idf_escape($L["Trigger"]).($x=="mssql"?$Nd.$Lf:$Lf.$Nd).rtrim(" $L[Type]\n$L[Statement]",";").";";}function
create_routine($Ve,$L){global$Lc;$P=array();$n=(array)$L["fields"];ksort($n);foreach($n
as$m){if($m["field"]!="")$P[]=(preg_match("/^($Lc)\$/",$m["inout"])?"$m[inout] ":"").idf_escape($m["field"]).process_type($m,"CHARACTER SET");}return"CREATE $Ve ".idf_escape(trim($L["name"]))." (".implode(", ",$P).")".(isset($_GET["function"])?" RETURNS".process_type($L["returns"],"CHARACTER SET"):"").($L["language"]?" LANGUAGE $L[language]":"").rtrim("\n$L[definition]",";").";";}function
remove_definer($I){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$I);}function
tar_file($ic,$Qf){$K=pack("a100a8a8a8a12a12",$ic,644,0,0,decoct($Qf->size),decoct(time()));$Ka=8*32;for($s=0;$s<strlen($K);$s++)$Ka+=ord($K[$s]);$K.=sprintf("%06o",$Ka)."\0 ";echo$K,str_repeat("\0",512-strlen($K));$Qf->send();echo
str_repeat("\0",511-($Qf->size+511)%512);}function
ini_bytes($Kc){$X=ini_get($Kc);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}$Od="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($ab){$this->size+=strlen($ab);fwrite($this->handler,$ab);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$Pb="'(?:''|[^'\\\\]|\\\\.)*+'";$Lc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$n=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$n),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$n=fields($a);if(!$n)$l=error();$R=table_status1($a,true);page_header(($n&&is_view($R)?'View':'Table').": ".h($a),$l);$b->selectLinks($R);$Va=$R["Comment"];if($Va!="")echo"<p>".'Comment'.": ".h($Va)."\n";if($n){echo"<table cellspacing='0' class='table table-striped'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($n
as$m){echo"<tr".odd()."><th>".h($m["field"]),"<td title='".h($m["collation"])."'>".h($m["full_type"]).($m["null"]?" <i>NULL</i>":"").($m["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($m["default"])?" [<b>".h($m["default"])."</b>]":""),(support("comment")?"<td>".nbsp($m["comment"]):""),"\n";}echo"</table>\n";if(!is_view($R)){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0' class='table table-striped'>\n";foreach($v
as$E=>$u){ksort($u["columns"]);$xe=array();foreach($u["columns"]as$y=>$X)$xe[]="<i>".h($X)."</i>".($u["lengths"][$y]?"(".$u["lengths"][$y].")":"").($u["descs"][$y]?" DESC":"");echo"<tr title='".h($E)."'><th>$u[type]<td>".implode(", ",$xe)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";if(fk_support($R)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$p=foreign_keys($a);if($p){echo"<table cellspacing='0' class='table table-striped'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($x!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($p
as$E=>$o){echo"<tr title='".h($E)."'>","<th><i>".implode("</i>, <i>",array_map('h',$o["source"]))."</i>","<td><a href='".h($o["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($o["db"]),ME):($o["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($o["ns"]),ME):ME))."table=".urlencode($o["table"])."'>".($o["db"]!=""?"<b>".h($o["db"])."</b>.":"").($o["ns"]!=""?"<b>".h($o["ns"])."</b>.":"").h($o["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$o["target"]))."</i>)","<td>".nbsp($o["on_delete"])."\n","<td>".nbsp($o["on_update"])."\n",($x=="sqlite"?"":'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($E)).'">'.'Alter'.'</a>');}echo"</table>\n";}if($x!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$_f=array();$Af=array();$E="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$E-".DB]?"$E-".DB:$E)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$ld,PREG_SET_ORDER);foreach($ld
as$s=>$B){$_f[$B[1]]=array($B[2],$B[3]);$Af[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Sf=0;$_a=-1;$af=array();$Ke=array();$dd=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$qe=0;$af[$Q]["fields"]=array();foreach(fields($Q)as$E=>$m){$qe+=1.25;$m["pos"]=$qe;$af[$Q]["fields"][$E]=$m;}$af[$Q]["pos"]=($_f[$Q]?$_f[$Q]:array($Sf,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$bd=$_a;if($_f[$Q][1]||$_f[$X["table"]][1])$bd=min(floatval($_f[$Q][1]),floatval($_f[$X["table"]][1]))-1;else$_a-=.1;while($dd[(string)$bd])$bd-=.0001;$af[$Q]["references"][$X["table"]][(string)$bd]=array($X["source"],$X["target"]);$Ke[$X["table"]][$Q][(string)$bd]=$X["target"];$dd[(string)$bd]=true;}}$Sf=max($Sf,$af[$Q]["pos"][0]+2.5+$qe);}echo'<div id="schema" style="height: ',$Sf,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Af)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Sf,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($af
as$E=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($E).'"><b>'.h($E)."</b></a>";foreach($Q["fields"]as$m){$X='<span'.type_class($m["type"]).' title="'.h($m["full_type"].($m["null"]?" NULL":'')).'">'.h($m["field"]).'</span>';echo"<br>".($m["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Ff=>$Me){foreach($Me
as$bd=>$He){$cd=$bd-$_f[$E][1];$s=0;foreach($He[0]as$jf)echo"\n<div class='references' title='".h($Ff)."' id='refs$bd-".($s++)."' style='left: $cd"."em; top: ".$Q["fields"][$jf]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$cd)."em;'></div></div>";}}foreach((array)$Ke[$E]as$Ff=>$Me){foreach($Me
as$bd=>$f){$cd=$bd-$_f[$E][1];$s=0;foreach($f
as$Ef)echo"\n<div class='references' title='".h($Ff)."' id='refd$bd-".($s++)."' style='left: $cd"."em; top: ".$Q["fields"][$Ef]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.7.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$cd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($af
as$E=>$Q){foreach((array)$Q["references"]as$Ff=>$Me){foreach($Me
as$bd=>$He){$xd=$Sf;$pd=-10;foreach($He[0]as$y=>$jf){$re=$Q["pos"][0]+$Q["fields"][$jf]["pos"];$se=$af[$Ff]["pos"][0]+$af[$Ff]["fields"][$He[1][$y]]["pos"];$xd=min($xd,$re,$se);$pd=max($pd,$re,$se);}echo"<div class='references' id='refl$bd' style='left: $bd"."em; top: $xd"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($pd-$xd)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$l){$cb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$cb.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($cb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$bc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$Qc=preg_match('/sql/',$_POST["format"]);if($Qc)echo"-- Adminer $ga ".$zb[DRIVER]." dump

".($x!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q(substr(preg_replace('~^[^-]~','+\0',$g->result("SELECT TIMEDIFF(NOW(), UTC_TIMESTAMP)")),0,6)).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$sf=$_POST["db_style"];$j=array(DB);if(DB==""){$j=$_POST["databases"];if(is_string($j))$j=explode("\n",rtrim(str_replace("\r","",$j),"\n"));}foreach((array)$j
as$k){$b->dumpDatabase($k);if($g->select_db($k)){if($Qc&&preg_match('/CREATE/',$sf)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1))){if($sf=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($k).";\n";echo"$i;\n";}if($Qc){if($sf)echo
use_sql($k).";\n\n";$ce="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ve){foreach(get_rows("SHOW $Ve STATUS WHERE Db = ".q($k),null,"-- ")as$L)$ce.=($sf!='DROP+CREATE'?"DROP $Ve IF EXISTS ".idf_escape($L["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE $Ve ".idf_escape($L["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$L)$ce.=($sf!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($L["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($L["Name"]),3)).";;\n\n";}if($ce)echo"DELIMITER ;;\n\n$ce"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$sg=array();foreach(table_status('',true)as$E=>$R){$Q=(DB==""||in_array($E,(array)$_POST["tables"]));$ib=(DB==""||in_array($E,(array)$_POST["data"]));if($Q||$ib){if($bc=="tar"){$Qf=new
TmpFile;}$b->dumpTable($E,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$sg[]=$E;elseif($ib){$n=fields($E);$b->dumpData($E,$_POST["data_style"],"SELECT *".convert_fields($n,$n)." FROM ".table($E));}if($Qc&&$_POST["triggers"]&&$Q&&($Zf=trigger_sql($E,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Zf\nDELIMITER ;\n";if($bc=="tar"){tar_file((DB!=""?"":"$k/")."$E.csv",$Qf);}elseif($Qc)echo"\n";}}foreach($sg
as$rg)$b->dumpTable($rg,$_POST["table_style"],1);if($bc=="tar")echo
pack("x512");}}}if($Qc)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$l,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$mb=array('','USE','DROP+CREATE','CREATE');$Bf=array('','DROP+CREATE','CREATE');$jb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$jb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$L);if(!$L)$L=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($L["events"])){$L["routines"]=$L["events"]=($_GET["dump"]=="");$L["triggers"]=$L["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$L["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$L["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$mb,$L["db_style"]).(support("routine")?checkbox("routines",1,$L["routines"],'Routines'):"").(support("event")?checkbox("events",1,$L["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Bf,$L["table_style"]).checkbox("auto_increment",1,$L["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$L["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$jb,$L["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$ve=array();if(DB!=""){$Ja=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$Ja onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$Ja onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$sg="";$Cf=tables_list();foreach($Cf
as$E=>$U){$ue=preg_replace("/_.*/","",$E);$Ja=($a==""||$a==(substr($a,-1)=="%"?"$ue%":$E));$xe="<tr><td>".checkbox("tables[]",$E,$Ja,$E,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match("/table/i",$U))$sg.="$xe\n";else
echo"$xe<td align='right'><label class='block'><span id='Rows-".h($E)."'></span>".checkbox("data[]",$E,$Ja,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$ve[$ue]++;}echo$sg;if($Cf)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$j=$b->databases();if($j){foreach($j
as$k){if(!information_schema($k)){$ue=preg_replace("/_.*/","",$k);echo"<tr><td>".checkbox("databases[]",$k,$a==""||$a=="$ue%",$k,"formUncheck('check-databases');","block")."\n";$ve[$ue]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20' class='form-control'></textarea>";}echo'</table>
</form>
';$kc=true;foreach($ve
as$y=>$X){if($y!=""&&$X>1){echo($kc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$kc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$J=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$r=$J;if(!$J)$J=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($r?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0' class='table table-striped'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($L=$J->fetch_assoc())echo'<tr'.odd().'><td>'.h($L["User"])."<td>".h($L["Host"]).'<td><a href="'.h(ME.'user='.urlencode($L["User"]).'&host='.urlencode($L["Host"])).'">'.'Edit'."</a>\n";if(!$r||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$l&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$Cc=&get_session("queries");$Bc=&$Cc[DB];if(!$l&&$_POST["clear"]){$Bc=array();redirect_local(remove_from_uri("history"));}page_header('SQL command',$l);if(!$l&&$_POST){$rc=false;$I=$_POST["query"];if($_POST["webfile"]){$rc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$I=($rc?fread($rc,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"][0]!=4)$I=get_file("sql_file",true);if(is_string($I)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($I)+memory_get_usage()+8e6));if($I!=""&&strlen($I)<1e6){$H=$I.(preg_match("/;[ \t\r\n]*\$/",$I)?"":";");if(!$Bc||reset(end($Bc))!=$H){restart_session();$Bc[]=array($H,time());set_session("queries",$Cc);stop_session();}}$kf="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";$qb=";";$Hd=0;$Lb=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$Ua=0;$Rb=array();$hd=0;$he='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$Tf=microtime();parse_str($_COOKIE["adminer_export"],$ka);$Db=$b->dumpFormat();unset($Db["sql"]);while($I!=""){if(!$Hd&&preg_match("~^$kf*DELIMITER\\s+(\\S+)~i",$I,$B)){$qb=$B[1];$I=substr($I,strlen($B[0]));}else{preg_match('('.preg_quote($qb)."\\s*|$he)",$I,$B,PREG_OFFSET_CAPTURE,$Hd);list($pc,$qe)=$B[0];if(!$pc&&$rc&&!feof($rc))$I.=fread($rc,1e5);else{if(!$pc&&rtrim($I)=="")break;$Hd=$qe+strlen($pc);if($pc&&rtrim($pc)!=$qb){while(preg_match('('.($pc=='/*'?'\\*/':($pc=='['?']':(preg_match('/^-- |^#/',$pc)?"\n":preg_quote($pc)."|\\\\."))).'|$)s',$I,$B,PREG_OFFSET_CAPTURE,$Hd)){$Ye=$B[0][0];if(!$Ye&&$rc&&!feof($rc))$I.=fread($rc,1e5);else{$Hd=$B[0][1]+strlen($Ye);if($Ye[0]!="\\")break;}}}else{$Lb=false;$H=substr($I,0,$qe);$Ua++;$xe="<pre id='sql-$Ua'><code class='jush-$x'>".shorten_utf8(trim($H),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$xe;}$mf=microtime();if($g->multi_query($H)&&is_object($h)&&preg_match("~^$kf*USE\\b~isU",$H))$h->query($H);do{$J=$g->store_result();$Mb=microtime();$Kf=" <span class='time'>(".format_time_local($mf,$Mb).")</span>".(strlen($H)<1000?" <a href='".h(ME)."sql=".urlencode(trim($H))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$xe:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$Rb[]=" <a href='#sql-$Ua'>$Ua</a>";if($_POST["error_stops"])break
2;}elseif(is_object($J)){$Yd=select($J,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($J->num_rows?lang(array('%d row','%d rows'),$J->num_rows):"").$Kf;$t="export-$Ua";$ac=", <a href='#$t' onclick=\"return !toggle('$t');\">".'Export'."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$ka["output"])." ".html_select("format",$Db,$ka["format"])."<input type='hidden' name='query' value='".h($H)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$T'></span>\n";if($h&&preg_match("~^($kf|\\()*SELECT\\b~isU",$H)&&($Zb=explain($h,$H))){$t="explain-$Ua";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$ac","<div id='$t' class='hidden'>\n";select($Zb,$h,($x=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""),$Yd);echo"</div>\n";}else
echo$ac;echo"</form>\n";}}else{if(preg_match("~^$kf*(CREATE|DROP|ALTER)$kf+(DATABASE|SCHEMA)\\b~isU",$H)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message alert alert-info' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$Kf\n";}$mf=$Mb;}while($g->next_result());$hd+=substr_count($H.$pc,"\n");$I=substr($I,$Hd);$Hd=0;}}}}if($Lb)echo"<p class='message alert alert-info'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message alert alert-info'>".lang(array('%d query executed OK.','%d queries executed OK.'),$Ua-count($Rb))," <span class='time'>(".format_time_local($Tf,microtime()).")</span>\n";}elseif($Rb&&$Ua>1)echo"<p class='error'>".'Error in query'.": ".implode("",$Rb)."\n";}else
echo"<p class='error'>".upload_error($I)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$H=$_GET["sql"];if($_POST)$H=$_POST["query"];elseif($_GET["history"]=="all")$H=$Bc;elseif($_GET["history"]!="")$H=$Bc[$_GET["history"]][0];textarea("query",$H,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>".(ini_bool("file_uploads")?'File upload'.': <input type="file" name="sql_file[]" multiple'.($_FILES&&$_FILES["sql_file"]["error"][0]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),'<p>
<input type="submit" value="Execute" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Stop on error')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Show only errors')."\n";print_fieldset("webfile",'From server',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");echo
sprintf('Webserver file %s',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n";if($Bc){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($Bc);$X;$X=prev($Bc)){$y=key($Bc);list($H,$Kf)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.'Edit'."</a> <span class='time' title='".@date('Y-m-d',$Kf)."'>".@date("H:i:s",$Kf)."</span> <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$H)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$n=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$n):""):where($_GET,$n));$kg=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($n
as$E=>$m){if(!isset($m["privileges"][$kg?"update":"insert"])||$b->fieldName($m)=="")unset($n[$E]);}if($_POST&&!$l&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($kg?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('/^.+&select=.+$/',$A))$A=ME."select=".urlencode($a);$v=indexes($a);$fg=unique_array($_GET["where"],$v);$Ee="\nWHERE $Z";if(isset($_POST["delete"])){$I="FROM ".table($a);query_redirect_local("DELETE".($fg?" $I$Ee":limit1($I,$Ee)),$A,'Item has been deleted.');}else{$P=array();foreach($n
as$E=>$m){$X=process_input($m);if($X!==false&&$X!==null)$P[idf_escape($E)]=($kg?"\n".idf_escape($E)." = $X":$X);}if($kg){if(!$P)redirect_local($A);$I=table($a)." SET".implode(",",$P);query_redirect_local("UPDATE".($fg?" $I$Ee":limit1($I,$Ee)),$A,'Item has been updated.');}else{$J=insert_into($a,$P);$ad=($J?last_id():0);queries_redirect_local($A,sprintf('Item%s has been inserted.',($ad?" $ad":"")),$J);}}}$zf=$b->tableName(table_status1($a,true));page_header(($kg?'Edit':'Insert'),$l,array("select"=>array($a,$zf)),$zf);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($n
as$E=>$m){if(isset($m["privileges"]["select"])){$sa=convert_field($m);if($_POST["clone"]&&$m["auto_increment"])$sa="''";if($x=="sql"&&preg_match("/enum|set/",$m["type"]))$sa="1*".idf_escape($E);$N[]=($sa?"$sa AS ":"").idf_escape($E);}}$L=array();if($N){$M=get_rows("SELECT".limit(implode(", ",$N)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$L=(isset($_GET["select"])&&count($M)!=1?null:reset($M));}}if($L===false)echo"<p class='error'>".'No rows.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$n)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' class='table table-striped' onkeydown='return editingKeydown(event);'>\n";foreach($n
as$E=>$m){echo"<tr><th>".$b->fieldName($m);$pb=$_GET["set"][bracket_escape($E)];if($pb===null){$pb=$m["default"];if($m["type"]=="bit"&&preg_match("/^b'([01]*)'\$/",$pb,$Ne))$pb=$Ne[1];}$Y=($L!==null?($L[$E]!=""&&$x=="sql"&&preg_match("/enum|set/",$m["type"])?(is_array($L[$E])?array_sum($L[$E]):+$L[$E]):$L[$E]):(!$kg&&$m["auto_increment"]?"":(isset($_GET["select"])?false:$pb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$m);$q=($_POST["save"]?(string)$_POST["function"][$E]:($kg&&$m["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("/time/",$m["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($m,$Y,$q);echo"\n";}echo"</table>\n";}echo'<p>
';if($n){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($kg?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($kg?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$n?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$ie=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Je=referencable_primary($a);$p=array();foreach($Je
as$zf=>$m)$p[str_replace("`","``",$zf)."`".str_replace("`","``",$m["field"])]=$zf;$be=array();$R=array();if($a!=""){$be=fields($a);$R=table_status($a);if(!$R)$l='No tables.';}$L=$_POST;$L["fields"]=(array)$L["fields"];if($L["auto_increment_col"])$L["fields"][$L["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($L["fields"])&&!$l){if($_POST["drop"])query_redirect_local("DROP TABLE ".table($a),substr(ME,0,-1),'Table has been dropped.');else{$n=array();$qa=array();$mg=false;$mc=array();ksort($L["fields"]);$ae=reset($be);$oa=" FIRST";foreach($L["fields"]as$y=>$m){$o=$p[$m["type"]];$ag=($o!==null?$Je[$o]:$m);if($m["field"]!=""){if(!$m["has_default"])$m["default"]=null;if($y==$L["auto_increment_col"])$m["auto_increment"]=true;$Be=process_field($m,$ag);$qa[]=array($m["orig"],$Be,$oa);if($Be!=process_field($ae,$ae)){$n[]=array($m["orig"],$Be,$oa);if($m["orig"]!=""||$oa)$mg=true;}if($o!==null)$mc[idf_escape($m["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ")." FOREIGN KEY (".idf_escape($m["field"]).") REFERENCES ".table($p[$m["type"]])." (".idf_escape($ag["field"]).")".(preg_match("/^($Od)\$/",$m["on_delete"])?" ON DELETE $m[on_delete]":"");$oa=" AFTER ".idf_escape($m["field"]);}elseif($m["orig"]!=""){$mg=true;$n[]=array($m["orig"]);}if($m["orig"]!=""){$ae=next($be);if(!$ae)$oa="";}}$ke="";if(in_array($L["partition_by"],$ie)){$le=array();if($L["partition_by"]=='RANGE'||$L["partition_by"]=='LIST'){foreach(array_filter($L["partition_names"])as$y=>$X){$Y=$L["partition_values"][$y];$le[]="\n  PARTITION ".idf_escape($X)." VALUES ".($L["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$ke.="\nPARTITION BY $L[partition_by]($L[partition])".($le?" (".implode(",",$le)."\n)":($L["partitions"]?" PARTITIONS ".(+$L["partitions"]):""));}elseif(support("partitioning")&&preg_match("/partitioned/",$R["Create_options"]))$ke.="\nREMOVE PARTITIONING";$C='Table has been altered.';if($a==""){cookie("adminer_engine",$L["Engine"]);$C='Table has been created.';}$E=trim($L["name"]);queries_redirect_local(ME."table=".urlencode($E),$C,alter_table($a,$E,($x=="sqlite"&&($mg||$mc)?$qa:$n),$mc,$L["Comment"],($L["Engine"]&&$L["Engine"]!=$R["Engine"]?$L["Engine"]:""),($L["Collation"]&&$L["Collation"]!=$R["Collation"]?$L["Collation"]:""),($L["Auto_increment"]!=""?+$L["Auto_increment"]:""),$ke));}}page_header(($a!=""?'Alter table':'Create table'),$l,array("table"=>$a),$a);if(!$_POST){$L=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($cg["int"])?"int":(isset($cg["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$L=$R;$L["name"]=$a;$L["fields"]=array();if(!$_GET["auto_increment"])$L["Auto_increment"]="";foreach($be
as$m){$m["has_default"]=isset($m["default"]);$L["fields"][]=$m;}if(support("partitioning")){$sc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$J=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $sc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($L["partition_by"],$L["partitions"],$L["partition"])=$J->fetch_row();$le=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $sc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$le[""]="";$L["partition_names"]=array_keys($le);$L["partition_values"]=array_values($le);}}}$d=collations();$Ob=engines();foreach($Ob
as$Nb){if(!strcasecmp($Nb,$L["Engine"])){$L["Engine"]=$Nb;break;}}echo'
<form action="" method="post" id="form">
<p>
Table name: <input name="name" maxlength="64" value="',h($L["name"]),'" autocapitalize="off" class="form-control" style="max-width: 220px; display: inline;">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($Ob?html_select("Engine",array(""=>"(".'engine'.")")+$Ob,$L["Engine"]):""),' ',($d&&!preg_match("/sqlite|mssql/",$x)?html_select("Collation",array(""=>"(".'collation'.")")+$d,$L["Collation"]):""),' <input type="submit" value="Save">
<div class=\'horScroll\'><table cellspacing="0" id="edit-fields" class="nowrap">
';$Wa=($_POST?$_POST["comments"]:$L["Comment"]!="");if(!$_POST&&!$Wa){foreach($L["fields"]as$m){if($m["comment"]!=""){$Wa=true;break;}}}edit_fields($L["fields"],$d,"TABLE",$p,$Wa);echo'</table></div>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($L["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($Wa?" checked":"").">".'Comment'."</label>".' <input name="Comment" id="Comment" value="'.h($L["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($Wa?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$je=preg_match('/RANGE|LIST/',$L["partition_by"]);print_fieldset("partition",'Partition by',$L["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$ie,$L["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($L["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size" value="',h($L["partitions"]),'"',($je||!$L["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($je?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($L["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($L["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($L["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Jc=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match("/MyISAM|M?aria/i".($g->server_info>=5.6?"|InnoDB":""),$R["Engine"]))$Jc[]="FULLTEXT";$v=indexes($a);if($x=="sqlite"){unset($Jc[0]);unset($v[""]);}$L=$_POST;if($_POST&&!$l&&!$_POST["add"]){$ra=array();foreach($L["indexes"]as$u){$E=$u["name"];if(in_array($u["type"],$Jc)){$f=array();$gd=array();$sb=array();$P=array();ksort($u["columns"]);foreach($u["columns"]as$y=>$e){if($e!=""){$fd=$u["lengths"][$y];$rb=$u["descs"][$y];$P[]=idf_escape($e).($fd?"(".(+$fd).")":"").($rb?" DESC":"");$f[]=$e;$gd[]=($fd?$fd:null);$sb[]=$rb;}}if($f){$Yb=$v[$E];if($Yb){ksort($Yb["columns"]);ksort($Yb["lengths"]);ksort($Yb["descs"]);if($u["type"]==$Yb["type"]&&array_values($Yb["columns"])===$f&&(!$Yb["lengths"]||array_values($Yb["lengths"])===$gd)&&array_values($Yb["descs"])===$sb){unset($v[$E]);continue;}}$ra[]=array($u["type"],$E,"(".implode(", ",$P).")");}}}foreach($v
as$E=>$Yb)$ra[]=array($Yb["type"],$E,"DROP");if(!$ra)redirect_local(ME."table=".urlencode($a));queries_redirect_local(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$ra));}page_header('Indexes',$l,array("table"=>$a),$a);$n=array_keys(fields($a));if($_POST["add"]){foreach($L["indexes"]as$y=>$u){if($u["columns"][count($u["columns"])]!="")$L["indexes"][$y]["columns"][]="";}$u=end($L["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen')||array_filter($u["lengths"],'strlen')||array_filter($u["descs"]))$L["indexes"][]=array("columns"=>array(1=>""));}if(!$L){foreach($v
as$y=>$u){$v[$y]["name"]=$y;$v[$y]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$L["indexes"]=$v;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index Type<th>Column (length)<th>Name</thead>
';$w=1;foreach($L["indexes"]as$u){echo"<tr><td>".html_select("indexes[$w][type]",array(-1=>"")+$Jc,$u["type"],($w==count($L["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($u["columns"]);$s=1;foreach($u["columns"]as$y=>$e){echo"<span>".html_select("indexes[$w][columns][$s]",array(-1=>"")+$n,$e,($s==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($x=="sql"?"":$_GET["indexes"]."_")."');"),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$w][lengths][$s]' class='size' value='".h($u["lengths"][$y])."'>":""),($x!="sql"?checkbox("indexes[$w][descs][$s]",1,$u["descs"][$y],'descending'):"")," </span>";$s++;}echo"<td><input name='indexes[$w][name]' value='".h($u["name"])."' autocapitalize='off' class='form-control'>\n";$w++;}echo'</table>
<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add next"></noscript>
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$L=$_POST;if($_POST&&!$l&&!isset($_POST["add_x"])){restart_session();$E=trim($L["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect_local(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$E){if(DB!=""){$_GET["db"]=$E;queries_redirect_local(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($E),'Database has been renamed.',rename_database($E,$L["collation"]));}else{$j=explode("\n",str_replace("\r","",$E));$tf=true;$Zc="";foreach($j
as$k){if(count($j)==1||$k!=""){if(!create_database($k,$L["collation"]))$tf=false;$Zc=$k;}}queries_redirect_local(ME."db=".urlencode($Zc),'Database has been created.',$tf);}}else{if(!$L["collation"])redirect_local(substr(ME,0,-1));query_redirect_local("ALTER DATABASE ".idf_escape($E).(preg_match('/^[a-z0-9_]+$/i',$L["collation"])?" COLLATE $L[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$l,array(),DB);$d=collations();$E=DB;if($_POST)$E=$L["name"];elseif(DB!="")$L["collation"]=db_collation(DB,$d);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$r){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$r,$B)&&$B[1]){$E=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($E,"\n")?'<textarea id="name" name="name" rows="10" cols="40" class="form-control">'.h($E).'</textarea><br>':'<input name="name" id="name" value="'.h($E).'" maxlength="64" autocapitalize="off">')."\n".($d?html_select("collation",array(""=>"(".'collation'.")")+$d,$L["collation"]):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".CORE_ASSETS_WEB_ROOT."/admin/images/icons/adminer/plus.gif' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$l);$Ve=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Ic=array();$ce=array();foreach($Ve["fields"]as$s=>$m){if(substr($m["inout"],-3)=="OUT")$ce[$s]="@".idf_escape($m["field"])." AS ".idf_escape($m["field"]);if(!$m["inout"]||substr($m["inout"],0,2)=="IN")$Ic[]=$s;}if(!$l&&$_POST){$Ga=array();foreach($Ve["fields"]as$y=>$m){if(in_array($y,$Ic)){$X=process_input($m);if($X===false)$X="''";if(isset($ce[$y]))$g->query("SET @".idf_escape($m["field"])." = $X");}$Ga[]=(isset($ce[$y])?"@".idf_escape($m["field"]):$X);}$I=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ga).")";echo"<p><code class='jush-$x'>".h($I)."</code> <a href='".h(ME)."sql=".urlencode($I)."'>".'Edit'."</a>\n";if(!$g->multi_query($I))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$J=$g->store_result();if(is_object($J))select($J,$h);else
echo"<p class='message alert alert-info'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($ce)select($g->query("SELECT ".implode(", ",$ce)));}}echo'
<form action="" method="post">
';if($Ic){echo"<table cellspacing='0' class='table table-striped'>\n";foreach($Ic
as$y){$m=$Ve["fields"][$y];$E=$m["field"];echo"<tr><th>".$b->fieldName($m);$Y=$_POST["fields"][$E];if($Y!=""){if($m["type"]=="enum")$Y=+$Y;if($m["type"]=="set")$Y=array_sum($Y);}input($m,$Y,(string)$_POST["function"][$E]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$E=$_GET["name"];$L=$_POST;if($_POST&&!$l&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect_local("ALTER TABLE ".table($a)."\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($E),ME."table=".urlencode($a),'Foreign key has been dropped.');else{$jf=array_filter($L["source"],'strlen');ksort($jf);$Ef=array();foreach($jf
as$y=>$X)$Ef[$y]=$L["target"][$y];query_redirect_local("ALTER TABLE ".table($a).($E!=""?"\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($E).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$jf)).") REFERENCES ".table($L["table"])." (".implode(", ",array_map('idf_escape',$Ef)).")".(preg_match("/^($Od)\$/",$L["on_delete"])?" ON DELETE $L[on_delete]":"").(preg_match("/^($Od)\$/",$L["on_update"])?" ON UPDATE $L[on_update]":""),ME."table=".urlencode($a),($E!=""?'Foreign key has been altered.':'Foreign key has been created.'));$l='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$l";}}page_header('Foreign key',$l,array("table"=>$a),$a);if($_POST){ksort($L["source"]);if($_POST["add"])$L["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$L["target"]=array();}elseif($E!=""){$p=foreign_keys($a);$L=$p[$E];$L["source"][]="";}else{$L["table"]=$a;$L["source"]=array("");}$jf=array_keys(fields($a));$Ef=($a===$L["table"]?$jf:array_keys(fields($L["table"])));$Ie=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($L["db"]==""&&$L["ns"]==""){echo'Target table:
',html_select("table",$Ie,$L["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$w=0;foreach($L["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$jf,$X,($w==count($L["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$y)."]",$Ef,$L["target"][$y]);$w++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$Od),$L["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$Od),$L["on_update"]),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($E!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$L=$_POST;if($_POST&&!$l){$E=trim($L["name"]);$sa=" AS\n$L[select]";$A=ME."table=".urlencode($E);$C='View has been altered.';if(!$_POST["drop"]&&$a==$E&&$x!="sqlite")query_redirect_local(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($E).$sa,$A,$C);else{$Gf=$E."_adminer_".uniqid();drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($E).$sa,"DROP VIEW ".table($E),"CREATE VIEW ".table($Gf).$sa,"DROP VIEW ".table($Gf),($_POST["drop"]?substr(ME,0,-1):$A),'View has been dropped.',$C,'View has been created.',$a,$E);}}if(!$_POST&&$a!=""){$L=view($a);$L["name"]=$a;if(!$l)$l=$g->error;}page_header(($a!=""?'Alter view':'Create view'),$l,array("table"=>$a),$a);echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($L["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$L["select"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Oc=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$of=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$L=$_POST;if($_POST&&!$l){if($_POST["drop"])query_redirect_local("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($L["INTERVAL_FIELD"],$Oc)&&isset($of[$L["STATUS"]])){$Ze="\nON SCHEDULE ".($L["INTERVAL_VALUE"]?"EVERY ".q($L["INTERVAL_VALUE"])." $L[INTERVAL_FIELD]".($L["STARTS"]?" STARTS ".q($L["STARTS"]):"").($L["ENDS"]?" ENDS ".q($L["ENDS"]):""):"AT ".q($L["STARTS"]))." ON COMPLETION".($L["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect_local(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Ze.($aa!=$L["EVENT_NAME"]?"\nRENAME TO ".idf_escape($L["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($L["EVENT_NAME"]).$Ze)."\n".$of[$L["STATUS"]]." COMMENT ".q($L["EVENT_COMMENT"]).rtrim(" DO\n$L[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$l);if(!$L&&$aa!=""){$M=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$L=reset($M);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($L["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$L[EXECUTE_AT]$L[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($L["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($L["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Oc,$L["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$of,$L["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($L["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$L["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$L["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Ve=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$L=$_POST;$L["fields"]=(array)$L["fields"];if($_POST&&!process_fields($L["fields"])&&!$l){$Gf="$L[name]_adminer_".uniqid();drop_create("DROP $Ve ".idf_escape($da),create_routine($Ve,$L),"DROP $Ve ".idf_escape($L["name"]),create_routine($Ve,array("name"=>$Gf)+$L),"DROP $Ve ".idf_escape($Gf),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$L["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$l);if(!$_POST&&$da!=""){$L=routine($da,$Ve);$L["name"]=$da;}$d=get_vals("SHOW CHARACTER SET");sort($d);$We=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($L["name"]),'" maxlength="64" autocapitalize="off">
',($We?'Language'.": ".html_select("language",$We,$L["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($L["fields"],$d,$Ve);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$L["returns"],$d);}echo'</table>
<p>';textarea("definition",$L["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$E=$_GET["name"];$Yf=trigger_options();$Xf=array("INSERT","UPDATE","DELETE");$L=(array)trigger($E)+array("Trigger"=>$a."_bi");if($_POST){if(!$l&&in_array($_POST["Timing"],$Yf["Timing"])&&in_array($_POST["Event"],$Xf)&&in_array($_POST["Type"],$Yf["Type"])){$Nd=" ON ".table($a);$_b="DROP TRIGGER ".idf_escape($E).($x=="pgsql"?$Nd:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect_local($_b,$A,'Trigger has been dropped.');else{if($E!="")queries($_b);queries_redirect_local($A,($E!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($Nd,$_POST)));if($E!="")queries(create_trigger($Nd,$L+array("Type"=>reset($Yf["Type"]))));}}$L=$_POST;}page_header(($E!=""?'Alter trigger'.": ".h($E):'Create trigger'),$l,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$Yf["Timing"],$L["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$Xf,$L["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$Yf["Type"],$L["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($L["Trigger"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("Statement",$L["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($E!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$fa=$_GET["user"];$_e=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$L){foreach(explode(",",($L["Privilege"]=="Grant option"?"":$L["Context"]))as$bb)$_e[$bb][$L["Privilege"]]=$L["Comment"];}$_e["Server Admin"]+=$_e["File access on server"];$_e["Databases"]["Create routine"]=$_e["Procedures"]["Create routine"];unset($_e["Procedures"]["Create routine"]);$_e["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$_e["Columns"][$X]=$_e["Tables"][$X];unset($_e["Server Admin"]["Usage"]);foreach($_e["Tables"]as$y=>$X)unset($_e["Databases"][$y]);$Bd=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Bd[$X]=(array)$Bd[$X]+(array)$_POST["grants"][$y];}$wc=array();$Ld="";if(isset($_GET["host"])&&($J=$g->query("SHOW GRANTS FOR ".q($fa)."@".q($_GET["host"])))){while($L=$J->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$L[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$ld,PREG_SET_ORDER)){foreach($ld
as$X){if($X[1]!="USAGE")$wc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('/ WITH GRANT OPTION/',$L[0]))$wc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$L[0],$B))$Ld=$B[1];}}if($_POST&&!$l){$Md=(isset($_GET["host"])?q($fa)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect_local("DROP USER $Md",ME."privileges=",'User has been dropped.');else{$Dd=q($_POST["user"])."@".q($_POST["host"]);$me=$_POST["pass"];if($me!=''&&!$_POST["hashed"]){$me=$g->result("SELECT PASSWORD(".q($me).")");$l=!$me;}$fb=false;if(!$l){if($Md!=$Dd){$fb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Dd IDENTIFIED BY PASSWORD ".q($me));$l=!$fb;}elseif($me!=$Ld)queries("SET PASSWORD FOR $Dd = ".q($me));}if(!$l){$Se=array();foreach($Bd
as$Gd=>$r){if(isset($_GET["grant"]))$r=array_filter($r);$r=array_keys($r);if(isset($_GET["grant"]))$Se=array_diff(array_keys(array_filter($Bd[$Gd],'strlen')),$r);elseif($Md==$Dd){$Jd=array_keys((array)$wc[$Gd]);$Se=array_diff($Jd,$r);$r=array_diff($r,$Jd);unset($wc[$Gd]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Gd,$B)&&(!grant("REVOKE",$Se,$B[2]," ON $B[1] FROM $Dd")||!grant("GRANT",$r,$B[2]," ON $B[1] TO $Dd"))){$l=true;break;}}}if(!$l&&isset($_GET["host"])){if($Md!=$Dd)queries("DROP USER $Md");elseif(!isset($_GET["grant"])){foreach($wc
as$Gd=>$Se){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Gd,$B))grant("REVOKE",array_keys($Se),$B[2]," ON $B[1] FROM $Dd");}}}queries_redirect_local(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$l);if($fb)$g->query("DROP USER $Dd");}}page_header((isset($_GET["host"])?'Username'.": ".h("$fa@$_GET[host]"):'Create user'),$l,array("privileges"=>array('','Privileges')));if($_POST){$L=$_POST;$wc=$Bd;}else{$L=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$L["pass"]=$Ld;if($Ld!="")$L["hashed"]=true;$wc[(DB==""||$wc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($L["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($L["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($L["pass"]),'">
';if(!$L["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$L["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0' class='table table-striped'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer' class='help'>".'Privileges'."</a>";$s=0;foreach($wc
as$Gd=>$r){echo'<th>'.($Gd!="*.*"?"<input name='objects[$s]' value='".h($Gd)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$bb=>$rb){foreach((array)$_e[$bb]as$ze=>$Va){echo"<tr".odd()."><td".($rb?">$rb<td":" colspan='2'").' lang="en" title="'.h($Va).'">'.h($ze);$s=0;foreach($wc
as$Gd=>$r){$E="'grants[$s][".h(strtoupper($ze))."]'";$Y=$r[strtoupper($ze)];if($bb=="Server Admin"&&$Gd!=(isset($wc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$E><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$E value='1'".($Y?" checked":"").($ze=="All privileges"?" id='grants-$s-all'":($ze=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$l){$Wc=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X)))$Wc++;}queries_redirect_local(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$Wc),$Wc||!$_POST["kill"]);}page_header('Process list',$l);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="table table-striped table-only-border bulk_action">
';$s=-1;foreach(process_list()as$s=>$L){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($L
as$y=>$X)echo"<th>".($x=="sql"?"<a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/show-processlist.html#processlist_".strtolower($y)."' target='_blank' rel='noreferrer' class='help'>$y</a>":$y);echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$L["Id"],0):"");foreach($L
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("/Query|Killed/",$L["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($L["db"]!=""?"db=".urlencode($L["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$n=fields($a);$p=column_foreign_keys($a);$Id="";if($R["Oid"]){$Id=($x=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($Id));}parse_str($_COOKIE["adminer_import"],$la);$Te=array();$f=array();$Jf=null;foreach($n
as$y=>$m){$E=$b->fieldName($m);if(isset($m["privileges"]["select"])&&$E!=""){$f[$y]=html_entity_decode(strip_tags($E),ENT_QUOTES);if(is_shortable($m))$Jf=$b->selectLengthProcess();}$Te+=$m["privileges"];}list($N,$xc)=$b->selectColumnsProcess($f,$v);$Pc=count($xc)<count($N);$Z=$b->selectSearchProcess($n,$v);$Vd=$b->selectOrderProcess($n,$v);$z=$b->selectLimitProcess();$sc=($N?implode(", ",$N):"*".($Id?", $Id":"")).convert_fields($f,$n,$N)."\nFROM ".table($a);$yc=($xc&&$Pc?"\nGROUP BY ".implode(", ",$xc):"").($Vd?"\nORDER BY ".implode(", ",$Vd):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$gg=>$L){$sa=convert_field($n[key($L)]);echo$g->result("SELECT".limit($sa?$sa:idf_escape(key($L))." FROM ".table($a)," WHERE ".where_check($gg,$n).($Z?" AND ".implode(" AND ",$Z):"").($Vd?" ORDER BY ".implode(", ",$Vd):""),1));}exit;}if($_POST&&!$l){$wg=$Z;if(is_array($_POST["check"]))$wg[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$wg=($wg?"\nWHERE ".implode(" AND ",$wg):"");$we=$ig=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$we=array_flip($u["columns"]);$ig=($N?$we:array());break;}}foreach((array)$ig
as$y=>$X){if(in_array(idf_escape($y),$N))unset($ig[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ig===array())$I="SELECT $sc$wg$yc";else{$eg=array();foreach($_POST["check"]as$X)$eg[]="(SELECT".limit($sc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$n).$yc,1).")";$I=implode(" UNION ALL ",$eg);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$p)){if($_POST["save"]||$_POST["delete"]){$J=true;$ma=0;$I=table($a);$P=array();if(!$_POST["delete"]){foreach($f
as$E=>$X){$X=process_input($n[$E]);if($X!==null){if($_POST["clone"])$P[idf_escape($E)]=($X!==false?$X:idf_escape($E));elseif($X!==false)$P[]=idf_escape($E)." = $X";}}$I.=($_POST["clone"]?" (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a):" SET\n".implode(",\n",$P));}if($_POST["delete"]||$P){$Ta="UPDATE";if($_POST["delete"]){$Ta="DELETE";$I="FROM $I";}if($_POST["clone"]){$Ta="INSERT";$I="INTO $I";}if($_POST["all"]||($ig===array()&&is_array($_POST["check"]))||$Pc){$J=queries("$Ta $I$wg");$ma=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$J=queries($Ta.limit1($I,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$n)));if(!$J)break;$ma+=$g->affected_rows;}}}$C=lang(array('%d item has been affected.','%d items have been affected.'),$ma);if($_POST["clone"]&&$J&&$ma==1){$ad=last_id();if($ad)$C=sprintf('Item%s has been inserted.'," $ad");}queries_redirect_local(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$C,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$l='Ctrl+click on a value to modify it.';else{$J=true;$ma=0;foreach($_POST["val"]as$gg=>$L){$P=array();foreach($L
as$y=>$X){$y=bracket_escape($y,1);$P[]=idf_escape($y)." = ".(preg_match('/char|text/',$n[$y]["type"])||$X!=""?$b->processInput($n[$y],$X):"NULL");}$I=table($a)." SET ".implode(", ",$P);$vg=" WHERE ".where_check($gg,$n).($Z?" AND ".implode(" AND ",$Z):"");$J=queries("UPDATE".($Pc||$ig===array()?" $I$vg":limit1($I,$vg)));if(!$J)break;$ma+=$g->affected_rows;}queries_redirect_local(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ma),$J);}}elseif(!is_string($hc=get_file("csv_file",true)))$l=upload_error($hc);elseif(!preg_match('~~u',$hc))$l='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($la["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Sa=array_keys($n);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$hc,$ld);$ma=count($ld[0]);begin();$ef=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($ld[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$ef]*)$ef~",$X.$ef,$md);if(!$y&&!array_diff($md[1],$Sa)){$Sa=$md[1];$ma--;}else{$P=array();foreach($md[1]as$s=>$Pa)$P[idf_escape($Sa[$s])]=($Pa==""&&$n[$Sa[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Pa))));$J=insert_update($a,$P,$we);if(!$J)break;}}if($J)queries("COMMIT");queries_redirect_local(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ma),$J);queries("ROLLBACK");}}}$zf=$b->tableName($R);if(is_ajax())page_header('Select'.": $zf",$l);$P=null;if(isset($Te["insert"])){$P="";foreach((array)$_GET["where"]as$X){if(count($p[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('/[_%]/',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$P);if(!$f)echo"<p class='error'>".'Unable to select the table'.($n?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectSearchPrint($Z,$f,$v);$b->selectLimitPrint($z);$b->selectActionPrint($v);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$qc=$g->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$F=floor(max(0,$qc-1)/$z);}$I=$b->selectQueryBuild($N,$Z,$xc,$Vd,$z,$F);if(!$I)$I="SELECT".limit((+$z&&$xc&&$Pc&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").$sc,($Z?"\nWHERE ".implode(" AND ",$Z):"").$yc,($z!=""?+$z:null),($F?$z*$F:0),"\n");echo$b->selectQuery($I);$J=$g->query($I);if(!$J)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$F)$J->seek($z*$F);$Kb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$x=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last")$qc=(+$z&&$xc&&$Pc?($x=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($I) x")):count($M));if(!$M)echo"<p class='message alert alert-info'>".'No rows.'."\n";else{$za=$b->backwardKeys($a,$zf);echo"<div class='horScroll'><table id='table' cellspacing='0' class='table table-striped table-only-border bulk_action' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$xc&&$N?"":"<td style='width: 80px;'><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$Ad=array();$vc=array();reset($N);$Fe=1;foreach($M[0]as$y=>$X){if($y!=$Id){$X=$_GET["columns"][key($N)];$m=$n[$N?($X?$X["col"]:current($N)):$y];$E=($m?$b->fieldName($m,$Fe):"*");if($E!=""){$Fe++;$Ad[$y]=$E;$e=idf_escape($y);$Ec=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$rb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Ec.($Vd[0]==$e||$Vd[0]==$y||(!$Vd&&$Pc&&$xc[0]==$e)?$rb:'')).'">';echo(!$N||$X?apply_sql_function($X["fun"],$E):h(current($N)))."</a>";echo"<span class='column hidden'>","<a href='".h($Ec.$rb)."' title='".'descending'."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$vc[$y]=$X["fun"];next($N);}}$gd=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$y=>$X)$gd[$y]=max($gd[$y],min(40,strlen(utf8_decode($X))));}}echo($za?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$F%2==1)odd();}foreach($b->rowDescriptions($M,$p)as$D=>$L){$fg=unique_array($M[$D],$v);if(!$fg){$fg=array();foreach($M[$D]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$fg[$y]=$X;}}$gg="";foreach($fg
as$y=>$X){if(strlen($X)>64){$y="MD5(".(strpos($y,'(')?$y:idf_escape($y)).")";$X=md5($X);}$gg.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$xc&&$N?"":"<td>".checkbox("check[]",substr($gg,1),in_array(substr($gg,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Pc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$gg)."'>".'edit'."</a>"));foreach($L
as$y=>$X){if(isset($Ad[$y])){$m=$n[$y];if($X!=""&&(!isset($Kb[$y])||$Kb[$y]!=""))$Kb[$y]=(is_mail($X)?$Ad[$y]:"");$_="";$X=$b->editVal($X,$m);if($X!==null){if(preg_match('/blob|bytea|raw|file/',$m["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$gg;if($X==="")$X="&nbsp;";elseif($Jf!=""&&is_shortable($m))$X=shorten_utf8($X,max(0,+$Jf));else$X=h($X);if(!$_){foreach((array)$p[$y]as$o){if(count($p[$y])==1||end($o["source"])==$y){$_="";foreach($o["source"]as$s=>$jf)$_.=where_link($s,$o["target"][$s],$M[$D][$jf]);$_=($o["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($o["db"]),ME):ME).'select='.urlencode($o["table"]).$_;if(count($o["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$fg))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($fg
as$Tc=>$W)$_.=where_link($s++,$Tc,$W);}}if(!$_&&($_=$b->selectLink($L[$y],$m))===null){if(is_mail($L[$y]))$_="mailto:$L[$y]";if($Ce=is_url($L[$y]))$_=($Ce=="http"&&$ba?$L[$y]:"$Ce://www.adminer.org/redirect/?url=".urlencode($L[$y]));}$t=h("val[$gg][".bracket_escape($y)."]");$Y=$_POST["val"][$gg][bracket_escape($y)];$_c=h($Y!==null?$Y:$L[$y]);$kd=strpos($X,"<i>...</i>");$Gb=is_utf8($X)&&$M[$D][$y]==$L[$y]&&!$vc[$y];$If=preg_match('/text|lob/',$m["type"]);echo(($_GET["modify"]&&$Gb)||$Y!==null?"<td>".($If?"<textarea name='$t' cols='30' rows='".(substr_count($L[$y],"\n")+1)."' class='form-control'>$_c</textarea>":"<input name='$t' value='$_c' size='$gd[$y]'>"):"<td id='$t' onclick=\"selectClick(this, event, ".($kd?2:($If?1:0)).($Gb?"":", '".h('Use edit link to modify this value.')."'").");\">".$b->selectVal($X,$_,$m));}}if($za)echo"<td>";$b->backwardKeysPrint($za,$M[$D]);echo"</tr>\n";}if(is_ajax())exit;echo"</table></div>\n",(!$xc&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($M||$F)&&!is_ajax()){$Ub=true;if($_GET["page"]!="last"&&+$z&&!$Pc&&($qc>=$z||$F)){$qc=found_rows($R,$Z);if($qc<max(1e4,2*($F+1)*$z))$qc=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):"")));else$Ub=false;}if(+$z&&($qc===false||$qc>$z||$F)){echo"<p class='pages'>";$od=($qc===false?$F+(count($M)>=$z?2:1):floor(($qc-1)/$z));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($F+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$F).($F>5?" ...":"");for($s=max(1,$F-4);$s<min($od,$F+5);$s++)echo
pagination($s,$F);if($od>0){echo($F+5<$od?" ...":""),($Ub&&$qc!==false?pagination($od,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$od'>".'last'."</a>");}echo(($qc===false?count($M)+1:$qc-$F*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'');}echo"<p>\n",($qc!==false?"(".($Ub?"":"~ ").lang(array('%d row','%d rows'),$qc).") ":""),checkbox("all",1,0,'whole result')."\n";if($b->selectCommandPrint()){echo'<fieldset><h2>Edit</h2><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$qc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$oc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($oc['sql']);break;}}if($oc){echo "<fieldset style='margin-top: 8px;'><h2>Export</h2>";$de=$b->dumpOutput();echo($de?html_select("output",$de,$la["output"])." ":""),html_select("format",$oc,$la["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}$b->selectEmailPrint(array_filter($Kb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){exit;}}elseif(isset($_GET["variables"])){$nf=isset($_GET["status"]);page_header($nf?'Status':'Variables');$qg=($nf?show_status():show_variables());if(!$qg)echo"<p class='message alert alert-info'>".'No rows.'."\n";else{echo"<table cellspacing='0' class='table table-striped'>\n";foreach($qg
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($nf?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$wf=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$E=>$R){$t=js_escape($E);json_row("Comment-$t",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$y)json_row("$y-$t",nbsp($R[$y]));foreach($wf+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($R[$y]!=""){$X=number_format($R[$y],0,'.',',');json_row("$y-$t",($y=="Rows"&&$X&&$R["Engine"]==($lf=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($wf[$y]))$wf[$y]+=($R["Engine"]!="InnoDB"||$y!="Data_free"?$R[$y]:0);}elseif(array_key_exists($y,$R))json_row("$y-$t");}}}foreach($wf
as$y=>$X)json_row("sum-$y",number_format($X,0,'.',','));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$k=>$X)json_row("tables-".js_escape($k),$X);json_row("");}exit;}else{$Df=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Df&&!$l&&!$_POST["search"]){$J=true;$C="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$J=truncate_tables($_POST["tables"]);$C='Tables have been truncated.';}elseif($_POST["move"]){$J=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$C='Tables have been moved.';}elseif($_POST["copy"]){$J=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$C='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$J=drop_views($_POST["views"]);if($J&&$_POST["tables"])$J=drop_tables($_POST["tables"]);$C='Tables have been dropped.';}elseif($x!="sql"){$J=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$C='Tables have been optimized.';}elseif(!$_POST["tables"])$C='No tables.';elseif($J=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($L=$J->fetch_assoc())$C.="<b>".h($L["Table"])."</b>: ".h($L["Msg_text"])."<br>";}queries_redirect_local(substr(ME,0,-1),$C,$J);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$l,true);if($b->homepage()){if($_GET["ns"]!==""){$Cf=tables_list();if(!$Cf)echo"<p class='message alert alert-info'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n","<p><a href='?username=&db="._CONFIG_DB_NAME."&sql=' class='btn btn-default btn-sm'>Execute SQL</a>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<div class='horScroll'><table cellspacing='0' class='table table-striped table-only-border bulk_action' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Table','<td>'.'Engine','<td>'.'Collation','<td class="text-right">'.'Data Length','<td class="text-right">'.'Index Length','<td class="text-right">'.'Data Free','<td class="text-right">'.'Auto Increment','<td class="text-right">'.'Rows',(support("comment")?'<td>'.'Comment':''),"</thead>\n";foreach($Cf
as$E=>$U){$rg=($U!==null&&!preg_match("/table/i",$U));echo'<tr'.odd().'><td>'.checkbox(($rg?"views[]":"tables[]"),$E,in_array($E,$Df,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($E).'" title="'.'Show Data'.'">'.h($E).'</a>';if($rg){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($E).'" title="'.'Alter view'.'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($E).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$y=>$_)echo($_?"<td align='right'><a href='".h(ME."$_[0]=").urlencode($E)."' id='$y-".h($E)."' title='$_[1]'>?</a>":"<td id='$y-".h($E)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($E)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($Cf)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table></div>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(preg_match('/^(sql|sqlite|pgsql)$/',$x)?($x!="sqlite"?"<input class='btn btn-default btn-sm' type='submit' value='".'Analyze'."'> ":"")."<input class='btn btn-default btn-sm' type='submit' name='optimize' value='".'Optimize'."'> ":"").($x=="sql"?"<input class='btn btn-default btn-sm' type='submit' name='check' value='".'Check'."'> <input type='submit' class='btn btn-default btn-sm' name='repair' value='".'Repair'."'> ":"")."<input class='btn btn-default btn-sm' type='submit' name='truncate' value='".'Truncate'."'".confirm("formChecked(this, /tables/)")."> <input class='btn btn-default btn-sm' type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /tables|views/)").">\n";$j=(support("scheme")?schemas():$b->databases());if(count($j)!=1&&$x!="sqlite"){$k=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($j?html_select("target",$j,$k):'<input name="target" value="'.h($k).'" autocapitalize="off">')," <input class='btn btn-default btn-sm' type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input class='btn btn-default btn-sm' type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='token' value='$T'>\n";}echo"</form>\n";}echo'<p><a class="btn btn-default" href="'.h(ME).'create=">'.'Create table'."</a>\n";if(support("view"))echo'<a class="btn btn-default" href="'.h(ME).'view=">'.'Create view'."</a>\n";if($Cf)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();