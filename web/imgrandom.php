<?php
$links = array();
$links[] = 'annehappy';
$links[] = 'butayaro';
$links[] = 'butayaro (1)';
$links[] = 'charlotte';
$links[] = 'chuuni';
$links[] = 'colors';
$links[] = 'eromanga';
$links[] = 'Fate';
$links[] = 'gabriel';
$links[] = 'GGO';
$links[] = 'goblin';
$links[] = 'goblin (1)';
$links[] = 'goblin (2)';
$links[] = 'goblin (3)';
$links[] = 'goblin (4)';
$links[] = 'goblin (5)';
$links[] = 'goblin (6)';
$links[] = 'gridman';
$links[] = 'gridman (1)';
$links[] = 'gridman (2)';
$links[] = 'hataraku';
$links[] = 'hataraku (1)';
$links[] = 'hataraku (2)';
$links[] = 'hataraku (3)';
$links[] = 'hataraku (4)';
$links[] = 'ikamusume';
$links[] = 'kemono';
$links[] = 'kiniro';
$links[] = 'kon';
$links[] = 'kon (1)';
$links[] = 'konobijutsubu';
$links[] = 'konosuba';
$links[] = 'konosuba (1)';
$links[] = 'konosuba (2)';
$links[] = 'konosuba (3)';
$links[] = 'konosuba (4)';
$links[] = 'konosuba (5)';
$links[] = 'koten';
$links[] = 'kumamiko';
$links[] = 'kyojin';
$links[] = 'kyojin (1)';
$links[] = 'kyojin (2)';
$links[] = 'kyojin (3)';
$links[] = 'kyojin (4)';
$links[] = 'kyojin (5)';
$links[] = 'kyojin (6)';
$links[] = 'kyojin (7)';
$links[] = 'kyokai';
$links[] = 'kyokai (1)';
$links[] = 'lovelive';
$links[] = 'lovelive (1)';
$links[] = 'lovelivess';
$links[] = 'nekopara';
$links[] = 'newgame';
$links[] = 'newgame (1)';
$links[] = 'newgame (2)';
$links[] = 'nichijou';
$links[] = 'nichijou (1)';
$links[] = 'nichijou (2)';
$links[] = 'nichijou (3)';
$links[] = 'nichijou (4)';
$links[] = 'nichijou (5)';
$links[] = 'nichijou (6)';
$links[] = 'nichijou (7)';
$links[] = 'nichijou (8)';
$links[] = 'nonnon';
$links[] = 'nourin';
$links[] = 'oreimo';
$links[] = 'oreimo (1)';
$links[] = 'oreimo (2)';
$links[] = 'oreimo (3)';
$links[] = 'oreimo (4)';
$links[] = 'oreimo (5)';
$links[] = 'oreimo (6)';
$links[] = 'oreimo (7)';
$links[] = 'oreimo (8)';
$links[] = 'oreimo (9)';
$links[] = 're0';
$links[] = 're0 (1)';
$links[] = 're0 (2)';
$links[] = 're0 (3)';
$links[] = 're0 (4)';
$links[] = 're0 (5)';
$links[] = 're0 (6)';
$links[] = 're0 (7)';
$links[] = 're0 (8)';
$links[] = 'rerugun';
$links[] = 'sangatsu';
$links[] = 'sao';
$links[] = 'sao (1)';
$links[] = 'sao (2)';
$links[] = 'shuumatsu';
$links[] = 'shuumatsu (1)';
$links[] = 'slime';
$links[] = 'slime (1)';
$links[] = 'tamago';
$links[] = 'tamago (1)';
$links[] = 'tamago (2)';
$links[] = 'touhou';
$links[] = 'unknow';
$links[] = 'unknow (2)';
$links[] = 'unknow (1)';
$links[] = 'usa';
$links[] = 'usa (1)';
$links[] = 'usa (2)';
$links[] = 'usa (3)';
$links[] = 'usa (4)';
$links[] = 'usa (5)';
$links[] = 'usa (6)';
$links[] = 'usa (7)';
$links[] = 'yurucamp';
$links[] = 'yurucamp (1)';
$links[] = 'yuruyuri';
$links[] = 'pixiv45315972';
$links[] = 'pixiv50653396';
$links[] = 'pixiv52383966';
$links[] = 'pixiv62024540';
$links[] = 'pixiv69158161';
$links[] = 'pixiv69264580';

shuffle($links);

$i        = rand(0, (count($links) - 1));
$link    = $links[$i];

header("Location: https://cies96035.herokuapp.com/img/gif/{$link}.gif");
?>