<?php
//normalize string
//remove all the special characters 
@author Cássio Daltoé


function normalizeString($string) {
    $string = preg_replace('/[^A-Za-z0-9\-]/', '',  strtr($string,"áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));

    return $string;
}
