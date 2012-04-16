<?php
/*
 * FROM: http://www.mygeekpal.com/simple-database-class-for-php/
 */

class Database {

var $connection;
var $database;
var $rows = array();
var $count;
var $result;

/* Create a database connection */
function connect ($dbuser,$dbpass,$dbhost,$dbname) {
  $this->connection = mysql_connect($dbhost,$dbuser,$dbpass);
  $this->database = mysql_select_db($dbname);
}

/* Query a MySQL Database */
function query ($query) {
  $this->result = mysql_query($query) or die(mysql_error());
  return $this->result;
}

function error($message) {
	$output = "<div class=\"notification error png_bg\">";
	$output .= "<a href=\"#\" class=\"close\">";
	$output .= "<img src=\"resources/images/icons/cross_grey_small.png\" title=\"Close\" alt=\"close\" /></a>";
	$output .= "<div>Error: ".$message;
		if (mysql_error() != "") {
			$output .= " <b><em>".mysql_error()."</em></b>";
		}
	$output .= "</div></div>";
	return $output;
}
function showError($error) {
	$query = "SELECT * FROM ".DB_PREFIX."errors WHERE errorcode = '$error'";
	$errors = mysql_fetch_assoc($this->result);
	$output = $this->error($errors[$error]);
	return $output;
                }


function getSiteConfig($site) {
	$query = "SELECT * FROM ".DB_PREFIX."sites WHERE server_name = '$site'";
	$this->result = mysql_query($query) or die(mysql_error());
	$output = mysql_fetch_assoc($this->result);
		if ($this->count($query) > 1) {
			$output['error'] .= $this->error("Two sites with same host. I will always take the first entered.");		
		}
		$output = str_replace("&gt;", ">", $output);
		$output = str_replace("&lt;", "<", $output);
		$output = str_replace("&quot;", '"', $output);
		$output = str_replace("&#039;", "'", $output);

/* -- USEFUL CODE TO REMEMBER FOR PAGE STITCHER -- 
	$getUser = "SELECT * FROM ".DB_PREFIX."users WHERE id=".$output['updatedby'];
	$User = mysql_query($getUser) or die($this->error("Fred is clever!"));
	$output['user']	= mysql_fetch_assoc($User);
/* // -- */
	return $output;
}

/************************************************************************************
** USER FUNCTIONS
*************************************************************************************/
function addUser($username, $first_name, $last_name, $email, $passwd, $acl) {
	$passwd = md5($passwd);
	$query = "INSERT INTO ".DB_PREFIX."users ";
	$query .= "(username, first_name, last_name, email, passwd, acl) VALUES ";
	$query .= "('".$username."', '".$first_name."', '".$last_name."', '".$email."', '".$passwd."', '".$acl."')";
	$result = mysql_query($query);
	return $result;
}

function updateUser($id) {
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$username = $_POST['username'];
	$acl = $_POST['acl'];
	$email = $_POST['email'];
	
	$query = "UPDATE ".DB_PREFIX."users SET ";
	$query .= "first_name='$firstname', last_name='$lastname',";
	$query .= " email='".$email."', username='$username', acl=".$acl;
	$query .= " WHERE id=".$id;
	$result = mysql_query($query);
	return $result;
}

function editUser($id) {
	$query = "SELECT * FROM ".DB_PREFIX."users WHERE id=".$id;
	$this->result = mysql_query($query);
	while($r = mysql_fetch_assoc($this->result)) {
		$this->row[] = $r;
	}
	mysql_free_result($this->result);
	$output = $this->row[0];
return $output;
}

function deleteUser($id) {
	$query = "DELETE FROM ".DB_PREFIX."users WHERE id=".$id;
	$output = mysql_query($query);
	$output .= header("Location: index.php?page=users&message=DeleteConfirmed");
return $output;
}
/************************************************************************************
** SITE EDITING FUNCTIONS
*************************************************************************************/
function addSite() {
	$select = "SELECT * FROM ".DB_PREFIX."sites";
	$res = mysql_query($select);
	$num = mysql_num_fields($res);
	$fields = array();
	for ($i=0; $i < $num; $i++) {
		array_push($fields, mysql_field_name($res, $i));	
	}
	$ridslashes = implode("$ ", $_POST);
	$ridslashes = htmlentities($ridslashes, ENT_QUOTES);

	$rearray = explode("$ ", $ridslashes);
	$postvals = implode("', '", $rearray);
	
	$echo = "INSERT INTO ".DB_PREFIX."sites (".implode(", ", $fields).") VALUES ('".$postvals."')";
	echo $echo;
	$query = $echo;
	$result = mysql_query($query);
	return $result;
}

function updateSite($id) {
$select = "SELECT * FROM ".DB_PREFIX."sites";
$res = mysql_query($select);
$num = mysql_num_fields($res);
for ($i=0; $i < $num; $i++) {
	$update .= mysql_field_name($res, $i)."='".$_POST[mysql_field_name($res, $i)]."', ";
	}
	$update = substr($update, 0, -2);
$echo = "UPDATE ".DB_PREFIX."sites SET ".$update." WHERE id=".$id;
echo $echo;
	$query = $echo;
	$result = mysql_query($query);
	return $result;

}
function editSite($id) {
	$query = "SELECT * FROM ".DB_PREFIX."sites WHERE id=".$id;
	$this->result = mysql_query($query);
	while($r = mysql_fetch_assoc($this->result)) {
		$this->row[] = $r;
	}
	mysql_free_result($this->result);
	$output = $this->row[0];
return $output;
}
function deleteSite($id) {
	$query = "DELETE FROM ".DB_PREFIX."sites WHERE id=".$id;
	$output = mysql_query($query);
	$output .= header("Location: index.php?page=sites&message=DeleteConfirmed");
return $output;
}

function valCache($configtable) {
	$query = "SELECT `allowCache` FROM ".$configtable;	
	$this->result = mysql_query($query) or die(mysql_error());
	while($r = mysql_fetch_assoc($this->result)) {
		$this->row[] = $r;
	}
	mysql_free_result($this->result);
	return $this->row[0]['allowCache'];
}

/* Query a MySQL Dabase
Returns Both arrays Assoc & Indexed */
function getrows ($query) {
  $this->result = mysql_query($query);
  while($r = mysql_fetch_array($this->result,MYSQL_BOTH))
    $this->rows[] = $r;
    mysql_free_result($this->result);
    return $this->rows;
}


function UgetMenu($parent) {
	$query = "SELECT * FROM ".DB_PREFIX."menu WHERE menu='$parent' AND published=1";
	$this->result = mysql_query($query);
	while($row = mysql_fetch_assoc($this->result)) {
		$output[] = $row;
	}
	return $output;
	
}
function getUsers() {
	$query = "SELECT * FROM ".DB_PREFIX."users";
	$this->result = mysql_query($query);
	while($row = mysql_fetch_assoc($this->result)) {
		$output[] = $row;
	}
	return $output;
}
function getSites() {
	$query = "SELECT * FROM ".DB_PREFIX."sites";
	$this->result = mysql_query($query);
	while($row = mysql_fetch_assoc($this->result)) {
			$output[] = $row;
	}
	return $output;
}
function getMenu($parent) {
        $query = "SELECT * FROM ".DB_PREFIX."menu WHERE menu='$parent' AND published=1";
        $this->result = mysql_query($query);
        while($r = mysql_fetch_assoc($this->result)) {
                $this->rows[] = $r;
        }
        $array = $this->rows;
}


/* Count Number of rows query */
function count ($query) {
  $this->result = mysql_query($query);
  $this->count = mysql_num_rows($this->result);
  return $this->count;
}

/* Create a Safe Query */
function escapedata($data) {
    return mysql_real_escape_string($data);
}

/* Close connection */
function __destruct(){ @mysql_close($this->connection); }

}
?>
