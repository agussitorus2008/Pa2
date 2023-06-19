<?php

namespace Database\Seeders;

use App\Models\Province;
use App\Models\City;
use App\Models\Subdistrict;
use Illuminate\Database\Seeder;

class RegionalSeeder extends Seeder
{
    public function run()
    {
        $province = array(
            [
                "province_id" => "1",
                "province_name" => "Sumatera Utara"
            ]
        );
        $city = array(
            [
                "city_id" => "15",
                "province_id" => "1",
                "city_name" => "Kabupaten Asahan",
                "postal_code" => "21214"
            ],
            [
                "city_id" => "52",
                "province_id" => "1",
                "city_name" => "Kabupaten Batu Bara",
                "postal_code" => "21655"
            ],
            [
                "city_id" => "70",
                "province_id" => "1",
                "city_name" => "Kota Binjai",
                "postal_code" => "20712"
            ],
            [
                "city_id" => "110",
                "province_id" => "1",
                "city_name" => "Kabupaten Dairi",
                "postal_code" => "22211"
            ],
            [
                "city_id" => "112",
                "province_id" => "1",
                "city_name" => "Kabupaten Deli Serdang",
                "postal_code" => "20511"
            ],
            [
                "city_id" => "146",
                "province_id" => "1",
                "city_name" => "Kabupaten Humbang Hasundutan",
                "postal_code" => "22457"
            ],
            [
                "city_id" => "173",
                "province_id" => "1",
                "city_name" => "Kabupaten Karo",
                "postal_code" => "22119"
            ],
            [
                "city_id" => "217",
                "province_id" => "1",
                "city_name" => "Kabupaten Labuhan Batu",
                "postal_code" => "21412"
            ],
            [
                "city_id" => "218",
                "province_id" => "1",
                "city_name" => "Kabupaten Labuhan Batu Selatan",
                "postal_code" => "21511"
            ],
            [
                "city_id" => "219",
                "province_id" => "1",
                "city_name" => "Kabupaten Labuhan Batu Utara",
                "postal_code" => "21711"
            ],
            [
                "city_id" => "229",
                "province_id" => "1",
                "city_name" => "Kabupaten Langkat",
                "postal_code" => "20811"
            ],
            [
                "city_id" => "268",
                "province_id" => "1",
                "city_name" => "Kabupaten Mandailing Natal",
                "postal_code" => "22916"
            ],
            [
                "city_id" => "278",
                "province_id" => "1",
                "city_name" => "Kota Medan",
                "postal_code" => "20228"
            ],
            [
                "city_id" => "307",
                "province_id" => "1",
                "city_name" => "Kabupaten Nias",
                "postal_code" => "22876"
            ],
            [
                "city_id" => "308",
                "province_id" => "1",
                "city_name" => "Kabupaten Nias Barat",
                "postal_code" => "22895"
            ],
            [
                "city_id" => "309",
                "province_id" => "1",
                "city_name" => "Kabupaten Nias Selatan",
                "postal_code" => "22865"
            ],
            [
                "city_id" => "310",
                "province_id" => "1",
                "city_name" => "Kabupaten Nias Utara",
                "postal_code" => "22856"
            ],
            [
                "city_id" => "319",
                "province_id" => "1",
                "city_name" => "Kabupaten Padang Lawas",
                "postal_code" => "22763"
            ],
            [
                "city_id" => "320",
                "province_id" => "1",
                "city_name" => "Kabupaten Padang Lawas Utara",
                "postal_code" => "22753"
            ],
            [
                "city_id" => "323",
                "province_id" => "1",
                "city_name" => "Kota Padang Sidempuan",
                "postal_code" => "22727"
            ],
            [
                "city_id" => "325",
                "province_id" => "1",
                "city_name" => "Kabupaten Pakpak Bharat",
                "postal_code" => "22272"
            ],
            [
                "city_id" => "353",
                "province_id" => "1",
                "city_name" => "Kota Pematang Siantar",
                "postal_code" => "21126"
            ],
            [
                "city_id" => "389",
                "province_id" => "1",
                "city_name" => "Kabupaten Samosir",
                "postal_code" => "22392"
            ],
            [
                "city_id" => "404",
                "province_id" => "1",
                "city_name" => "Kabupaten Serdang Bedagai",
                "postal_code" => "20915"
            ],
            [
                "city_id" => "407",
                "province_id" => "1",
                "city_name" => "Kota Sibolga",
                "postal_code" => "22522"
            ],
            [
                "city_id" => "413",
                "province_id" => "1",
                "city_name" => "Kabupaten Simalungun",
                "postal_code" => "21162"
            ],
            [
                "city_id" => "459",
                "province_id" => "1",
                "city_name" => "Kota Tanjung Balai",
                "postal_code" => "21321"
            ],
            [
                "city_id" => "463",
                "province_id" => "1",
                "city_name" => "Kabupaten Tapanuli Selatan",
                "postal_code" => "22742"
            ],
            [
                "city_id" => "464",
                "province_id" => "1",
                "city_name" => "Kabupaten Tapanuli Tengah",
                "postal_code" => "22611"
            ],
            [
                "city_id" => "465",
                "province_id" => "1",
                "city_name" => "Kabupaten Tapanuli Utara",
                "postal_code" => "22414"
            ],
            [
                "city_id" => "481",
                "province_id" => "1",
                "city_name" => "Kabupaten Toba Samosir",
                "postal_code" => "22316"
            ],
        );
        $subdistrict = array(
            [
                "subdistrict_id" => "214",
                "city_id" => "15",
                "subdistrict_name" => "Aek Kuasan"
            ],
            [
                "subdistrict_id" => "215",
                "city_id" => "15",
                "subdistrict_name" => "Aek Ledong"
            ],
            [
                "subdistrict_id" => "216",
                "city_id" => "15",
                "subdistrict_name" => "Aek Songsongan"
            ],
            [
                "subdistrict_id" => "217",
                "city_id" => "15",
                "subdistrict_name" => "Air Batu"
            ],
            [
                "subdistrict_id" => "218",
                "city_id" => "15",
                "subdistrict_name" => "Air Joman"
            ],
            [
                "subdistrict_id" => "219",
                "city_id" => "15",
                "subdistrict_name" => "Bandar Pasir Mandoge"
            ],
            [
                "subdistrict_id" => "220",
                "city_id" => "15",
                "subdistrict_name" => "Bandar Pulau"
            ],
            [
                "subdistrict_id" => "221",
                "city_id" => "15",
                "subdistrict_name" => "Buntu Pane"
            ],
            [
                "subdistrict_id" => "222",
                "city_id" => "15",
                "subdistrict_name" => "Kisaran Barat Kota"
            ],
            [
                "subdistrict_id" => "223",
                "city_id" => "15",
                "subdistrict_name" => "Kisaran Timur Kota"
            ],
            [
                "subdistrict_id" => "224",
                "city_id" => "15",
                "subdistrict_name" => "Meranti"
            ],
            [
                "subdistrict_id" => "225",
                "city_id" => "15",
                "subdistrict_name" => "Pulau Rakyat"
            ],
            [
                "subdistrict_id" => "226",
                "city_id" => "15",
                "subdistrict_name" => "Pulo Bandring"
            ],
            [
                "subdistrict_id" => "227",
                "city_id" => "15",
                "subdistrict_name" => "Rahuning"
            ],
            [
                "subdistrict_id" => "228",
                "city_id" => "15",
                "subdistrict_name" => "Rawang Panca Arga"
            ],
            [
                "subdistrict_id" => "229",
                "city_id" => "15",
                "subdistrict_name" => "Sei Dadap"
            ],
            [
                "subdistrict_id" => "230",
                "city_id" => "15",
                "subdistrict_name" => "Sei Kepayang"
            ],
            [
                "subdistrict_id" => "231",
                "city_id" => "15",
                "subdistrict_name" => "Sei Kepayang Barat"
            ],
            [
                "subdistrict_id" => "232",
                "city_id" => "15",
                "subdistrict_name" => "Sei Kepayang Timur"
            ],
            [
                "subdistrict_id" => "233",
                "city_id" => "15",
                "subdistrict_name" => "Setia Janji"
            ],
            [
                "subdistrict_id" => "234",
                "city_id" => "15",
                "subdistrict_name" => "Silau Laut"
            ],
            [
                "subdistrict_id" => "235",
                "city_id" => "15",
                "subdistrict_name" => "Simpang Empat"
            ],
            [
                "subdistrict_id" => "236",
                "city_id" => "15",
                "subdistrict_name" => "Tanjung Balai"
            ],
            [
                "subdistrict_id" => "237",
                "city_id" => "15",
                "subdistrict_name" => "Teluk Dalam"
            ],
            [
                "subdistrict_id" => "238",
                "city_id" => "15",
                "subdistrict_name" => "Tinggi Raja"
            ],
            [
                "subdistrict_id" => "711",
                "city_id" => "52",
                "subdistrict_name" => "Air Putih"
            ],
            [
                "subdistrict_id" => "712",
                "city_id" => "52",
                "subdistrict_name" => "Limapuluh"
            ],
            [
                "subdistrict_id" => "713",
                "city_id" => "52",
                "subdistrict_name" => "Medang Deras"
            ],
            [
                "subdistrict_id" => "714",
                "city_id" => "52",
                "subdistrict_name" => "Sei Balai"
            ],
            [
                "subdistrict_id" => "715",
                "city_id" => "52",
                "subdistrict_name" => "Sei Suka"
            ],
            [
                "subdistrict_id" => "716",
                "city_id" => "52",
                "subdistrict_name" => "Talawi"
            ],
            [
                "subdistrict_id" => "717",
                "city_id" => "52",
                "subdistrict_name" => "Tanjung Tiram"
            ],
            [
                "subdistrict_id" => "934",
                "city_id" => "70",
                "subdistrict_name" => "Binjai Barat"
            ],
            [
                "subdistrict_id" => "935",
                "city_id" => "70",
                "subdistrict_name" => "Binjai Kota"
            ],
            [
                "subdistrict_id" => "936",
                "city_id" => "70",
                "subdistrict_name" => "Binjai Selatan"
            ],
            [
                "subdistrict_id" => "937",
                "city_id" => "70",
                "subdistrict_name" => "Binjai Timur"
            ],
            [
                "subdistrict_id" => "938",
                "city_id" => "70",
                "subdistrict_name" => "Binjai Utara"
            ],
            [
                "subdistrict_id" => "1517",
                "city_id" => "110",
                "subdistrict_name" => "Berampu (Brampu)"
            ],
            [
                "subdistrict_id" => "1518",
                "city_id" => "110",
                "subdistrict_name" => "Gunung Sitember"
            ],
            [
                "subdistrict_id" => "1519",
                "city_id" => "110",
                "subdistrict_name" => "Lae Parira"
            ],
            [
                "subdistrict_id" => "1520",
                "city_id" => "110",
                "subdistrict_name" => "Parbuluan"
            ],
            [
                "subdistrict_id" => "1521",
                "city_id" => "110",
                "subdistrict_name" => "Pegagan Hilir"
            ],
            [
                "subdistrict_id" => "1522",
                "city_id" => "110",
                "subdistrict_name" => "Sidikalang"
            ],
            [
                "subdistrict_id" => "1523",
                "city_id" => "110",
                "subdistrict_name" => "Siempat Nempu"
            ],
            [
                "subdistrict_id" => "1524",
                "city_id" => "110",
                "subdistrict_name" => "Siempat Nempu Hilir"
            ],
            [
                "subdistrict_id" => "1525",
                "city_id" => "110",
                "subdistrict_name" => "Siempat Nempu Hulu"
            ],
            [
                "subdistrict_id" => "1526",
                "city_id" => "110",
                "subdistrict_name" => "Silahi Sabungan"
            ],
            [
                "subdistrict_id" => "1527",
                "city_id" => "110",
                "subdistrict_name" => "Silima Pungga-Pungga"
            ],
            [
                "subdistrict_id" => "1528",
                "city_id" => "110",
                "subdistrict_name" => "Sitinjo"
            ],
            [
                "subdistrict_id" => "1529",
                "city_id" => "110",
                "subdistrict_name" => "Sumbul"
            ],
            [
                "subdistrict_id" => "1530",
                "city_id" => "110",
                "subdistrict_name" => "Tanah Pinem"
            ],
            [
                "subdistrict_id" => "1531",
                "city_id" => "110",
                "subdistrict_name" => "Tiga Lingga"
            ],
            [
                "subdistrict_id" => "1537",
                "city_id" => "112",
                "subdistrict_name" => "Bangun Purba"
            ],
            [
                "subdistrict_id" => "1538",
                "city_id" => "112",
                "subdistrict_name" => "Batang Kuis"
            ],
            [
                "subdistrict_id" => "1539",
                "city_id" => "112",
                "subdistrict_name" => "Beringin"
            ],
            [
                "subdistrict_id" => "1540",
                "city_id" => "112",
                "subdistrict_name" => "Biru-Biru"
            ],
            [
                "subdistrict_id" => "1541",
                "city_id" => "112",
                "subdistrict_name" => "Deli Tua"
            ],
            [
                "subdistrict_id" => "1542",
                "city_id" => "112",
                "subdistrict_name" => "Galang"
            ],
            [
                "subdistrict_id" => "1543",
                "city_id" => "112",
                "subdistrict_name" => "Gunung Meriah"
            ],
            [
                "subdistrict_id" => "1544",
                "city_id" => "112",
                "subdistrict_name" => "Hamparan Perak"
            ],
            [
                "subdistrict_id" => "1545",
                "city_id" => "112",
                "subdistrict_name" => "Kutalimbaru"
            ],
            [
                "subdistrict_id" => "1546",
                "city_id" => "112",
                "subdistrict_name" => "Labuhan Deli"
            ],
            [
                "subdistrict_id" => "1547",
                "city_id" => "112",
                "subdistrict_name" => "Lubuk Pakam"
            ],
            [
                "subdistrict_id" => "1548",
                "city_id" => "112",
                "subdistrict_name" => "Namo Rambe"
            ],
            [
                "subdistrict_id" => "1549",
                "city_id" => "112",
                "subdistrict_name" => "Pagar Merbau"
            ],
            [
                "subdistrict_id" => "1550",
                "city_id" => "112",
                "subdistrict_name" => "Pancur Batu"
            ],
            [
                "subdistrict_id" => "1551",
                "city_id" => "112",
                "subdistrict_name" => "Pantai Labu"
            ],
            [
                "subdistrict_id" => "1552",
                "city_id" => "112",
                "subdistrict_name" => "Patumbak"
            ],
            [
                "subdistrict_id" => "1553",
                "city_id" => "112",
                "subdistrict_name" => "Percut Sei Tuan"
            ],
            [
                "subdistrict_id" => "1554",
                "city_id" => "112",
                "subdistrict_name" => "Sibolangit"
            ],
            [
                "subdistrict_id" => "1555",
                "city_id" => "112",
                "subdistrict_name" => "Sinembah Tanjung Muda Hilir"
            ],
            [
                "subdistrict_id" => "1556",
                "city_id" => "112",
                "subdistrict_name" => "Sinembah Tanjung Muda Hulu"
            ],
            [
                "subdistrict_id" => "1557",
                "city_id" => "112",
                "subdistrict_name" => "Sunggal"
            ],
            [
                "subdistrict_id" => "1558",
                "city_id" => "112",
                "subdistrict_name" => "Tanjung Morawa"
            ],
            [
                "subdistrict_id" => "2006",
                "city_id" => "146",
                "subdistrict_name" => "Bakti Raja"
            ],
            [
                "subdistrict_id" => "2007",
                "city_id" => "146",
                "subdistrict_name" => "Dolok Sanggul"
            ],
            [
                "subdistrict_id" => "2008",
                "city_id" => "146",
                "subdistrict_name" => "Lintong Nihuta"
            ],
            [
                "subdistrict_id" => "2009",
                "city_id" => "146",
                "subdistrict_name" => "Onan Ganjang"
            ],
            [
                "subdistrict_id" => "2010",
                "city_id" => "146",
                "subdistrict_name" => "Pakkat"
            ],
            [
                "subdistrict_id" => "2011",
                "city_id" => "146",
                "subdistrict_name" => "Paranginan"
            ],
            [
                "subdistrict_id" => "2012",
                "city_id" => "146",
                "subdistrict_name" => "Parlilitan"
            ],
            [
                "subdistrict_id" => "2013",
                "city_id" => "146",
                "subdistrict_name" => "Pollung"
            ],
            [
                "subdistrict_id" => "2014",
                "city_id" => "146",
                "subdistrict_name" => "Sijama Polang"
            ],
            [
                "subdistrict_id" => "2015",
                "city_id" => "146",
                "subdistrict_name" => "Tara Bintang"
            ],
            [
                "subdistrict_id" => "2420",
                "city_id" => "173",
                "subdistrict_name" => "Barus Jahe"
            ],
            [
                "subdistrict_id" => "2421",
                "city_id" => "173",
                "subdistrict_name" => "Brastagi (Berastagi)"
            ],
            [
                "subdistrict_id" => "2422",
                "city_id" => "173",
                "subdistrict_name" => "Dolat Rayat"
            ],
            [
                "subdistrict_id" => "2423",
                "city_id" => "173",
                "subdistrict_name" => "Juhar"
            ],
            [
                "subdistrict_id" => "2424",
                "city_id" => "173",
                "subdistrict_name" => "Kabanjahe"
            ],
            [
                "subdistrict_id" => "2425",
                "city_id" => "173",
                "subdistrict_name" => "Kuta Buluh"
            ],
            [
                "subdistrict_id" => "2426",
                "city_id" => "173",
                "subdistrict_name" => "Laubaleng"
            ],
            [
                "subdistrict_id" => "2427",
                "city_id" => "173",
                "subdistrict_name" => "Mardinding"
            ],
            [
                "subdistrict_id" => "2428",
                "city_id" => "173",
                "subdistrict_name" => "Merdeka"
            ],
            [
                "subdistrict_id" => "2429",
                "city_id" => "173",
                "subdistrict_name" => "Merek"
            ],
            [
                "subdistrict_id" => "2430",
                "city_id" => "173",
                "subdistrict_name" => "Munte"
            ],
            [
                "subdistrict_id" => "2431",
                "city_id" => "173",
                "subdistrict_name" => "Nama Teran"
            ],
            [
                "subdistrict_id" => "2432",
                "city_id" => "173",
                "subdistrict_name" => "Payung"
            ],
            [
                "subdistrict_id" => "2433",
                "city_id" => "173",
                "subdistrict_name" => "Simpang Empat"
            ],
            [
                "subdistrict_id" => "2434",
                "city_id" => "173",
                "subdistrict_name" => "Tiga Binanga"
            ],
            [
                "subdistrict_id" => "2435",
                "city_id" => "173",
                "subdistrict_name" => "Tiga Panah"
            ],
            [
                "subdistrict_id" => "2436",
                "city_id" => "173",
                "subdistrict_name" => "Tiganderket"
            ],
            [
                "subdistrict_id" => "3061",
                "city_id" => "217",
                "subdistrict_name" => "Bilah Barat"
            ],
            [
                "subdistrict_id" => "3062",
                "city_id" => "217",
                "subdistrict_name" => "Bilah Hilir"
            ],
            [
                "subdistrict_id" => "3063",
                "city_id" => "217",
                "subdistrict_name" => "Bilah Hulu"
            ],
            [
                "subdistrict_id" => "3064",
                "city_id" => "217",
                "subdistrict_name" => "Panai Hilir"
            ],
            [
                "subdistrict_id" => "3065",
                "city_id" => "217",
                "subdistrict_name" => "Panai Hulu"
            ],
            [
                "subdistrict_id" => "3066",
                "city_id" => "217",
                "subdistrict_name" => "Panai Tengah"
            ],
            [
                "subdistrict_id" => "3067",
                "city_id" => "217",
                "subdistrict_name" => "Pangkatan"
            ],
            [
                "subdistrict_id" => "3068",
                "city_id" => "217",
                "subdistrict_name" => "Rantau Selatan"
            ],
            [
                "subdistrict_id" => "3069",
                "city_id" => "217",
                "subdistrict_name" => "Rantau Utara"
            ],
            [
                "subdistrict_id" => "3070",
                "city_id" => "218",
                "subdistrict_name" => "Kampung Rakyat"
            ],
            [
                "subdistrict_id" => "3071",
                "city_id" => "218",
                "subdistrict_name" => "Kota Pinang"
            ],
            [
                "subdistrict_id" => "3072",
                "city_id" => "218",
                "subdistrict_name" => "Sei/Sungai Kanan"
            ],
            [
                "subdistrict_id" => "3073",
                "city_id" => "218",
                "subdistrict_name" => "Silangkitang"
            ],
            [
                "subdistrict_id" => "3074",
                "city_id" => "218",
                "subdistrict_name" => "Torgamba"
            ],
            [
                "subdistrict_id" => "3075",
                "city_id" => "219",
                "subdistrict_name" => "Aek Kuo"
            ],
            [
                "subdistrict_id" => "3076",
                "city_id" => "219",
                "subdistrict_name" => "Aek Natas"
            ],
            [
                "subdistrict_id" => "3077",
                "city_id" => "219",
                "subdistrict_name" => "Kuala Ledong (Kualuh Leidong)"
            ],
            [
                "subdistrict_id" => "3078",
                "city_id" => "219",
                "subdistrict_name" => "Kualuh Hilir"
            ],
            [
                "subdistrict_id" => "3079",
                "city_id" => "219",
                "subdistrict_name" => "Kualuh Hulu"
            ],
            [
                "subdistrict_id" => "3080",
                "city_id" => "219",
                "subdistrict_name" => "Kualuh Selatan"
            ],
            [
                "subdistrict_id" => "3081",
                "city_id" => "219",
                "subdistrict_name" => "Marbau"
            ],
            [
                "subdistrict_id" => "3082",
                "city_id" => "219",
                "subdistrict_name" => "Na IX-X"
            ],
            [
                "subdistrict_id" => "3260",
                "city_id" => "229",
                "subdistrict_name" => "Babalan"
            ],
            [
                "subdistrict_id" => "3261",
                "city_id" => "229",
                "subdistrict_name" => "Bahorok"
            ],
            [
                "subdistrict_id" => "3262",
                "city_id" => "229",
                "subdistrict_name" => "Batang Serangan"
            ],
            [
                "subdistrict_id" => "3263",
                "city_id" => "229",
                "subdistrict_name" => "Besitang"
            ],
            [
                "subdistrict_id" => "3264",
                "city_id" => "229",
                "subdistrict_name" => "Binjai"
            ],
            [
                "subdistrict_id" => "3265",
                "city_id" => "229",
                "subdistrict_name" => "Brandan Barat"
            ],
            [
                "subdistrict_id" => "3266",
                "city_id" => "229",
                "subdistrict_name" => "Gebang"
            ],
            [
                "subdistrict_id" => "3267",
                "city_id" => "229",
                "subdistrict_name" => "Hinai"
            ],
            [
                "subdistrict_id" => "3268",
                "city_id" => "229",
                "subdistrict_name" => "Kuala"
            ],
            [
                "subdistrict_id" => "3269",
                "city_id" => "229",
                "subdistrict_name" => "Kutambaru"
            ],
            [
                "subdistrict_id" => "3270",
                "city_id" => "229",
                "subdistrict_name" => "Padang Tualang"
            ],
            [
                "subdistrict_id" => "3271",
                "city_id" => "229",
                "subdistrict_name" => "Pangkalan Susu"
            ],
            [
                "subdistrict_id" => "3272",
                "city_id" => "229",
                "subdistrict_name" => "Pematang Jaya"
            ],
            [
                "subdistrict_id" => "3273",
                "city_id" => "229",
                "subdistrict_name" => "Salapian"
            ],
            [
                "subdistrict_id" => "3274",
                "city_id" => "229",
                "subdistrict_name" => "Sawit Seberang"
            ],
            [
                "subdistrict_id" => "3275",
                "city_id" => "229",
                "subdistrict_name" => "Secanggang"
            ],
            [
                "subdistrict_id" => "3276",
                "city_id" => "229",
                "subdistrict_name" => "Sei Binge (Bingai)"
            ],
            [
                "subdistrict_id" => "3277",
                "city_id" => "229",
                "subdistrict_name" => "Sei Lepan"
            ],
            [
                "subdistrict_id" => "3278",
                "city_id" => "229",
                "subdistrict_name" => "Selesai"
            ],
            [
                "subdistrict_id" => "3279",
                "city_id" => "229",
                "subdistrict_name" => "Sirapit (Serapit)"
            ],
            [
                "subdistrict_id" => "3280",
                "city_id" => "229",
                "subdistrict_name" => "Stabat"
            ],
            [
                "subdistrict_id" => "3281",
                "city_id" => "229",
                "subdistrict_name" => "Tanjungpura"
            ],
            [
                "subdistrict_id" => "3282",
                "city_id" => "229",
                "subdistrict_name" => "Wampu"
            ],
            [
                "subdistrict_id" => "3779",
                "city_id" => "268",
                "subdistrict_name" => "Batahan"
            ],
            [
                "subdistrict_id" => "3780",
                "city_id" => "268",
                "subdistrict_name" => "Batang Natal"
            ],
            [
                "subdistrict_id" => "3781",
                "city_id" => "268",
                "subdistrict_name" => "Bukit Malintang"
            ],
            [
                "subdistrict_id" => "3782",
                "city_id" => "268",
                "subdistrict_name" => "Huta Bargot"
            ],
            [
                "subdistrict_id" => "3783",
                "city_id" => "268",
                "subdistrict_name" => "Kotanopan"
            ],
            [
                "subdistrict_id" => "3784",
                "city_id" => "268",
                "subdistrict_name" => "Langga Bayu (Lingga Bayu)"
            ],
            [
                "subdistrict_id" => "3785",
                "city_id" => "268",
                "subdistrict_name" => "Lembah Sorik Merapi"
            ],
            [
                "subdistrict_id" => "3786",
                "city_id" => "268",
                "subdistrict_name" => "Muara Batang Gadis"
            ],
            [
                "subdistrict_id" => "3787",
                "city_id" => "268",
                "subdistrict_name" => "Muara Sipongi"
            ],
            [
                "subdistrict_id" => "3788",
                "city_id" => "268",
                "subdistrict_name" => "Naga Juang"
            ],
            [
                "subdistrict_id" => "3789",
                "city_id" => "268",
                "subdistrict_name" => "Natal"
            ],
            [
                "subdistrict_id" => "3790",
                "city_id" => "268",
                "subdistrict_name" => "Pakantan"
            ],
            [
                "subdistrict_id" => "3791",
                "city_id" => "268",
                "subdistrict_name" => "Panyabungan Barat"
            ],
            [
                "subdistrict_id" => "3792",
                "city_id" => "268",
                "subdistrict_name" => "Panyabungan Kota"
            ],
            [
                "subdistrict_id" => "3793",
                "city_id" => "268",
                "subdistrict_name" => "Panyabungan Selatan"
            ],
            [
                "subdistrict_id" => "3794",
                "city_id" => "268",
                "subdistrict_name" => "Panyabungan Timur"
            ],
            [
                "subdistrict_id" => "3795",
                "city_id" => "268",
                "subdistrict_name" => "Panyabungan Utara"
            ],
            [
                "subdistrict_id" => "3796",
                "city_id" => "268",
                "subdistrict_name" => "Puncak Sorik Marapi/Merapi"
            ],
            [
                "subdistrict_id" => "3797",
                "city_id" => "268",
                "subdistrict_name" => "Ranto Baek/Baik"
            ],
            [
                "subdistrict_id" => "3798",
                "city_id" => "268",
                "subdistrict_name" => "Siabu"
            ],
            [
                "subdistrict_id" => "3799",
                "city_id" => "268",
                "subdistrict_name" => "Sinunukan"
            ],
            [
                "subdistrict_id" => "3800",
                "city_id" => "268",
                "subdistrict_name" => "Tambangan"
            ],
            [
                "subdistrict_id" => "3801",
                "city_id" => "268",
                "subdistrict_name" => "Ulu Pungkut"
            ],
            [
                "subdistrict_id" => "3906",
                "city_id" => "278",
                "subdistrict_name" => "Medan Amplas"
            ],
            [
                "subdistrict_id" => "3907",
                "city_id" => "278",
                "subdistrict_name" => "Medan Area"
            ],
            [
                "subdistrict_id" => "3908",
                "city_id" => "278",
                "subdistrict_name" => "Medan Barat"
            ],
            [
                "subdistrict_id" => "3909",
                "city_id" => "278",
                "subdistrict_name" => "Medan Baru"
            ],
            [
                "subdistrict_id" => "3910",
                "city_id" => "278",
                "subdistrict_name" => "Medan Belawan Kota"
            ],
            [
                "subdistrict_id" => "3911",
                "city_id" => "278",
                "subdistrict_name" => "Medan Deli"
            ],
            [
                "subdistrict_id" => "3912",
                "city_id" => "278",
                "subdistrict_name" => "Medan Denai"
            ],
            [
                "subdistrict_id" => "3913",
                "city_id" => "278",
                "subdistrict_name" => "Medan Helvetia"
            ],
            [
                "subdistrict_id" => "3914",
                "city_id" => "278",
                "subdistrict_name" => "Medan Johor"
            ],
            [
                "subdistrict_id" => "3915",
                "city_id" => "278",
                "subdistrict_name" => "Medan Kota"
            ],
            [
                "subdistrict_id" => "3916",
                "city_id" => "278",
                "subdistrict_name" => "Medan Labuhan"
            ],
            [
                "subdistrict_id" => "3917",
                "city_id" => "278",
                "subdistrict_name" => "Medan Maimun"
            ],
            [
                "subdistrict_id" => "3918",
                "city_id" => "278",
                "subdistrict_name" => "Medan Marelan"
            ],
            [
                "subdistrict_id" => "3919",
                "city_id" => "278",
                "subdistrict_name" => "Medan Perjuangan"
            ],
            [
                "subdistrict_id" => "3920",
                "city_id" => "278",
                "subdistrict_name" => "Medan Petisah"
            ],
            [
                "subdistrict_id" => "3921",
                "city_id" => "278",
                "subdistrict_name" => "Medan Polonia"
            ],
            [
                "subdistrict_id" => "3922",
                "city_id" => "278",
                "subdistrict_name" => "Medan Selayang"
            ],
            [
                "subdistrict_id" => "3923",
                "city_id" => "278",
                "subdistrict_name" => "Medan Sunggal"
            ],
            [
                "subdistrict_id" => "3924",
                "city_id" => "278",
                "subdistrict_name" => "Medan Tembung"
            ],
            [
                "subdistrict_id" => "3925",
                "city_id" => "278",
                "subdistrict_name" => "Medan Timur"
            ],
            [
                "subdistrict_id" => "3926",
                "city_id" => "278",
                "subdistrict_name" => "Medan Tuntungan"
            ],
            [
                "subdistrict_id" => "4362",
                "city_id" => "307",
                "subdistrict_name" => "Bawolato"
            ],
            [
                "subdistrict_id" => "4363",
                "city_id" => "307",
                "subdistrict_name" => "Botomuzoi"
            ],
            [
                "subdistrict_id" => "4364",
                "city_id" => "307",
                "subdistrict_name" => "Gido"
            ],
            [
                "subdistrict_id" => "4365",
                "city_id" => "307",
                "subdistrict_name" => "Hili Serangkai (Hilisaranggu)"
            ],
            [
                "subdistrict_id" => "4366",
                "city_id" => "307",
                "subdistrict_name" => "Hiliduho"
            ],
            [
                "subdistrict_id" => "4367",
                "city_id" => "307",
                "subdistrict_name" => "Idano Gawo"
            ],
            [
                "subdistrict_id" => "4368",
                "city_id" => "307",
                "subdistrict_name" => "Ma'u"
            ],
            [
                "subdistrict_id" => "4369",
                "city_id" => "307",
                "subdistrict_name" => "Sogae Adu (Sogaeadu)"
            ],
            [
                "subdistrict_id" => "4370",
                "city_id" => "307",
                "subdistrict_name" => "Somolo-Molo (Samolo)"
            ],
            [
                "subdistrict_id" => "4371",
                "city_id" => "307",
                "subdistrict_name" => "Ulugawo"
            ],
            [
                "subdistrict_id" => "4372",
                "city_id" => "308",
                "subdistrict_name" => "Lahomi (Gahori)"
            ],
            [
                "subdistrict_id" => "4373",
                "city_id" => "308",
                "subdistrict_name" => "Lolofitu Moi"
            ],
            [
                "subdistrict_id" => "4374",
                "city_id" => "308",
                "subdistrict_name" => "Mandrehe"
            ],
            [
                "subdistrict_id" => "4375",
                "city_id" => "308",
                "subdistrict_name" => "Mandrehe Barat"
            ],
            [
                "subdistrict_id" => "4376",
                "city_id" => "308",
                "subdistrict_name" => "Mandrehe Utara"
            ],
            [
                "subdistrict_id" => "4377",
                "city_id" => "308",
                "subdistrict_name" => "Moro'o"
            ],
            [
                "subdistrict_id" => "4378",
                "city_id" => "308",
                "subdistrict_name" => "Sirombu"
            ],
            [
                "subdistrict_id" => "4379",
                "city_id" => "308",
                "subdistrict_name" => "Ulu Moro'o (Ulu Narwo)"
            ],
            [
                "subdistrict_id" => "4380",
                "city_id" => "309",
                "subdistrict_name" => "Amandraya"
            ],
            [
                "subdistrict_id" => "4381",
                "city_id" => "309",
                "subdistrict_name" => "Aramo"
            ],
            [
                "subdistrict_id" => "4382",
                "city_id" => "309",
                "subdistrict_name" => "Boronadu"
            ],
            [
                "subdistrict_id" => "4383",
                "city_id" => "309",
                "subdistrict_name" => "Fanayama"
            ],
            [
                "subdistrict_id" => "4384",
                "city_id" => "309",
                "subdistrict_name" => "Gomo"
            ],
            [
                "subdistrict_id" => "4385",
                "city_id" => "309",
                "subdistrict_name" => "Hibala"
            ],
            [
                "subdistrict_id" => "4386",
                "city_id" => "309",
                "subdistrict_name" => "Hilimegai"
            ],
            [
                "subdistrict_id" => "4387",
                "city_id" => "309",
                "subdistrict_name" => "Hilisalawa'ahe (Hilisalawaahe)"
            ],
            [
                "subdistrict_id" => "4388",
                "city_id" => "309",
                "subdistrict_name" => "Huruna"
            ],
            [
                "subdistrict_id" => "4389",
                "city_id" => "309",
                "subdistrict_name" => "Lahusa"
            ],
            [
                "subdistrict_id" => "4390",
                "city_id" => "309",
                "subdistrict_name" => "Lolomatua"
            ],
            [
                "subdistrict_id" => "4391",
                "city_id" => "309",
                "subdistrict_name" => "Lolowau"
            ],
            [
                "subdistrict_id" => "4392",
                "city_id" => "309",
                "subdistrict_name" => "Maniamolo"
            ],
            [
                "subdistrict_id" => "4393",
                "city_id" => "309",
                "subdistrict_name" => "Mazino"
            ],
            [
                "subdistrict_id" => "4394",
                "city_id" => "309",
                "subdistrict_name" => "Mazo"
            ],
            [
                "subdistrict_id" => "4395",
                "city_id" => "309",
                "subdistrict_name" => "O'o'u (Oou)"
            ],
            [
                "subdistrict_id" => "4396",
                "city_id" => "309",
                "subdistrict_name" => "Onohazumba"
            ],
            [
                "subdistrict_id" => "4397",
                "city_id" => "309",
                "subdistrict_name" => "Pulau-Pulau Batu"
            ],
            [
                "subdistrict_id" => "4398",
                "city_id" => "309",
                "subdistrict_name" => "Pulau-Pulau Batu Barat"
            ],
            [
                "subdistrict_id" => "4399",
                "city_id" => "309",
                "subdistrict_name" => "Pulau-Pulau Batu Timur"
            ],
            [
                "subdistrict_id" => "4400",
                "city_id" => "309",
                "subdistrict_name" => "Pulau-Pulau Batu Utara"
            ],
            [
                "subdistrict_id" => "4401",
                "city_id" => "309",
                "subdistrict_name" => "Sidua'ori"
            ],
            [
                "subdistrict_id" => "4402",
                "city_id" => "309",
                "subdistrict_name" => "Simuk"
            ],
            [
                "subdistrict_id" => "4403",
                "city_id" => "309",
                "subdistrict_name" => "Somambawa"
            ],
            [
                "subdistrict_id" => "4404",
                "city_id" => "309",
                "subdistrict_name" => "Susua"
            ],
            [
                "subdistrict_id" => "4405",
                "city_id" => "309",
                "subdistrict_name" => "Tanah Masa"
            ],
            [
                "subdistrict_id" => "4406",
                "city_id" => "309",
                "subdistrict_name" => "Teluk Dalam"
            ],
            [
                "subdistrict_id" => "4407",
                "city_id" => "309",
                "subdistrict_name" => "Toma"
            ],
            [
                "subdistrict_id" => "4408",
                "city_id" => "309",
                "subdistrict_name" => "Ulunoyo"
            ],
            [
                "subdistrict_id" => "4409",
                "city_id" => "309",
                "subdistrict_name" => "Ulususua"
            ],
            [
                "subdistrict_id" => "4410",
                "city_id" => "309",
                "subdistrict_name" => "Umbunasi"
            ],
            [
                "subdistrict_id" => "4411",
                "city_id" => "310",
                "subdistrict_name" => "Afulu"
            ],
            [
                "subdistrict_id" => "4412",
                "city_id" => "310",
                "subdistrict_name" => "Alasa"
            ],
            [
                "subdistrict_id" => "4413",
                "city_id" => "310",
                "subdistrict_name" => "Alasa Talumuzoi"
            ],
            [
                "subdistrict_id" => "4414",
                "city_id" => "310",
                "subdistrict_name" => "Lahewa"
            ],
            [
                "subdistrict_id" => "4415",
                "city_id" => "310",
                "subdistrict_name" => "Lahewa Timur"
            ],
            [
                "subdistrict_id" => "4416",
                "city_id" => "310",
                "subdistrict_name" => "Lotu"
            ],
            [
                "subdistrict_id" => "4417",
                "city_id" => "310",
                "subdistrict_name" => "Namohalu Esiwa"
            ],
            [
                "subdistrict_id" => "4418",
                "city_id" => "310",
                "subdistrict_name" => "Sawo"
            ],
            [
                "subdistrict_id" => "4419",
                "city_id" => "310",
                "subdistrict_name" => "Sitolu Ori"
            ],
            [
                "subdistrict_id" => "4420",
                "city_id" => "310",
                "subdistrict_name" => "Tugala Oyo"
            ],
            [
                "subdistrict_id" => "4421",
                "city_id" => "310",
                "subdistrict_name" => "Tuhemberua"
            ],
            [
                "subdistrict_id" => "4545",
                "city_id" => "319",
                "subdistrict_name" => "Aek Nabara Barumun"
            ],
            [
                "subdistrict_id" => "4546",
                "city_id" => "319",
                "subdistrict_name" => "Barumun"
            ],
            [
                "subdistrict_id" => "4547",
                "city_id" => "319",
                "subdistrict_name" => "Barumun Selatan"
            ],
            [
                "subdistrict_id" => "4548",
                "city_id" => "319",
                "subdistrict_name" => "Barumun Tengah"
            ],
            [
                "subdistrict_id" => "4549",
                "city_id" => "319",
                "subdistrict_name" => "Batang Lubu Sutam"
            ],
            [
                "subdistrict_id" => "4550",
                "city_id" => "319",
                "subdistrict_name" => "Huristak"
            ],
            [
                "subdistrict_id" => "4551",
                "city_id" => "319",
                "subdistrict_name" => "Huta Raja Tinggi"
            ],
            [
                "subdistrict_id" => "4552",
                "city_id" => "319",
                "subdistrict_name" => "Lubuk Barumun"
            ],
            [
                "subdistrict_id" => "4553",
                "city_id" => "319",
                "subdistrict_name" => "Sihapas Barumun"
            ],
            [
                "subdistrict_id" => "4554",
                "city_id" => "319",
                "subdistrict_name" => "Sosa"
            ],
            [
                "subdistrict_id" => "4555",
                "city_id" => "319",
                "subdistrict_name" => "Sosopan"
            ],
            [
                "subdistrict_id" => "4556",
                "city_id" => "319",
                "subdistrict_name" => "Ulu Barumun"
            ],
            [
                "subdistrict_id" => "4557",
                "city_id" => "320",
                "subdistrict_name" => "Batang Onang"
            ],
            [
                "subdistrict_id" => "4558",
                "city_id" => "320",
                "subdistrict_name" => "Dolok"
            ],
            [
                "subdistrict_id" => "4559",
                "city_id" => "320",
                "subdistrict_name" => "Dolok Sigompulon"
            ],
            [
                "subdistrict_id" => "4560",
                "city_id" => "320",
                "subdistrict_name" => "Halongonan"
            ],
            [
                "subdistrict_id" => "4561",
                "city_id" => "320",
                "subdistrict_name" => "Hulu Sihapas"
            ],
            [
                "subdistrict_id" => "4562",
                "city_id" => "320",
                "subdistrict_name" => "Padang Bolak"
            ],
            [
                "subdistrict_id" => "4563",
                "city_id" => "320",
                "subdistrict_name" => "Padang Bolak Julu"
            ],
            [
                "subdistrict_id" => "4564",
                "city_id" => "320",
                "subdistrict_name" => "Portibi"
            ],
            [
                "subdistrict_id" => "4565",
                "city_id" => "320",
                "subdistrict_name" => "Simangambat"
            ],
            [
                "subdistrict_id" => "4585",
                "city_id" => "323",
                "subdistrict_name" => "Padang Sidempuan Angkola Julu"
            ],
            [
                "subdistrict_id" => "4586",
                "city_id" => "323",
                "subdistrict_name" => "Padang Sidempuan Batunadua"
            ],
            [
                "subdistrict_id" => "4587",
                "city_id" => "323",
                "subdistrict_name" => "Padang Sidempuan Hutaimbaru"
            ],
            [
                "subdistrict_id" => "4588",
                "city_id" => "323",
                "subdistrict_name" => "Padang Sidempuan Selatan"
            ],
            [
                "subdistrict_id" => "4589",
                "city_id" => "323",
                "subdistrict_name" => "Padang Sidempuan Tenggara"
            ],
            [
                "subdistrict_id" => "4590",
                "city_id" => "323",
                "subdistrict_name" => "Padang Sidempuan Utara (Padangsidimpuan)"
            ],
            [
                "subdistrict_id" => "4596",
                "city_id" => "325",
                "subdistrict_name" => "Kerajaan"
            ],
            [
                "subdistrict_id" => "4597",
                "city_id" => "325",
                "subdistrict_name" => "Pagindar"
            ],
            [
                "subdistrict_id" => "4598",
                "city_id" => "325",
                "subdistrict_name" => "Pergetteng Getteng Sengkut"
            ],
            [
                "subdistrict_id" => "4599",
                "city_id" => "325",
                "subdistrict_name" => "Salak"
            ],
            [
                "subdistrict_id" => "4600",
                "city_id" => "325",
                "subdistrict_name" => "Siempat Rube"
            ],
            [
                "subdistrict_id" => "4601",
                "city_id" => "325",
                "subdistrict_name" => "Sitellu Tali Urang Jehe"
            ],
            [
                "subdistrict_id" => "4602",
                "city_id" => "325",
                "subdistrict_name" => "Sitellu Tali Urang Julu"
            ],
            [
                "subdistrict_id" => "4603",
                "city_id" => "325",
                "subdistrict_name" => "Tinada"
            ],
            [
                "subdistrict_id" => "4952",
                "city_id" => "353",
                "subdistrict_name" => "Siantar Barat"
            ],
            [
                "subdistrict_id" => "4953",
                "city_id" => "353",
                "subdistrict_name" => "Siantar Marihat"
            ],
            [
                "subdistrict_id" => "4954",
                "city_id" => "353",
                "subdistrict_name" => "Siantar Marimbun"
            ],
            [
                "subdistrict_id" => "4955",
                "city_id" => "353",
                "subdistrict_name" => "Siantar Martoba"
            ],
            [
                "subdistrict_id" => "4956",
                "city_id" => "353",
                "subdistrict_name" => "Siantar Selatan"
            ],
            [
                "subdistrict_id" => "4957",
                "city_id" => "353",
                "subdistrict_name" => "Siantar Sitalasari"
            ],
            [
                "subdistrict_id" => "4958",
                "city_id" => "353",
                "subdistrict_name" => "Siantar Timur"
            ],
            [
                "subdistrict_id" => "4959",
                "city_id" => "353",
                "subdistrict_name" => "Siantar Utara"
            ],
            [
                "subdistrict_id" => "5385",
                "city_id" => "389",
                "subdistrict_name" => "Harian"
            ],
            [
                "subdistrict_id" => "5386",
                "city_id" => "389",
                "subdistrict_name" => "Nainggolan"
            ],
            [
                "subdistrict_id" => "5387",
                "city_id" => "389",
                "subdistrict_name" => "Onan Runggu"
            ],
            [
                "subdistrict_id" => "5388",
                "city_id" => "389",
                "subdistrict_name" => "Palipi"
            ],
            [
                "subdistrict_id" => "5389",
                "city_id" => "389",
                "subdistrict_name" => "Pangururan"
            ],
            [
                "subdistrict_id" => "5390",
                "city_id" => "389",
                "subdistrict_name" => "Ronggur Nihuta"
            ],
            [
                "subdistrict_id" => "5391",
                "city_id" => "389",
                "subdistrict_name" => "Sianjur Mula-Mula"
            ],
            [
                "subdistrict_id" => "5392",
                "city_id" => "389",
                "subdistrict_name" => "Simanindo"
            ],
            [
                "subdistrict_id" => "5393",
                "city_id" => "389",
                "subdistrict_name" => "Sitio-Tio"
            ],
            [
                "subdistrict_id" => "5575",
                "city_id" => "404",
                "subdistrict_name" => "Bandar Khalifah"
            ],
            [
                "subdistrict_id" => "5576",
                "city_id" => "404",
                "subdistrict_name" => "Bintang Bayu"
            ],
            [
                "subdistrict_id" => "5577",
                "city_id" => "404",
                "subdistrict_name" => "Dolok Masihul"
            ],
            [
                "subdistrict_id" => "5578",
                "city_id" => "404",
                "subdistrict_name" => "Dolok Merawan"
            ],
            [
                "subdistrict_id" => "5579",
                "city_id" => "404",
                "subdistrict_name" => "Kotarih"
            ],
            [
                "subdistrict_id" => "5580",
                "city_id" => "404",
                "subdistrict_name" => "Pantai Cermin"
            ],
            [
                "subdistrict_id" => "5581",
                "city_id" => "404",
                "subdistrict_name" => "Pegajahan"
            ],
            [
                "subdistrict_id" => "5582",
                "city_id" => "404",
                "subdistrict_name" => "Perbaungan"
            ],
            [
                "subdistrict_id" => "5583",
                "city_id" => "404",
                "subdistrict_name" => "Sei Bamban"
            ],
            [
                "subdistrict_id" => "5584",
                "city_id" => "404",
                "subdistrict_name" => "Sei Rampah"
            ],
            [
                "subdistrict_id" => "5585",
                "city_id" => "404",
                "subdistrict_name" => "Serba Jadi"
            ],
            [
                "subdistrict_id" => "5586",
                "city_id" => "404",
                "subdistrict_name" => "Silinda"
            ],
            [
                "subdistrict_id" => "5587",
                "city_id" => "404",
                "subdistrict_name" => "Sipispis"
            ],
            [
                "subdistrict_id" => "5588",
                "city_id" => "404",
                "subdistrict_name" => "Tanjung Beringin"
            ],
            [
                "subdistrict_id" => "5589",
                "city_id" => "404",
                "subdistrict_name" => "Tebing Syahbandar"
            ],
            [
                "subdistrict_id" => "5590",
                "city_id" => "404",
                "subdistrict_name" => "Tebing Tinggi"
            ],
            [
                "subdistrict_id" => "5591",
                "city_id" => "404",
                "subdistrict_name" => "Teluk Mengkudu"
            ],
            [
                "subdistrict_id" => "5616",
                "city_id" => "407",
                "subdistrict_name" => "Sibolga Kota"
            ],
            [
                "subdistrict_id" => "5617",
                "city_id" => "407",
                "subdistrict_name" => "Sibolga Sambas"
            ],
            [
                "subdistrict_id" => "5618",
                "city_id" => "407",
                "subdistrict_name" => "Sibolga Selatan"
            ],
            [
                "subdistrict_id" => "5619",
                "city_id" => "407",
                "subdistrict_name" => "Sibolga Utara"
            ],
            [
                "subdistrict_id" => "5693",
                "city_id" => "413",
                "subdistrict_name" => "Bandar"
            ],
            [
                "subdistrict_id" => "5694",
                "city_id" => "413",
                "subdistrict_name" => "Bandar Huluan"
            ],
            [
                "subdistrict_id" => "5695",
                "city_id" => "413",
                "subdistrict_name" => "Bandar Masilam"
            ],
            [
                "subdistrict_id" => "5696",
                "city_id" => "413",
                "subdistrict_name" => "Bosar Maligas"
            ],
            [
                "subdistrict_id" => "5697",
                "city_id" => "413",
                "subdistrict_name" => "Dolok Batu Nanggar"
            ],
            [
                "subdistrict_id" => "5698",
                "city_id" => "413",
                "subdistrict_name" => "Dolok Panribuan"
            ],
            [
                "subdistrict_id" => "5699",
                "city_id" => "413",
                "subdistrict_name" => "Dolok Pardamean"
            ],
            [
                "subdistrict_id" => "5700",
                "city_id" => "413",
                "subdistrict_name" => "Dolok Silau"
            ],
            [
                "subdistrict_id" => "5701",
                "city_id" => "413",
                "subdistrict_name" => "Girsang Sipangan Bolon"
            ],
            [
                "subdistrict_id" => "5702",
                "city_id" => "413",
                "subdistrict_name" => "Gunung Malela"
            ],
            [
                "subdistrict_id" => "5703",
                "city_id" => "413",
                "subdistrict_name" => "Gunung Maligas"
            ],
            [
                "subdistrict_id" => "5704",
                "city_id" => "413",
                "subdistrict_name" => "Haranggaol Horison"
            ],
            [
                "subdistrict_id" => "5705",
                "city_id" => "413",
                "subdistrict_name" => "Hatonduhan"
            ],
            [
                "subdistrict_id" => "5706",
                "city_id" => "413",
                "subdistrict_name" => "Huta Bayu Raja"
            ],
            [
                "subdistrict_id" => "5707",
                "city_id" => "413",
                "subdistrict_name" => "Jawa Maraja Bah Jambi"
            ],
            [
                "subdistrict_id" => "5708",
                "city_id" => "413",
                "subdistrict_name" => "Jorlang Hataran"
            ],
            [
                "subdistrict_id" => "5709",
                "city_id" => "413",
                "subdistrict_name" => "Panei"
            ],
            [
                "subdistrict_id" => "5710",
                "city_id" => "413",
                "subdistrict_name" => "Panombeian Panei"
            ],
            [
                "subdistrict_id" => "5711",
                "city_id" => "413",
                "subdistrict_name" => "Pematang Bandar"
            ],
            [
                "subdistrict_id" => "5712",
                "city_id" => "413",
                "subdistrict_name" => "Pematang Sidamanik"
            ],
            [
                "subdistrict_id" => "5713",
                "city_id" => "413",
                "subdistrict_name" => "Pematang Silima Huta"
            ],
            [
                "subdistrict_id" => "5714",
                "city_id" => "413",
                "subdistrict_name" => "Purba"
            ],
            [
                "subdistrict_id" => "5715",
                "city_id" => "413",
                "subdistrict_name" => "Raya"
            ],
            [
                "subdistrict_id" => "5716",
                "city_id" => "413",
                "subdistrict_name" => "Raya Kahean"
            ],
            [
                "subdistrict_id" => "5717",
                "city_id" => "413",
                "subdistrict_name" => "Siantar"
            ],
            [
                "subdistrict_id" => "5718",
                "city_id" => "413",
                "subdistrict_name" => "Sidamanik"
            ],
            [
                "subdistrict_id" => "5719",
                "city_id" => "413",
                "subdistrict_name" => "Silimakuta"
            ],
            [
                "subdistrict_id" => "5720",
                "city_id" => "413",
                "subdistrict_name" => "Silou Kahean"
            ],
            [
                "subdistrict_id" => "5721",
                "city_id" => "413",
                "subdistrict_name" => "Tanah Jawa"
            ],
            [
                "subdistrict_id" => "5722",
                "city_id" => "413",
                "subdistrict_name" => "Tapian Dolok"
            ],
            [
                "subdistrict_id" => "5723",
                "city_id" => "413",
                "subdistrict_name" => "Ujung Padang"
            ],
            [
                "subdistrict_id" => "6337",
                "city_id" => "459",
                "subdistrict_name" => "Datuk Bandar"
            ],
            [
                "subdistrict_id" => "6338",
                "city_id" => "459",
                "subdistrict_name" => "Datuk Bandar Timur"
            ],
            [
                "subdistrict_id" => "6339",
                "city_id" => "459",
                "subdistrict_name" => "Sei Tualang Raso"
            ],
            [
                "subdistrict_id" => "6340",
                "city_id" => "459",
                "subdistrict_name" => "Tanjung Balai Selatan"
            ],
            [
                "subdistrict_id" => "6341",
                "city_id" => "459",
                "subdistrict_name" => "Tanjung Balai Utara"
            ],
            [
                "subdistrict_id" => "6342",
                "city_id" => "459",
                "subdistrict_name" => "Teluk Nibung"
            ],
            [
                "subdistrict_id" => "6371",
                "city_id" => "463",
                "subdistrict_name" => "Aek Bilah"
            ],
            [
                "subdistrict_id" => "6372",
                "city_id" => "463",
                "subdistrict_name" => "Angkola Barat (Padang Sidempuan)"
            ],
            [
                "subdistrict_id" => "6373",
                "city_id" => "463",
                "subdistrict_name" => "Angkola Sangkunur"
            ],
            [
                "subdistrict_id" => "6374",
                "city_id" => "463",
                "subdistrict_name" => "Angkola Selatan (Siais)"
            ],
            [
                "subdistrict_id" => "6375",
                "city_id" => "463",
                "subdistrict_name" => "Angkola Timur (Padang Sidempuan)"
            ],
            [
                "subdistrict_id" => "6376",
                "city_id" => "463",
                "subdistrict_name" => "Arse"
            ],
            [
                "subdistrict_id" => "6377",
                "city_id" => "463",
                "subdistrict_name" => "Batang Angkola"
            ],
            [
                "subdistrict_id" => "6378",
                "city_id" => "463",
                "subdistrict_name" => "Batang Toru"
            ],
            [
                "subdistrict_id" => "6379",
                "city_id" => "463",
                "subdistrict_name" => "Marancar"
            ],
            [
                "subdistrict_id" => "6380",
                "city_id" => "463",
                "subdistrict_name" => "Muara Batang Toru"
            ],
            [
                "subdistrict_id" => "6381",
                "city_id" => "463",
                "subdistrict_name" => "Saipar Dolok Hole"
            ],
            [
                "subdistrict_id" => "6382",
                "city_id" => "463",
                "subdistrict_name" => "Sayur Matinggi"
            ],
            [
                "subdistrict_id" => "6383",
                "city_id" => "463",
                "subdistrict_name" => "Sipirok"
            ],
            [
                "subdistrict_id" => "6384",
                "city_id" => "463",
                "subdistrict_name" => "Tano Tombangan Angkola"
            ],
            [
                "subdistrict_id" => "6385",
                "city_id" => "464",
                "subdistrict_name" => "Andam Dewi"
            ],
            [
                "subdistrict_id" => "6386",
                "city_id" => "464",
                "subdistrict_name" => "Badiri"
            ],
            [
                "subdistrict_id" => "6387",
                "city_id" => "464",
                "subdistrict_name" => "Barus"
            ],
            [
                "subdistrict_id" => "6388",
                "city_id" => "464",
                "subdistrict_name" => "Barus Utara"
            ],
            [
                "subdistrict_id" => "6389",
                "city_id" => "464",
                "subdistrict_name" => "Kolang"
            ],
            [
                "subdistrict_id" => "6390",
                "city_id" => "464",
                "subdistrict_name" => "Lumut"
            ],
            [
                "subdistrict_id" => "6391",
                "city_id" => "464",
                "subdistrict_name" => "Manduamas"
            ],
            [
                "subdistrict_id" => "6392",
                "city_id" => "464",
                "subdistrict_name" => "Pandan"
            ],
            [
                "subdistrict_id" => "6393",
                "city_id" => "464",
                "subdistrict_name" => "Pasaribu Tobing"
            ],
            [
                "subdistrict_id" => "6394",
                "city_id" => "464",
                "subdistrict_name" => "Pinangsori"
            ],
            [
                "subdistrict_id" => "6395",
                "city_id" => "464",
                "subdistrict_name" => "Sarudik"
            ],
            [
                "subdistrict_id" => "6396",
                "city_id" => "464",
                "subdistrict_name" => "Sibabangun"
            ],
            [
                "subdistrict_id" => "6397",
                "city_id" => "464",
                "subdistrict_name" => "Sirandorung"
            ],
            [
                "subdistrict_id" => "6398",
                "city_id" => "464",
                "subdistrict_name" => "Sitahuis"
            ],
            [
                "subdistrict_id" => "6399",
                "city_id" => "464",
                "subdistrict_name" => "Sorkam"
            ],
            [
                "subdistrict_id" => "6400",
                "city_id" => "464",
                "subdistrict_name" => "Sorkam Barat"
            ],
            [
                "subdistrict_id" => "6401",
                "city_id" => "464",
                "subdistrict_name" => "Sosor Gadong"
            ],
            [
                "subdistrict_id" => "6402",
                "city_id" => "464",
                "subdistrict_name" => "Suka Bangun"
            ],
            [
                "subdistrict_id" => "6403",
                "city_id" => "464",
                "subdistrict_name" => "Tapian Nauli"
            ],
            [
                "subdistrict_id" => "6404",
                "city_id" => "464",
                "subdistrict_name" => "Tukka"
            ],
            [
                "subdistrict_id" => "6405",
                "city_id" => "465",
                "subdistrict_name" => "Adian Koting"
            ],
            [
                "subdistrict_id" => "6406",
                "city_id" => "465",
                "subdistrict_name" => "Garoga"
            ],
            [
                "subdistrict_id" => "6407",
                "city_id" => "465",
                "subdistrict_name" => "Muara"
            ],
            [
                "subdistrict_id" => "6408",
                "city_id" => "465",
                "subdistrict_name" => "Pagaran"
            ],
            [
                "subdistrict_id" => "6409",
                "city_id" => "465",
                "subdistrict_name" => "Pahae Jae"
            ],
            [
                "subdistrict_id" => "6410",
                "city_id" => "465",
                "subdistrict_name" => "Pahae Julu"
            ],
            [
                "subdistrict_id" => "6411",
                "city_id" => "465",
                "subdistrict_name" => "Pangaribuan"
            ],
            [
                "subdistrict_id" => "6412",
                "city_id" => "465",
                "subdistrict_name" => "Parmonangan"
            ],
            [
                "subdistrict_id" => "6413",
                "city_id" => "465",
                "subdistrict_name" => "Purbatua"
            ],
            [
                "subdistrict_id" => "6414",
                "city_id" => "465",
                "subdistrict_name" => "Siatas Barita"
            ],
            [
                "subdistrict_id" => "6415",
                "city_id" => "465",
                "subdistrict_name" => "Siborong-Borong"
            ],
            [
                "subdistrict_id" => "6416",
                "city_id" => "465",
                "subdistrict_name" => "Simangumban"
            ],
            [
                "subdistrict_id" => "6417",
                "city_id" => "465",
                "subdistrict_name" => "Sipahutar"
            ],
            [
                "subdistrict_id" => "6418",
                "city_id" => "465",
                "subdistrict_name" => "Sipoholon"
            ],
            [
                "subdistrict_id" => "6419",
                "city_id" => "465",
                "subdistrict_name" => "Tarutung"
            ],
            [
                "subdistrict_id" => "6652",
                "city_id" => "481",
                "subdistrict_name" => "Ajibata"
            ],
            [
                "subdistrict_id" => "6653",
                "city_id" => "481",
                "subdistrict_name" => "Balige"
            ],
            [
                "subdistrict_id" => "6654",
                "city_id" => "481",
                "subdistrict_name" => "Bonatua Lunasi"
            ],
            [
                "subdistrict_id" => "6655",
                "city_id" => "481",
                "subdistrict_name" => "Bor-Bor"
            ],
            [
                "subdistrict_id" => "6656",
                "city_id" => "481",
                "subdistrict_name" => "Habinsaran"
            ],
            [
                "subdistrict_id" => "6657",
                "city_id" => "481",
                "subdistrict_name" => "Laguboti"
            ],
            [
                "subdistrict_id" => "6658",
                "city_id" => "481",
                "subdistrict_name" => "Lumban Julu"
            ],
            [
                "subdistrict_id" => "6659",
                "city_id" => "481",
                "subdistrict_name" => "Nassau"
            ],
            [
                "subdistrict_id" => "6660",
                "city_id" => "481",
                "subdistrict_name" => "Parmaksian"
            ],
            [
                "subdistrict_id" => "6661",
                "city_id" => "481",
                "subdistrict_name" => "Pintu Pohan Meranti"
            ],
            [
                "subdistrict_id" => "6662",
                "city_id" => "481",
                "subdistrict_name" => "Porsea"
            ],
            [
                "subdistrict_id" => "6663",
                "city_id" => "481",
                "subdistrict_name" => "Siantar Narumonda"
            ],
            [
                "subdistrict_id" => "6664",
                "city_id" => "481",
                "subdistrict_name" => "Sigumpar"
            ],
            [
                "subdistrict_id" => "6665",
                "city_id" => "481",
                "subdistrict_name" => "Silaen"
            ],
            [
                "subdistrict_id" => "6666",
                "city_id" => "481",
                "subdistrict_name" => "Tampahan"
            ],
            [
                "subdistrict_id" => "6667",
                "city_id" => "481",
                "subdistrict_name" => "Uluan"
            ]
        );
        foreach ($province as $province) {
            Province::create([
                'id' => $province['province_id'],
                'name' => $province['province_name']
            ]);
        }
        foreach ($city as $city) {
            City::create([
                'id' => $city['city_id'],
                'province_id' => $city['province_id'],
                'name' => $city['city_name'],
                'code' => $city['postal_code']
            ]);
        }
        foreach ($subdistrict as $subdistrict) {
            Subdistrict::create([
                'id' => $subdistrict['subdistrict_id'],
                'city_id' => $subdistrict['city_id'],
                'name' => $subdistrict['subdistrict_name']
            ]);
        }
    }
}
