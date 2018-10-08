<?php
namespace pgen;
include 'vendor/autoload.php';

// pgen new index.php
// print_r($_SERVER);
print_r(av(0));echo PHP_EOL;

if(ac()>2){
    //phpinfo();
    if(av(1)=='new'){
        //print_r(array_slice(av(),3));
        if(av(2)=='php'){
            foreach(array_slice(av(),3) as $name){
                $filename = $name.'.php';
                if(!file_exists($filename)){
                    file_put_contents($filename,'<?php'.PHP_EOL.'//');
                }
            }
        }

        if(av(2)=='phar'){
            foreach(array_slice(av(),3) as $name){
            $filename = $name.'.phar';
            if(!file_exists($filename)){
                //file_put_contents($filename,'<?php'.PHP_EOL.'//');
                try {
                    $tarphar = new \PharData($name.'.tar');
                    // convert it to the phar file format
                    // note that myphar.tar is *not* unlinked
                    $phar = $tarphar->convertToExecutable(\Phar::PHAR); // creates myphar.phar
                    $phar->setStub("#!/usr/bin/env php".PHP_EOL.$phar->createDefaultStub('index.php'));
                    // creates myphar.phar.tgz
                    //$compressed = $tarphar->convertToExecutable(Phar::TAR, Phar::GZ, '.phar.tgz');
                } catch (\Exception $e) {
                    // handle the error here
                }

            }
        }
        }

       
    }
}




