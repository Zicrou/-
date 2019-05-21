<?php
function codeAleatoire($car)
{
    $string = "";
    $chaine = "2643789ABDCEFGHJKMNPRTUVW";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++)
    {
        $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
}

function CodificationBatimant($code,$type) {
     $string=$type.codeAleatoire(2);
    
     $sad=get_instance();
    
    $sad->load->model('M_batiments');
    
    //verfication existance du code dans la base
    if($sad->M_batiments->codebat_exists($string,$code))
    {
        CodificationBatimant($code,$type);
    }
    else
    {
        return $string;
    }
        
}


function CodificationClassephy($code_str,$codebatiment) {
    $string=$codebatiment.codeAleatoire(2);

    $sad=get_instance();
  
    $sad->load->model('M_classe_physique');

    //verfication existance du code dans la base
    if($sad->M_classe_physique->codeclasse_exists($string,$code_str))
    {
        CodificationClassephy($code_str,$codebatiment);
    }
    else
    {
        return $string;
    }

}


function CodificationProgramme($code_section) {
    $string= 'P'.$code_section.'-'.codeAleatoire(2);
    $sad= get_instance();
    $sad->load->model('M_programmes');
//verfication existance du code dans la base
    if($sad->M_programmes->code_programme_exists($string))
        CodificationProgramme($code_section);
    else
        return $string;
}


