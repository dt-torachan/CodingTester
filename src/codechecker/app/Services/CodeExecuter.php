<?php

namespace App\Services;

class CodeExecuter
{
    //
    public function run($data){
        $out = "";
        $language_id = $data["language"];
        $language = config("devlang.$language_id");
        $dirname = $language["dirname"];
        $filename = 'Main.'.$language["extention"];
        $dirpath = "../storage/$dirname";
        $filepath = "../storage/$dirname/$filename";
        $exec_command = $language["exec_command"];
        $code = str_replace("\"","\\\"",$data["code"]);


        if(!file_exists($dirpath)){
            exec("mkdir -p $dirpath");
        }
        
        exec('echo "'.$code.'" > '.$filepath);
        if($language["need_compile"]){
            $compile_command = $language["compile_command"];
            exec("$compile_command $filepath");
        }
        exec("$exec_command", $out);

        return $out;
    }
}
