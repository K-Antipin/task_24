<?php

use Core\Model;

class Model_Portfolio extends Model
{
    public static function get_data()
    {
        // Здесь мы просто симулируем реальные данные.
        return array(
            array(
                'Year' => '2022',
                'Site' => 'http://DunkelBeer.ru',
                'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
            ),
            array(
                'Year' => '2022',
                'Site' => 'http://ZopoMobile.ru',
                'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
            ),
            array(
                'Year' => '2023',
                'Site' => 'https://buggy-rental.ru',
                'Description' => 'Готовые туры из Москвы на багги. 9 готовых программ.'
            ),
            array(
                'Year' => '2023',
                'Site' => 'https://baby-lider.ru',
                'Description' => 'Сайт визитка частного детского сада в Коммунарке, Московская область.'
            ),
        );
    }
}
