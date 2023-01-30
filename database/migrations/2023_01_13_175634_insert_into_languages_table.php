<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('languages')->insert([
            ['id' => 'aa', 'name' => 'Afar'],
            ['id' => 'ab', 'name' => 'Abkhazian'],
            ['id' => 'ae', 'name' => 'Avestan'],
            ['id' => 'af', 'name' => 'Afrikaans'],
            ['id' => 'ak', 'name' => 'Akan'],
            ['id' => 'am', 'name' => 'Amharic'],
            ['id' => 'an', 'name' => 'Aragonese'],
            ['id' => 'ar', 'name' => 'Arabic'],
            ['id' => 'as', 'name' => 'Assamese'],
            ['id' => 'av', 'name' => 'Avaric'],
            ['id' => 'ay', 'name' => 'Aymara'],
            ['id' => 'az', 'name' => 'Azerbaijani'],
            ['id' => 'ba', 'name' => 'Bashkir'],
            ['id' => 'be', 'name' => 'Belarusian'],
            ['id' => 'bg', 'name' => 'Bulgarian'],
            ['id' => 'bi', 'name' => 'Bislama'],
            ['id' => 'bm', 'name' => 'Bambara'],
            ['id' => 'bn', 'name' => 'Bengali'],
            ['id' => 'bo', 'name' => 'Tibetan'],
            ['id' => 'br', 'name' => 'Breton'],
            ['id' => 'bs', 'name' => 'Bosnian'],
            ['id' => 'ca', 'name' => 'Catalan'],
            ['id' => 'ce', 'name' => 'Chechen'],
            ['id' => 'ch', 'name' => 'Chamorro'],
            ['id' => 'co', 'name' => 'Corsican'],
            ['id' => 'cr', 'name' => 'Cree'],
            ['id' => 'cs', 'name' => 'Czech'],
            ['id' => 'cu', 'name' => 'Old Slavonic'],
            ['id' => 'cv', 'name' => 'Chuvash'],
            ['id' => 'cy', 'name' => 'Welsh'],
            ['id' => 'da', 'name' => 'Danish'],
            ['id' => 'de', 'name' => 'German'],
            ['id' => 'dv', 'name' => 'Maldivian'],
            ['id' => 'dz', 'name' => 'Dzongkha'],
            ['id' => 'ee', 'name' => 'Ewe'],
            ['id' => 'el', 'name' => 'Greek'],
            ['id' => 'en', 'name' => 'English'],
            ['id' => 'eo', 'name' => 'Esperanto'],
            ['id' => 'es', 'name' => 'Spanish'],
            ['id' => 'et', 'name' => 'Estonian'],
            ['id' => 'eu', 'name' => 'Basque'],
            ['id' => 'fa', 'name' => 'Persian'],
            ['id' => 'ff', 'name' => 'Fulah'],
            ['id' => 'fi', 'name' => 'Finnish'],
            ['id' => 'fj', 'name' => 'Fijian'],
            ['id' => 'fo', 'name' => 'Faroese'],
            ['id' => 'fr', 'name' => 'French'],
            ['id' => 'fy', 'name' => 'Western Frisian'],
            ['id' => 'ga', 'name' => 'Irish'],
            ['id' => 'gd', 'name' => 'Gaelic'],
            ['id' => 'gl', 'name' => 'Galician'],
            ['id' => 'gn', 'name' => 'Guarani'],
            ['id' => 'gu', 'name' => 'Gujarati'],
            ['id' => 'gv', 'name' => 'Manx'],
            ['id' => 'ha', 'name' => 'Hausa'],
            ['id' => 'he', 'name' => 'Hebrew'],
            ['id' => 'hi', 'name' => 'Hindi'],
            ['id' => 'ho', 'name' => 'Hiri Motu'],
            ['id' => 'hr', 'name' => 'Croatian'],
            ['id' => 'ht', 'name' => 'Haitian'],
            ['id' => 'hu', 'name' => 'Hungarian'],
            ['id' => 'hy', 'name' => 'Armenian'],
            ['id' => 'hz', 'name' => 'Herero'],
            ['id' => 'ia', 'name' => 'Interlingua'],
            ['id' => 'id', 'name' => 'Indonesian'],
            ['id' => 'ie', 'name' => 'Interlingue'],
            ['id' => 'ig', 'name' => 'Igbo'],
            ['id' => 'ii', 'name' => 'Nuosu'],
            ['id' => 'ik', 'name' => 'Inupiaq'],
            ['id' => 'io', 'name' => 'Ido'],
            ['id' => 'is', 'name' => 'Icelandic'],
            ['id' => 'it', 'name' => 'Italian'],
            ['id' => 'iu', 'name' => 'Inuktitut'],
            ['id' => 'ja', 'name' => 'Japanese'],
            ['id' => 'jv', 'name' => 'Javanese'],
            ['id' => 'ka', 'name' => 'Georgian'],
            ['id' => 'kg', 'name' => 'Kongo'],
            ['id' => 'ki', 'name' => 'Kikuyu'],
            ['id' => 'kj', 'name' => 'Kuanyama'],
            ['id' => 'kk', 'name' => 'Kazakh'],
            ['id' => 'kl', 'name' => 'Greenlandic'],
            ['id' => 'km', 'name' => 'Central Khmer'],
            ['id' => 'kn', 'name' => 'Kannada'],
            ['id' => 'ko', 'name' => 'Korean'],
            ['id' => 'kr', 'name' => 'Kanuri'],
            ['id' => 'ks', 'name' => 'Kashmiri'],
            ['id' => 'ku', 'name' => 'Kurdish'],
            ['id' => 'kv', 'name' => 'Komi'],
            ['id' => 'kw', 'name' => 'Cornish'],
            ['id' => 'ky', 'name' => 'Kyrgyz'],
            ['id' => 'la', 'name' => 'Latin'],
            ['id' => 'lb', 'name' => 'Luxembourgish'],
            ['id' => 'lg', 'name' => 'Ganda'],
            ['id' => 'li', 'name' => 'Limburgish'],
            ['id' => 'ln', 'name' => 'Lingala'],
            ['id' => 'lo', 'name' => 'Lao'],
            ['id' => 'lt', 'name' => 'Lithuanian'],
            ['id' => 'lu', 'name' => 'Luba-Katanga'],
            ['id' => 'lv', 'name' => 'Latvian'],
            ['id' => 'mg', 'name' => 'Malagasy'],
            ['id' => 'mh', 'name' => 'Marshallese'],
            ['id' => 'mi', 'name' => 'Maori'],
            ['id' => 'mk', 'name' => 'Macedonian'],
            ['id' => 'ml', 'name' => 'Malayalam'],
            ['id' => 'mn', 'name' => 'Mongolian'],
            ['id' => 'mr', 'name' => 'Marathi'],
            ['id' => 'ms', 'name' => 'Malay'],
            ['id' => 'mt', 'name' => 'Maltese'],
            ['id' => 'my', 'name' => 'Burmese'],
            ['id' => 'na', 'name' => 'Nauru'],
            ['id' => 'nb', 'name' => 'Norwegian Bokmål'],
            ['id' => 'nd', 'name' => 'North Ndebele'],
            ['id' => 'ne', 'name' => 'Nepali'],
            ['id' => 'ng', 'name' => 'Ndonga'],
            ['id' => 'nl', 'name' => 'Dutch'],
            ['id' => 'nn', 'name' => 'Norwegian Nynorsk'],
            ['id' => 'no', 'name' => 'Norwegian'],
            ['id' => 'nr', 'name' => 'South Ndebele'],
            ['id' => 'nv', 'name' => 'Navajo, Navaho'],
            ['id' => 'ny', 'name' => 'Chichewa'],
            ['id' => 'oc', 'name' => 'Occitan'],
            ['id' => 'oj', 'name' => 'Ojibwa'],
            ['id' => 'om', 'name' => 'Oromo'],
            ['id' => 'or', 'name' => 'Oriya'],
            ['id' => 'os', 'name' => 'Ossetic'],
            ['id' => 'pa', 'name' => 'Punjabi'],
            ['id' => 'pi', 'name' => 'Pali'],
            ['id' => 'pl', 'name' => 'Polish'],
            ['id' => 'ps', 'name' => 'Pashto'],
            ['id' => 'pt', 'name' => 'Portuguese'],
            ['id' => 'qu', 'name' => 'Quechua'],
            ['id' => 'rm', 'name' => 'Romansh'],
            ['id' => 'rn', 'name' => 'Rundi'],
            ['id' => 'ro', 'name' => 'Romanian'],
            ['id' => 'ru', 'name' => 'Russian'],
            ['id' => 'rw', 'name' => 'Kinyarwanda'],
            ['id' => 'sa', 'name' => 'Sanskrit'],
            ['id' => 'sc', 'name' => 'Sardinian'],
            ['id' => 'sd', 'name' => 'Sindhi'],
            ['id' => 'se', 'name' => 'Northern Sami'],
            ['id' => 'sg', 'name' => 'Sango'],
            ['id' => 'si', 'name' => 'Sinhala'],
            ['id' => 'sk', 'name' => 'Slovak'],
            ['id' => 'sl', 'name' => 'Slovenian'],
            ['id' => 'sm', 'name' => 'Samoan'],
            ['id' => 'sn', 'name' => 'Shona'],
            ['id' => 'so', 'name' => 'Somali'],
            ['id' => 'sq', 'name' => 'Albanian'],
            ['id' => 'sr', 'name' => 'Serbian'],
            ['id' => 'ss', 'name' => 'Swati'],
            ['id' => 'st', 'name' => 'Southern Sotho'],
            ['id' => 'su', 'name' => 'Sundanese'],
            ['id' => 'sv', 'name' => 'Swedish'],
            ['id' => 'sw', 'name' => 'Swahili'],
            ['id' => 'ta', 'name' => 'Tamil'],
            ['id' => 'te', 'name' => 'Telugu'],
            ['id' => 'tg', 'name' => 'Tajik'],
            ['id' => 'th', 'name' => 'Thai'],
            ['id' => 'ti', 'name' => 'Tigrinya'],
            ['id' => 'tk', 'name' => 'Turkmen'],
            ['id' => 'tl', 'name' => 'Tagalog'],
            ['id' => 'tn', 'name' => 'Tswana'],
            ['id' => 'to', 'name' => 'Tonga'],
            ['id' => 'tr', 'name' => 'Turkish'],
            ['id' => 'ts', 'name' => 'Tsonga'],
            ['id' => 'tt', 'name' => 'Tatar'],
            ['id' => 'tw', 'name' => 'Twi'],
            ['id' => 'ty', 'name' => 'Tahitian'],
            ['id' => 'ug', 'name' => 'Uyghur'],
            ['id' => 'uk', 'name' => 'Ukrainian'],
            ['id' => 'ur', 'name' => 'Urdu'],
            ['id' => 'uz', 'name' => 'Uzbek'],
            ['id' => 've', 'name' => 'Venda'],
            ['id' => 'vi', 'name' => 'Vietnamese'],
            ['id' => 'vo', 'name' => 'Volapük'],
            ['id' => 'wa', 'name' => 'Walloon'],
            ['id' => 'wo', 'name' => 'Wolof'],
            ['id' => 'xh', 'name' => 'Xhosa'],
            ['id' => 'yi', 'name' => 'Yiddish'],
            ['id' => 'yo', 'name' => 'Yoruba'],
            ['id' => 'za', 'name' => 'Zhuang'],
            ['id' => 'zh', 'name' => 'Chinese'],
            ['id' => 'zu', 'name' => 'Zulu'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};