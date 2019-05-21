<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/10/2017
 * Time: 12:48
 */

function date_heure_parse_en2fr($date)
{
    if($date == null || $date == '')
        return '';
    else
    {
        $new_date = date('d/m/Y H:i:s',strtotime($date));
        return $new_date;
    }
}

function jr_en_fr($jour)
{
    switch($jour)
    {
        case 'Monday':
        return 'Lundi';
        break;

        case 'Tuesday':
        return 'Mardi';
        break;

        case 'Wednesday':
            return 'Mercredi';
            break;

        case 'Thurday':
            return 'Jeudi';
            break;

        case 'Friday':
            return 'Vendredi';
            break;

        case 'Saturday':
            return 'Samedi';
            break;

        case 'Sunday':
            return 'Dimanche';
            break;
    }
}