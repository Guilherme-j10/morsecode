<?php

   namespace elevenstack\src;

   class morsecode{

      private $string = '';

      private $morsecode = [
         '0' => '-----',
         '1' => '.----',
         '2' => '..---',
         '3' => '...--',
         '4' => '....-',
         '5' => '.....',
         '6' => '-....',
         '7' => '--...',
         '8' => '---..',
         '9' => '----.',
         'a' => '.-',
         'b' => '-...',
         'c' => '-.-.',
         'd' => '-..',
         'e' => '.',
         'f' => '..-.',
         'g' => '--.',
         'h' => '....',
         'i' => '..',
         'j' => '.---',
         'k' => '-.-',
         'l' => '.-..',
         'm' => '--',
         'n' => '-.',
         'o' => '---',
         'p' => '.--.',
         'q' => '--.-',
         'r' => '.-.',
         's' => '...',
         't' => '-',
         'u' => '..-',
         'v' => '...-',
         'w' => '.--',
         'x' => '-..-',
         'y' => '-.--',
         'z' => '--..',
         '.' => '.-.-.-',
         ',' => '--..--',
         '?' => '..--..',
         '!' => '-.-.--',
         '-' => '-....-',
         '/' => '-..-.',
         '@' => '.--.-.',
         '(' => '-.--.',
         ')' => '-.--.-',
         ' ' => '|'
      ];

      public function __construct($string, $option){
         $this->string = $string;

         switch($option){
               case 'encode':
                  echo $this->encode(strtolower($this->string));
               break;
               case 'decode':
                  echo $this->decode(strtolower($this->string));
               break;
               default:
                  echo "invalid value";
               break;
         }
      }

      public function encode($text){
         $result = '';
         
         foreach(str_split($text) as $chave){
               if(isset($this->morsecode[$chave])){
                  $result .= ' '.$this->morsecode[$chave];
               }
         }

         return trim($result);
      }

      public function decode($codemorse){
         $result = '';

         $letters = array_flip($this->morsecode);
         foreach(explode(" ", $codemorse) as $chave){
               if(isset($letters[$chave])){
                  $result .= $letters[$chave];
               }
         }

         return trim($result);
      }

   }