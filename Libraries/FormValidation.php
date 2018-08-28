<?php

    defined('BASE_PATH') or die('No direct script access allowed'); // if a script bypasess it must have configured this constant in their enviroment to run it ( security update )

    /*
      always place trim in front of every other attribute
      always place matches on the second input

      trim - trims whitespace
      required - can't be empty
      matches - equals some other form input
      min_length[:num] - minimum length of string has to be :num
      max_length[:num] - maximum length has to be :num
      alpha - contains only alpha characters
      alpha_numeric - contains only alpha numeric characters
      numeric - contains numbers
      integer - contains integer
      decimal - contains decimals
      valid_email - contains a valid email adress
      html_clear - puts it through html_entities

    */
    class FormValidation {

      private static $formNames=array();
      private static $formRules=array();
      private static $formErrors=array();

      public static function run(){
        if(empty($_POST)) return false;
        else return true;
      }

      public static function validation_errors(){
        $return_errors = [];
        foreach (self::$formErrors as $key => $value) {
          if(isset($value) && $value != '')
            $return_errors[] = $value;
        }
        return $return_errors;
      }

      public static function set_rules($form_name,$form_rules){
        //error handling has to be done
        array_push(self::$formNames,$form_name);
        array_push(self::$formRules,$form_rules);
      }

      public static function validate_data(){
        $i=0;
        foreach($_POST as $key => $value){
          $error='';
          if(!isset(self::$formRules[$i])) break;
          $rules = explode('|',self::$formRules[$i]);
          foreach($rules as $k2y => $value){
            switch(trim($value,' ')){
              //trim
              case 'trim':
                $_POST[$key]=trim($_POST[$key],' ');
                break;
              //html_clear
              case 'html_clear':
                $_POST[$key]=htmlentities($_POST[$key]);
                break;
              //required
              case 'required':
                if(empty($_POST[$key])) $error=$error.$key.' has to be filled in. ';
                break;
              //alpha
              case 'alpha':
                if(!ctype_alpha($_POST[$key])) $error=$error.$key.' must contain only alpha characters. ';
                break;
              //alpha_numeric
              case 'alpha_numeric':
                if(!ctype_alnum($_POST[$key])) $error=$error.$key.' must contain only alpha and numeric characters. ';
                break;
              //numeric
              case 'numeric':
                if(!is_numeric($_POST[$key])) $error=$error.$key.' must contain only numeric values. ';
                break;
              //integer
              case 'integer':
                if(!is_numeric($_POST[$key]) || !is_int($_POST[$key])) $error=$error.$key.' must be a digit. ';
                break;
              //decimal
              case 'decimal':
                if(!is_numeric($_POST[$key]) || !is_double($_POST[$key])) $error=$error.$key.' must be a decimal. ';
                break;
              //valid_email
              case 'valid_email':
                if(!filter_var($_POST[$key], FILTER_VALIDATE_EMAIL)) $error=$error.$key.' must be a valid email adress. ';
                break;
            }
          }

          //if matches
          $rules=implode(' ',$rules);
          $matches=array();
          preg_match_all('/matches\[[A-Za-z0-9_]*\]/',$rules,$matches);

          //if max or min
          preg_match_all('/(max_length|min_length|eq)\[([0-9]+)\]/', $rules, $match_min_max );
          for ($j=0; $j < count($match_min_max[1]); $j++) { 
            if ( $match_min_max[1][$j] === 'min_length' ){
                $error .= (strlen($_POST[$key]) < $match_min_max[2][$j]) ? $key . ' has to be at least '. $match_min_max[2][$j] . ' characters.': '';
            }
            if ( $match_min_max[1][$j] === 'max_length' ){
                $error .= (strlen($_POST[$key]) > $match_min_max[2][$j]) ? $key . ' has to be at most '. $match_min_max[2][$j]  . ' characters.': '';
            }
            if ( $match_min_max[1][$j] === 'eq' ){
                $error .= (strlen($_POST[$key]) === $match_min_max[2][$j]) ? $key . ' has to be exactly '. $match_min_max[2][$j] . ' characters.': '';
            }
          }


          foreach($matches[0] as $k3y => $value){
            $distance=strpos($value,']')-strpos($value,'[');
            $control=substr($value,strpos($value,'[')+1,$distance-1);
            if($_POST[$key]!==$_POST[$control]) $error=$error.$key.' does not match '.$control.'. ';
          }
          $rules='';
          self::$formErrors[]=$error;
          $i++;
        }
        foreach(self::$formErrors as $key => $value){
          if(!empty($value)) return false;
        }
        return true;
      }
    }
