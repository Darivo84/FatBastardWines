<?php include_once('defcon.php'); ?>
<?php
#################################
#	DATABASE ABSTRACTION LAYER	#
#	Author: Clifford Brown		#
#	PHP Version: Ver4			#
#								#
#################################
class DataLayer{
	#DECLARE VARIABLES
	var $link;
	var $errors= array();
	var $debug = false;
	var $totalrows = 0;
	var $insert_id;
	var $debug_log = array();
	
	#DECLARE ONLOAD FUNCTION
	function DataLayer(){
	
	}
	
	#FUNCTIONS CALLS
	function dbCon($host, $name, $pass, $db){
		$link= mysql_connect($host, $name, $pass);
		if(!$link){
			$this->setError("Couldn't connect database server. Please check your hostname, username and/or password.");
			return false;
		}
		if (!mysql_select_db($db,$link)){
			$this->setError("Couldn't select database: $db");
			return false;
		}
		$this->link=$link;
		$this->debug("Connected to database");
		return true;
	}
	function getError(){
		if(count($this->errors)>0){
			return $this->errors[count($this->errors)-1];
		}
	}
	function setError($str){
		array_push($this->errors,$str);
	}
	function _query($query){
		if(! $this->link){
			$this->setError("No active db connection");
			return false;
		}
		#print ($query."<br />");
		$result = mysql_query ($query, $this->link);
		if (!$result)
			$this->setError("Error: ".mysql_error());
		return $result;
	}
	function setQuery($query){
		if (!$result=$this->_query($query))
			return false;
		$this->insert_id=mysql_insert_id($this->link);
		$this->debug("Insert ID =".$this->insert_id);
		return mysql_affected_rows($this->link);
	}
	function getQuery($query){
		if (!$result=$this->_query($query))
			return false;
		$ret=array();
		while ($row=mysql_fetch_assoc($result)){
			$ret[] = $row;
		}
		$this->totalrows = mysql_num_rows($result);
		$this->debug("Total Rows =".$this->totalrows);
		mysql_free_result($result);
		return $ret;
	}
	function getResource(){
		return $this->link;
	}
	function select($table, $condition="", $sort="", $limit="",$rowslimit="", $distinct="", $group_by=""){
		$error="";
		if ($rowslimit!=""){
			$query = "SELECT $rowslimit FROM $table";
		}
		else if($distinct!=""){
			$query = "SELECT DISTINCT $distinct FROM $table";
		}
		else{
			$query = "SELECT * FROM $table";
		}
		$query .= $this->_makeWhereList($condition);
		if ($group_by!=""){
			//$result = mysql_query($query);
			//$this->totalrows=mysql_num_rows($result);
			$query .=" GROUP BY ".$group_by;
		}
		if ($sort!="")
			$query .=" order by $sort";
		if ($limit!=""){
			//$result = mysql_query($query);
			//$this->totalrows=mysql_num_rows($result);
			$query .=" LIMIT ".$limit[0]." , ".$limit[1];
		}
		$this->debug($query);
			return $this->getQuery($query,$error);
	}
	function insert($table, $add_array){
		$add_array = $this->_quote_vals($add_array);
		$keys = "(".implode(array_keys($add_array),", ").")";
		$values = "values (".implode(array_values($add_array),", ").")";
		$query = "INSERT INTO $table $keys $values";
		$this->debug($query);
			return $this->setQuery($query);
	}
	function update($table, $update_array, $condition=""){
		$update_pairs = array();
		foreach ($update_array as $field=>$val){
			array_push ($update_pairs,"$field=".$this->_quote_val($val));
		}
		$query = "UPDATE $table set ";
		$query .= implode(", ",$update_pairs);
		$query .= $this->_makeWhereList($condition);
		$this->debug($query);
			return $this->setQuery($query);
	}
	function delete($table, $condition=""){
		$query= "DELETE FROM $table";
		$query .= $this->_makeWhereList($condition);
		$this->debug($query);
		
		return @$this->setQuery($query, $error);		
	}
	function debug($msg){
		if ($this->debug){
			print "$msg<br/ >";
			//$this->debug_log[]=$msg;
		}
	}
	function _makeWhereList($condition){
		if(empty($condition))
			return "";
		$retstr = " WHERE ";
		if (is_array($condition)){
			$cond_pairs=array();
			foreach($condition as $field=>$val){
				array_push($cond_pairs, "$field=".$this->_quote_val($val));
			}
			$retstr .= implode(" and ", $cond_pairs);
		}elseif(is_string($condition) && !empty($condition))
			$retstr .= $condition;
		return $retstr;
	}	
	function _quote_val($val){
		if (is_numeric($val)){
			if(substr($val, 0, 1)==0){
				return "'".addslashes($val)."'";	
			}else{
				return $val;
			}
		}
		return "'".addslashes($val)."'";
	}
	function _quote_vals($array){
		foreach($array as $key=>$val)
			$ret[$key]=$this->_quote_val($val);
		return $ret;
	}
}
?>