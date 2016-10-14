<?php

namespace app\models;

use Yii;
use yii\base\Model;

class PardavimuForma extends Model
{
	public $pardavimoKodas;
	public $kategorija;
	public $prekesPavadinimas;
	public $pirkejoVardas;
	public $pirkejoPavarde;
	public $pirkejoTelefonoNumeris;
	public $pirkejoElPastas;
	public $kaina;
	public $apmokejimoPozymis;
	public $komentaras;
	
	public function rules()
	{
		return [
		[['pardavimoKodas', 'kategorija', 'prekesPavadinimas', 'pirkejoVardas',
		'pirkejoPavarde', 'pirkejoTelefonoNumeris', 'kaina', 'apmokejimoPozymis'], 
		'required'],
		['pirkejoElPastas', 'email', 'message' => "Blogas elektroninio pasto formatas"],
		['pirkejoTelefonoNumeris', 'match', 'pattern' =>'/(^86+[0-9]{7,7}$|^(\+370)+[0-9]{7,7}$)/', 'message' => 'Blogai suvestas numeris
		galimi formatai +370 ******* arba 86 *******'
		],
		['kaina', 'number', 'message' => 'Laukas gali susideti tik is skaiciu ir vieno tasko'],
		];
	}
	
	public function attributeLabels()
    {
        return [
            'pardavimoKodas' => 'Pardavimo kodas',
			'kategorija' => 'Kategorija',
			'prekesPavadinimas' => 'Prekes pavadinimas',
			'pirkejoVardas' => 'Pirkejo vardas',
			'pirkejoPavarde' => 'Pirkejo pavarde',
			'pirkejoTelefonoNumeris' => 'Pirkejo telefono numeris',
			'pirkejoElPastas' => 'Pirkejo elektroninis pastas',
			'kaina' => 'Prekes kaina eurais',
			'apmokejimoPozymis' => 'Ar sumoketa',
        ];
    }
}