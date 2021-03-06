--TEST--
trader_adxr() basic test
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

var_dump(@trader_adxr(get_data("high", $data0), get_data("low", $data0), get_data("close", $data0), $time_period)) . "\n";

--EXPECT--
array(212) {
  [40]=>
  float(19.87)
  [41]=>
  float(18.91)
  [42]=>
  float(18)
  [43]=>
  float(17.51)
  [44]=>
  float(17.43)
  [45]=>
  float(17.32)
  [46]=>
  float(17.12)
  [47]=>
  float(16.63)
  [48]=>
  float(16.02)
  [49]=>
  float(15.91)
  [50]=>
  float(15.78)
  [51]=>
  float(15.66)
  [52]=>
  float(15.8)
  [53]=>
  float(16.19)
  [54]=>
  float(16.07)
  [55]=>
  float(15.79)
  [56]=>
  float(15.33)
  [57]=>
  float(15.02)
  [58]=>
  float(14.95)
  [59]=>
  float(15.34)
  [60]=>
  float(15.23)
  [61]=>
  float(14.83)
  [62]=>
  float(15.1)
  [63]=>
  float(15.3)
  [64]=>
  float(15.02)
  [65]=>
  float(15.21)
  [66]=>
  float(15.5)
  [67]=>
  float(15.6)
  [68]=>
  float(15.23)
  [69]=>
  float(14.55)
  [70]=>
  float(14.07)
  [71]=>
  float(14.12)
  [72]=>
  float(14.81)
  [73]=>
  float(15.47)
  [74]=>
  float(15.6)
  [75]=>
  float(16.23)
  [76]=>
  float(17.34)
  [77]=>
  float(18.15)
  [78]=>
  float(19.08)
  [79]=>
  float(19.55)
  [80]=>
  float(19.63)
  [81]=>
  float(19.65)
  [82]=>
  float(19.69)
  [83]=>
  float(20.29)
  [84]=>
  float(20.75)
  [85]=>
  float(21.68)
  [86]=>
  float(22.77)
  [87]=>
  float(23.69)
  [88]=>
  float(24.51)
  [89]=>
  float(25.85)
  [90]=>
  float(27.71)
  [91]=>
  float(29.59)
  [92]=>
  float(30.55)
  [93]=>
  float(31.47)
  [94]=>
  float(32.03)
  [95]=>
  float(32.54)
  [96]=>
  float(32.86)
  [97]=>
  float(32.16)
  [98]=>
  float(31.52)
  [99]=>
  float(31.63)
  [100]=>
  float(31.92)
  [101]=>
  float(32.19)
  [102]=>
  float(32.19)
  [103]=>
  float(32.4)
  [104]=>
  float(32.69)
  [105]=>
  float(32.66)
  [106]=>
  float(33.29)
  [107]=>
  float(33.26)
  [108]=>
  float(33.28)
  [109]=>
  float(32.47)
  [110]=>
  float(30.99)
  [111]=>
  float(29.55)
  [112]=>
  float(29.06)
  [113]=>
  float(28.96)
  [114]=>
  float(28.91)
  [115]=>
  float(28.36)
  [116]=>
  float(28.01)
  [117]=>
  float(27.93)
  [118]=>
  float(27.7)
  [119]=>
  float(28.14)
  [120]=>
  float(28.42)
  [121]=>
  float(28.59)
  [122]=>
  float(28.29)
  [123]=>
  float(28.45)
  [124]=>
  float(28.6)
  [125]=>
  float(29.1)
  [126]=>
  float(30.03)
  [127]=>
  float(30.9)
  [128]=>
  float(31.84)
  [129]=>
  float(33.25)
  [130]=>
  float(34.8)
  [131]=>
  float(36.02)
  [132]=>
  float(37.17)
  [133]=>
  float(37.87)
  [134]=>
  float(38.31)
  [135]=>
  float(38.32)
  [136]=>
  float(37.55)
  [137]=>
  float(36.84)
  [138]=>
  float(36.7)
  [139]=>
  float(36.79)
  [140]=>
  float(36.83)
  [141]=>
  float(36.75)
  [142]=>
  float(36.41)
  [143]=>
  float(36.35)
  [144]=>
  float(36.37)
  [145]=>
  float(36.77)
  [146]=>
  float(37.08)
  [147]=>
  float(37.39)
  [148]=>
  float(36.78)
  [149]=>
  float(34.37)
  [150]=>
  float(32.13)
  [151]=>
  float(30.83)
  [152]=>
  float(29.52)
  [153]=>
  float(28.29)
  [154]=>
  float(26.76)
  [155]=>
  float(25.32)
  [156]=>
  float(24.26)
  [157]=>
  float(22.78)
  [158]=>
  float(22.11)
  [159]=>
  float(21.96)
  [160]=>
  float(21.74)
  [161]=>
  float(21.31)
  [162]=>
  float(20.31)
  [163]=>
  float(19.03)
  [164]=>
  float(18.16)
  [165]=>
  float(17.16)
  [166]=>
  float(16.29)
  [167]=>
  float(15.83)
  [168]=>
  float(15.47)
  [169]=>
  float(15.72)
  [170]=>
  float(15.79)
  [171]=>
  float(16.33)
  [172]=>
  float(17.11)
  [173]=>
  float(17.85)
  [174]=>
  float(18.2)
  [175]=>
  float(18.41)
  [176]=>
  float(18.42)
  [177]=>
  float(17.91)
  [178]=>
  float(16.88)
  [179]=>
  float(16.01)
  [180]=>
  float(15.67)
  [181]=>
  float(15.34)
  [182]=>
  float(15.91)
  [183]=>
  float(16.93)
  [184]=>
  float(17.67)
  [185]=>
  float(18.61)
  [186]=>
  float(19.82)
  [187]=>
  float(20.45)
  [188]=>
  float(21.48)
  [189]=>
  float(22.61)
  [190]=>
  float(22.44)
  [191]=>
  float(21.72)
  [192]=>
  float(21.53)
  [193]=>
  float(21.71)
  [194]=>
  float(21.85)
  [195]=>
  float(22.62)
  [196]=>
  float(23.79)
  [197]=>
  float(24.55)
  [198]=>
  float(24.94)
  [199]=>
  float(25.51)
  [200]=>
  float(26.09)
  [201]=>
  float(26.25)
  [202]=>
  float(27.6)
  [203]=>
  float(27.97)
  [204]=>
  float(28.25)
  [205]=>
  float(28.86)
  [206]=>
  float(29.89)
  [207]=>
  float(30.54)
  [208]=>
  float(30.86)
  [209]=>
  float(31.51)
  [210]=>
  float(32.34)
  [211]=>
  float(32.81)
  [212]=>
  float(33.47)
  [213]=>
  float(34.09)
  [214]=>
  float(33.64)
  [215]=>
  float(34.16)
  [216]=>
  float(34.17)
  [217]=>
  float(34.05)
  [218]=>
  float(34.01)
  [219]=>
  float(34.06)
  [220]=>
  float(34.2)
  [221]=>
  float(33.84)
  [222]=>
  float(32.86)
  [223]=>
  float(32.28)
  [224]=>
  float(32.09)
  [225]=>
  float(32.3)
  [226]=>
  float(31.89)
  [227]=>
  float(31.44)
  [228]=>
  float(30.65)
  [229]=>
  float(29.47)
  [230]=>
  float(28.31)
  [231]=>
  float(27.67)
  [232]=>
  float(27.72)
  [233]=>
  float(28.13)
  [234]=>
  float(28.74)
  [235]=>
  float(28.77)
  [236]=>
  float(28.42)
  [237]=>
  float(27.8)
  [238]=>
  float(27.23)
  [239]=>
  float(26.1)
  [240]=>
  float(24.85)
  [241]=>
  float(23.78)
  [242]=>
  float(22.76)
  [243]=>
  float(21.7)
  [244]=>
  float(20.95)
  [245]=>
  float(20.93)
  [246]=>
  float(21.21)
  [247]=>
  float(21.64)
  [248]=>
  float(22.26)
  [249]=>
  float(22.26)
  [250]=>
  float(21.6)
  [251]=>
  float(20.49)
}