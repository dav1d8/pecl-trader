--TEST--
trader_atr() basic test
--SKIPIF--
<?php
if (!extension_loaded("trader")) die("skip");
--INI--
trader.real_precision=5
--FILE--
<?php

include "inc/data.php";
include "inc/func.php";

var_dump(trader_atr(
	get_data("high", $data0),
	get_data("low", $data0),
	get_data("close", $data0),
	14
));


--EXPECT--
array(238) {
  [14]=>
  float(3.57821)
  [15]=>
  float(3.48763)
  [16]=>
  float(3.55994)
  [17]=>
  float(3.43959)
  [18]=>
  float(3.38819)
  [19]=>
  float(3.32475)
  [20]=>
  float(3.29048)
  [21]=>
  float(3.19616)
  [22]=>
  float(3.22679)
  [23]=>
  float(3.22631)
  [24]=>
  float(3.20121)
  [25]=>
  float(3.24934)
  [26]=>
  float(3.2451)
  [27]=>
  float(3.39474)
  [28]=>
  float(3.41333)
  [29]=>
  float(3.39487)
  [30]=>
  float(3.34881)
  [31]=>
  float(3.26354)
  [32]=>
  float(3.16436)
  [33]=>
  float(3.18405)
  [34]=>
  float(3.1084)
  [35]=>
  float(3.12066)
  [36]=>
  float(3.06311)
  [37]=>
  float(3.09896)
  [38]=>
  float(3.04261)
  [39]=>
  float(2.97028)
  [40]=>
  float(2.89669)
  [41]=>
  float(3.05585)
  [42]=>
  float(3.12115)
  [43]=>
  float(3.00321)
  [44]=>
  float(3.01441)
  [45]=>
  float(2.89302)
  [46]=>
  float(2.84495)
  [47]=>
  float(2.83602)
  [48]=>
  float(2.81845)
  [49]=>
  float(2.73535)
  [50]=>
  float(2.64711)
  [51]=>
  float(2.64089)
  [52]=>
  float(2.80939)
  [53]=>
  float(2.74694)
  [54]=>
  float(2.68037)
  [55]=>
  float(2.67177)
  [56]=>
  float(2.61486)
  [57]=>
  float(2.61808)
  [58]=>
  float(2.65858)
  [59]=>
  float(2.62475)
  [60]=>
  float(2.61584)
  [61]=>
  float(2.53614)
  [62]=>
  float(2.60284)
  [63]=>
  float(2.57978)
  [64]=>
  float(2.70158)
  [65]=>
  float(2.71397)
  [66]=>
  float(2.66512)
  [67]=>
  float(2.66225)
  [68]=>
  float(2.61709)
  [69]=>
  float(2.65337)
  [70]=>
  float(2.67813)
  [71]=>
  float(2.75898)
  [72]=>
  float(2.85655)
  [73]=>
  float(2.89358)
  [74]=>
  float(2.92797)
  [75]=>
  float(3.67847)
  [76]=>
  float(3.90215)
  [77]=>
  float(4.01628)
  [78]=>
  float(3.97048)
  [79]=>
  float(3.99044)
  [80]=>
  float(3.90398)
  [81]=>
  float(3.89513)
  [82]=>
  float(3.82905)
  [83]=>
  float(3.71626)
  [84]=>
  float(3.63617)
  [85]=>
  float(3.59073)
  [86]=>
  float(3.62889)
  [87]=>
  float(3.54183)
  [88]=>
  float(3.44527)
  [89]=>
  float(3.66132)
  [90]=>
  float(4.13194)
  [91]=>
  float(4.19394)
  [92]=>
  float(4.16688)
  [93]=>
  float(3.99889)
  [94]=>
  float(3.91646)
  [95]=>
  float(3.77529)
  [96]=>
  float(3.65527)
  [97]=>
  float(3.71346)
  [98]=>
  float(3.62679)
  [99]=>
  float(3.91916)
  [100]=>
  float(4.03243)
  [101]=>
  float(3.92726)
  [102]=>
  float(3.99031)
  [103]=>
  float(4.07529)
  [104]=>
  float(4.05206)
  [105]=>
  float(4.01691)
  [106]=>
  float(4.13642)
  [107]=>
  float(4.1581)
  [108]=>
  float(4.16895)
  [109]=>
  float(4.13474)
  [110]=>
  float(4.12083)
  [111]=>
  float(3.96934)
  [112]=>
  float(3.9401)
  [113]=>
  float(4.06081)
  [114]=>
  float(3.98504)
  [115]=>
  float(3.82111)
  [116]=>
  float(3.90531)
  [117]=>
  float(3.96565)
  [118]=>
  float(3.85667)
  [119]=>
  float(3.78691)
  [120]=>
  float(3.74427)
  [121]=>
  float(3.6554)
  [122]=>
  float(3.59073)
  [123]=>
  float(3.87925)
  [124]=>
  float(3.83859)
  [125]=>
  float(3.76083)
  [126]=>
  float(3.71148)
  [127]=>
  float(3.65138)
  [128]=>
  float(3.63128)
  [129]=>
  float(3.62619)
  [130]=>
  float(3.6036)
  [131]=>
  float(3.59192)
  [132]=>
  float(3.50035)
  [133]=>
  float(3.50961)
  [134]=>
  float(3.41035)
  [135]=>
  float(3.53747)
  [136]=>
  float(3.89694)
  [137]=>
  float(3.8243)
  [138]=>
  float(3.94399)
  [139]=>
  float(3.86371)
  [140]=>
  float(3.75701)
  [141]=>
  float(3.73866)
  [142]=>
  float(3.67732)
  [143]=>
  float(3.68323)
  [144]=>
  float(3.58586)
  [145]=>
  float(3.62901)
  [146]=>
  float(3.72194)
  [147]=>
  float(3.72823)
  [148]=>
  float(3.92192)
  [149]=>
  float(4.07036)
  [150]=>
  float(4.01676)
  [151]=>
  float(3.98414)
  [152]=>
  float(4.0167)
  [153]=>
  float(3.9305)
  [154]=>
  float(3.89118)
  [155]=>
  float(3.93467)
  [156]=>
  float(3.79648)
  [157]=>
  float(3.96316)
  [158]=>
  float(3.93865)
  [159]=>
  float(3.89374)
  [160]=>
  float(3.83848)
  [161]=>
  float(3.81001)
  [162]=>
  float(3.76573)
  [163]=>
  float(3.76889)
  [164]=>
  float(3.67397)
  [165]=>
  float(3.62083)
  [166]=>
  float(3.58577)
  [167]=>
  float(3.61107)
  [168]=>
  float(3.56742)
  [169]=>
  float(3.58975)
  [170]=>
  float(3.6412)
  [171]=>
  float(3.61325)
  [172]=>
  float(3.76588)
  [173]=>
  float(3.73332)
  [174]=>
  float(3.72094)
  [175]=>
  float(3.57087)
  [176]=>
  float(3.53438)
  [177]=>
  float(3.48335)
  [178]=>
  float(3.78383)
  [179]=>
  float(3.90712)
  [180]=>
  float(3.90519)
  [181]=>
  float(3.83196)
  [182]=>
  float(4.01325)
  [183]=>
  float(4.0523)
  [184]=>
  float(4.15142)
  [185]=>
  float(4.07346)
  [186]=>
  float(4.0325)
  [187]=>
  float(3.93232)
  [188]=>
  float(4.04859)
  [189]=>
  float(3.99154)
  [190]=>
  float(4.00572)
  [191]=>
  float(3.98317)
  [192]=>
  float(3.99366)
  [193]=>
  float(4.08768)
  [194]=>
  float(4.0507)
  [195]=>
  float(4.10922)
  [196]=>
  float(4.23499)
  [197]=>
  float(4.11535)
  [198]=>
  float(4.17854)
  [199]=>
  float(4.18793)
  [200]=>
  float(4.10736)
  [201]=>
  float(4.24684)
  [202]=>
  float(5.22921)
  [203]=>
  float(5.11426)
  [204]=>
  float(4.96325)
  [205]=>
  float(4.76087)
  [206]=>
  float(4.61724)
  [207]=>
  float(4.45243)
  [208]=>
  float(4.4244)
  [209]=>
  float(4.28266)
  [210]=>
  float(4.19961)
  [211]=>
  float(4.07393)
  [212]=>
  float(4.10007)
  [213]=>
  float(4.00364)
  [214]=>
  float(3.98124)
  [215]=>
  float(3.93829)
  [216]=>
  float(3.9027)
  [217]=>
  float(3.81179)
  [218]=>
  float(3.77166)
  [219]=>
  float(3.68083)
  [220]=>
  float(3.56077)
  [221]=>
  float(3.46715)
  [222]=>
  float(3.55449)
  [223]=>
  float(3.80917)
  [224]=>
  float(3.85852)
  [225]=>
  float(3.85934)
  [226]=>
  float(3.88724)
  [227]=>
  float(3.74387)
  [228]=>
  float(3.59288)
  [229]=>
  float(3.50624)
  [230]=>
  float(3.41222)
  [231]=>
  float(3.37849)
  [232]=>
  float(3.68003)
  [233]=>
  float(3.74789)
  [234]=>
  float(3.74804)
  [235]=>
  float(3.87318)
  [236]=>
  float(4.30152)
  [237]=>
  float(4.40927)
  [238]=>
  float(4.53646)
  [239]=>
  float(4.44957)
  [240]=>
  float(4.47103)
  [241]=>
  float(4.4331)
  [242]=>
  float(4.29074)
  [243]=>
  float(4.1764)
  [244]=>
  float(4.02523)
  [245]=>
  float(3.90271)
  [246]=>
  float(3.79823)
  [247]=>
  float(3.66122)
  [248]=>
  float(3.52041)
  [249]=>
  float(3.39396)
  [250]=>
  float(3.2901)
  [251]=>
  float(3.26081)
}