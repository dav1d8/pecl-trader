--TEST--
trader_adx() basic test
--SKIPIF--
<?php
if (!extension_loaded("trader")) die("skip");
--INI--
trader.real_precision=2
--FILE--
<?php

include "inc/data.php";
include "inc/func.php";

$time_period = 14;

var_dump(@trader_adx(get_data("high", $data0), get_data("low", $data0), get_data("close", $data0), $time_period)) . "\n";

--EXPECT--
array(225) {
  [27]=>
  float(23)
  [28]=>
  float(22.08)
  [29]=>
  float(20.85)
  [30]=>
  float(20.21)
  [31]=>
  float(19.59)
  [32]=>
  float(18.95)
  [33]=>
  float(17.67)
  [34]=>
  float(16.74)
  [35]=>
  float(15.75)
  [36]=>
  float(15.54)
  [37]=>
  float(15.81)
  [38]=>
  float(16.28)
  [39]=>
  float(16.35)
  [40]=>
  float(16.73)
  [41]=>
  float(15.74)
  [42]=>
  float(15.16)
  [43]=>
  float(14.81)
  [44]=>
  float(15.27)
  [45]=>
  float(15.7)
  [46]=>
  float(16.56)
  [47]=>
  float(16.52)
  [48]=>
  float(16.29)
  [49]=>
  float(16.28)
  [50]=>
  float(15.75)
  [51]=>
  float(15.05)
  [52]=>
  float(15.25)
  [53]=>
  float(15.64)
  [54]=>
  float(16.4)
  [55]=>
  float(16.43)
  [56]=>
  float(15.85)
  [57]=>
  float(14.77)
  [58]=>
  float(14.2)
  [59]=>
  float(14.11)
  [60]=>
  float(13.94)
  [61]=>
  float(13.37)
  [62]=>
  float(13.92)
  [63]=>
  float(14.85)
  [64]=>
  float(14.98)
  [65]=>
  float(15.17)
  [66]=>
  float(15.35)
  [67]=>
  float(14.8)
  [68]=>
  float(14.03)
  [69]=>
  float(13.26)
  [70]=>
  float(13.36)
  [71]=>
  float(14.03)
  [72]=>
  float(15.5)
  [73]=>
  float(17)
  [74]=>
  float(17.83)
  [75]=>
  float(18.54)
  [76]=>
  float(19.83)
  [77]=>
  float(21.32)
  [78]=>
  float(23)
  [79]=>
  float(23.76)
  [80]=>
  float(24.45)
  [81]=>
  float(25.26)
  [82]=>
  float(26.12)
  [83]=>
  float(27.21)
  [84]=>
  float(27.48)
  [85]=>
  float(27.86)
  [86]=>
  float(28.54)
  [87]=>
  float(29.55)
  [88]=>
  float(30.48)
  [89]=>
  float(31.86)
  [90]=>
  float(34.1)
  [91]=>
  float(36.18)
  [92]=>
  float(37.34)
  [93]=>
  float(38.48)
  [94]=>
  float(38.79)
  [95]=>
  float(38.97)
  [96]=>
  float(38.5)
  [97]=>
  float(36.84)
  [98]=>
  float(35.17)
  [99]=>
  float(34.71)
  [100]=>
  float(34.29)
  [101]=>
  float(33.9)
  [102]=>
  float(32.51)
  [103]=>
  float(30.7)
  [104]=>
  float(29.19)
  [105]=>
  float(27.98)
  [106]=>
  float(28.1)
  [107]=>
  float(27.73)
  [108]=>
  float(27.6)
  [109]=>
  float(26.44)
  [110]=>
  float(25.14)
  [111]=>
  float(23.93)
  [112]=>
  float(23.41)
  [113]=>
  float(23.62)
  [114]=>
  float(23.93)
  [115]=>
  float(24.21)
  [116]=>
  float(25.32)
  [117]=>
  float(26.67)
  [118]=>
  float(27.43)
  [119]=>
  float(28.17)
  [120]=>
  float(29.11)
  [121]=>
  float(29.58)
  [122]=>
  float(30.14)
  [123]=>
  float(31.76)
  [124]=>
  float(33.27)
  [125]=>
  float(34.8)
  [126]=>
  float(36.44)
  [127]=>
  float(37.87)
  [128]=>
  float(39.47)
  [129]=>
  float(41.19)
  [130]=>
  float(42.93)
  [131]=>
  float(44.61)
  [132]=>
  float(46.16)
  [133]=>
  float(46.62)
  [134]=>
  float(47.05)
  [135]=>
  float(46.49)
  [136]=>
  float(43.33)
  [137]=>
  float(40.4)
  [138]=>
  float(38.6)
  [139]=>
  float(37.15)
  [140]=>
  float(35.8)
  [141]=>
  float(34.02)
  [142]=>
  float(31.63)
  [143]=>
  float(29.77)
  [144]=>
  float(28.13)
  [145]=>
  float(27.38)
  [146]=>
  float(27.55)
  [147]=>
  float(27.74)
  [148]=>
  float(27.06)
  [149]=>
  float(25.4)
  [150]=>
  float(23.85)
  [151]=>
  float(23.06)
  [152]=>
  float(21.89)
  [153]=>
  float(20.78)
  [154]=>
  float(19.49)
  [155]=>
  float(19.01)
  [156]=>
  float(18.75)
  [157]=>
  float(17.42)
  [158]=>
  float(16.85)
  [159]=>
  float(16.37)
  [160]=>
  float(15.74)
  [161]=>
  float(15.57)
  [162]=>
  float(15.23)
  [163]=>
  float(14.21)
  [164]=>
  float(13.26)
  [165]=>
  float(12.42)
  [166]=>
  float(11.8)
  [167]=>
  float(12.17)
  [168]=>
  float(11.93)
  [169]=>
  float(12.69)
  [170]=>
  float(14.16)
  [171]=>
  float(15.81)
  [172]=>
  float(17.85)
  [173]=>
  float(19.97)
  [174]=>
  float(20.82)
  [175]=>
  float(21.59)
  [176]=>
  float(22.64)
  [177]=>
  float(22.55)
  [178]=>
  float(21.34)
  [179]=>
  float(20.21)
  [180]=>
  float(19.17)
  [181]=>
  float(18.75)
  [182]=>
  float(19.12)
  [183]=>
  float(19.69)
  [184]=>
  float(19.53)
  [185]=>
  float(19.37)
  [186]=>
  float(19.68)
  [187]=>
  float(20.07)
  [188]=>
  float(21.37)
  [189]=>
  float(22.58)
  [190]=>
  float(22.33)
  [191]=>
  float(22.1)
  [192]=>
  float(22.84)
  [193]=>
  float(24.26)
  [194]=>
  float(24.94)
  [195]=>
  float(26.11)
  [196]=>
  float(27.89)
  [197]=>
  float(29.57)
  [198]=>
  float(30.51)
  [199]=>
  float(31.34)
  [200]=>
  float(32.11)
  [201]=>
  float(31.12)
  [202]=>
  float(32.63)
  [203]=>
  float(33.61)
  [204]=>
  float(34.39)
  [205]=>
  float(34.87)
  [206]=>
  float(35.52)
  [207]=>
  float(36.13)
  [208]=>
  float(35.61)
  [209]=>
  float(35.14)
  [210]=>
  float(35.1)
  [211]=>
  float(35.1)
  [212]=>
  float(35.61)
  [213]=>
  float(36.08)
  [214]=>
  float(36.16)
  [215]=>
  float(35.69)
  [216]=>
  float(34.74)
  [217]=>
  float(33.71)
  [218]=>
  float(33.15)
  [219]=>
  float(32.6)
  [220]=>
  float(32.28)
  [221]=>
  float(32.07)
  [222]=>
  float(30.58)
  [223]=>
  float(29.46)
  [224]=>
  float(29.08)
  [225]=>
  float(29)
  [226]=>
  float(27.71)
  [227]=>
  float(26.73)
  [228]=>
  float(25.6)
  [229]=>
  float(24.21)
  [230]=>
  float(22.91)
  [231]=>
  float(22.19)
  [232]=>
  float(22.84)
  [233]=>
  float(23.99)
  [234]=>
  float(25.42)
  [235]=>
  float(26.97)
  [236]=>
  float(27.38)
  [237]=>
  float(26.51)
  [238]=>
  float(25.46)
  [239]=>
  float(24.48)
  [240]=>
  float(22.98)
  [241]=>
  float(21.97)
  [242]=>
  float(21.32)
  [243]=>
  float(20.48)
  [244]=>
  float(19.7)
  [245]=>
  float(19.03)
  [246]=>
  float(18.44)
  [247]=>
  float(17.86)
  [248]=>
  float(17.56)
  [249]=>
  float(17.15)
  [250]=>
  float(16.68)
  [251]=>
  float(15.53)
}