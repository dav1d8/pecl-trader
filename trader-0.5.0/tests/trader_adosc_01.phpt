--TEST--
trader_adosc() basic test
--SKIPIF--
<?php
if (!extension_loaded("trader")) die("skip");
--INI--
trader.real_precision=2
--FILE--
<?php

include "inc/data.php";
include "inc/func.php";

/* don't show notices */
var_dump(@trader_adosc(
	get_data("high", $data0),
	get_data("low", $data0),
	get_data("close", $data0),
	get_data("volume", $data0),
	NULL, 14
));


--EXPECT--
array(239) {
  [13]=>
  float(850629.11)
  [14]=>
  float(4887230.57)
  [15]=>
  float(8795101.47)
  [16]=>
  float(4913372.19)
  [17]=>
  float(2089939.48)
  [18]=>
  float(3103502.67)
  [19]=>
  float(1341754.9)
  [20]=>
  float(-490507.39)
  [21]=>
  float(-642511.89)
  [22]=>
  float(-3463916.05)
  [23]=>
  float(-6472312.7)
  [24]=>
  float(-5659496.11)
  [25]=>
  float(-7061872.45)
  [26]=>
  float(-3943014.73)
  [27]=>
  float(465284.2)
  [28]=>
  float(504336.74)
  [29]=>
  float(-1510020.22)
  [30]=>
  float(-2881435.1)
  [31]=>
  float(-972474.28)
  [32]=>
  float(-1644954.13)
  [33]=>
  float(760432.06)
  [34]=>
  float(318304.51)
  [35]=>
  float(-1707759.84)
  [36]=>
  float(278013.61)
  [37]=>
  float(1649035.3)
  [38]=>
  float(3145891.71)
  [39]=>
  float(1966019.22)
  [40]=>
  float(1184272.45)
  [41]=>
  float(-3428375.48)
  [42]=>
  float(-2028372.99)
  [43]=>
  float(-962929.59)
  [44]=>
  float(-171742.6)
  [45]=>
  float(-20383.15)
  [46]=>
  float(-842350.84)
  [47]=>
  float(-3587599.21)
  [48]=>
  float(-2206222.98)
  [49]=>
  float(-2510940.14)
  [50]=>
  float(-4111390.86)
  [51]=>
  float(-532574.84)
  [52]=>
  float(-4070422.83)
  [53]=>
  float(-7298492.58)
  [54]=>
  float(-8222905.16)
  [55]=>
  float(-6182819.45)
  [56]=>
  float(-5134785.42)
  [57]=>
  float(-5072015.71)
  [58]=>
  float(-3301734.07)
  [59]=>
  float(-2957262.47)
  [60]=>
  float(-3685723.35)
  [61]=>
  float(-2802928.54)
  [62]=>
  float(167596.93)
  [63]=>
  float(-492571.92)
  [64]=>
  float(1650494.22)
  [65]=>
  float(3560110.68)
  [66]=>
  float(4020367.97)
  [67]=>
  float(5839056.2)
  [68]=>
  float(4072751.28)
  [69]=>
  float(2348435.35)
  [70]=>
  float(2567794.27)
  [71]=>
  float(-563531.73)
  [72]=>
  float(-2845331.68)
  [73]=>
  float(675066.71)
  [74]=>
  float(5142091.42)
  [75]=>
  float(1769198.86)
  [76]=>
  float(637545.56)
  [77]=>
  float(4206084.84)
  [78]=>
  float(5069881.49)
  [79]=>
  float(3140339.95)
  [80]=>
  float(776782.7)
  [81]=>
  float(1280893.52)
  [82]=>
  float(3723068.33)
  [83]=>
  float(1945679.04)
  [84]=>
  float(3198032.75)
  [85]=>
  float(1976572.02)
  [86]=>
  float(3905325.57)
  [87]=>
  float(3227448.71)
  [88]=>
  float(4081451.7)
  [89]=>
  float(5721543.88)
  [90]=>
  float(12176846.61)
  [91]=>
  float(12316424.15)
  [92]=>
  float(12623568.73)
  [93]=>
  float(11190262.58)
  [94]=>
  float(9763232.88)
  [95]=>
  float(7101588.07)
  [96]=>
  float(4905304.18)
  [97]=>
  float(2566323.95)
  [98]=>
  float(-655581.05)
  [99]=>
  float(2685366.27)
  [100]=>
  float(6736101.16)
  [101]=>
  float(8717525.59)
  [102]=>
  float(7003981.64)
  [103]=>
  float(8368423.6)
  [104]=>
  float(7298670.56)
  [105]=>
  float(9148220.08)
  [106]=>
  float(10405160.83)
  [107]=>
  float(7057484.65)
  [108]=>
  float(3096797.2)
  [109]=>
  float(2008337.35)
  [110]=>
  float(1259379.39)
  [111]=>
  float(2237868.93)
  [112]=>
  float(1355065.59)
  [113]=>
  float(2406087.28)
  [114]=>
  float(1980089.51)
  [115]=>
  float(2577630.92)
  [116]=>
  float(3766860.58)
  [117]=>
  float(717515.55)
  [118]=>
  float(-285202.56)
  [119]=>
  float(-1402131.27)
  [120]=>
  float(-4035152.33)
  [121]=>
  float(-6778232.42)
  [122]=>
  float(-5683467.81)
  [123]=>
  float(-3631998.74)
  [124]=>
  float(-153829.03)
  [125]=>
  float(2755635.91)
  [126]=>
  float(680713.12)
  [127]=>
  float(1863163.82)
  [128]=>
  float(2396014.97)
  [129]=>
  float(4810266.22)
  [130]=>
  float(6341565.76)
  [131]=>
  float(6938401.18)
  [132]=>
  float(6286743.77)
  [133]=>
  float(5531458.95)
  [134]=>
  float(4331662.32)
  [135]=>
  float(1004671.63)
  [136]=>
  float(-2170890.36)
  [137]=>
  float(-648053.57)
  [138]=>
  float(-4182954.66)
  [139]=>
  float(-2776936.08)
  [140]=>
  float(-4449131.61)
  [141]=>
  float(-1652773.67)
  [142]=>
  float(1516734.43)
  [143]=>
  float(1535989.26)
  [144]=>
  float(1723378.93)
  [145]=>
  float(-300268.04)
  [146]=>
  float(-2765220.5)
  [147]=>
  float(-5592951.82)
  [148]=>
  float(-2972001.74)
  [149]=>
  float(-2496802.68)
  [150]=>
  float(-2905807.58)
  [151]=>
  float(-5237004.48)
  [152]=>
  float(-3148261.93)
  [153]=>
  float(-4719617.15)
  [154]=>
  float(-4528731.96)
  [155]=>
  float(-2235382.84)
  [156]=>
  float(1202694.27)
  [157]=>
  float(-1011174.58)
  [158]=>
  float(-1829060.47)
  [159]=>
  float(-3757141.45)
  [160]=>
  float(-1839059.91)
  [161]=>
  float(-2187092.98)
  [162]=>
  float(-2298584.84)
  [163]=>
  float(-3919512.92)
  [164]=>
  float(-3982236.28)
  [165]=>
  float(-5323771.56)
  [166]=>
  float(-4973271.39)
  [167]=>
  float(-3872889.44)
  [168]=>
  float(-2329090.72)
  [169]=>
  float(-1724389.57)
  [170]=>
  float(1342598.43)
  [171]=>
  float(-1593819.87)
  [172]=>
  float(-1036437.29)
  [173]=>
  float(-2482480.65)
  [174]=>
  float(-4543543.58)
  [175]=>
  float(-3042241.18)
  [176]=>
  float(-5355923.5)
  [177]=>
  float(-7784182.54)
  [178]=>
  float(-12380612.42)
  [179]=>
  float(-9820967.13)
  [180]=>
  float(-10016252.64)
  [181]=>
  float(-11040727.48)
  [182]=>
  float(-13691552.61)
  [183]=>
  float(-9266292.98)
  [184]=>
  float(-8676963.17)
  [185]=>
  float(-7041924.67)
  [186]=>
  float(-10425713.83)
  [187]=>
  float(-10301373.09)
  [188]=>
  float(-10423897.99)
  [189]=>
  float(-6076910.96)
  [190]=>
  float(-2895838.59)
  [191]=>
  float(-5714093.61)
  [192]=>
  float(-8797079.27)
  [193]=>
  float(-6808740.43)
  [194]=>
  float(-7161695.09)
  [195]=>
  float(-11041837.98)
  [196]=>
  float(-19027027.26)
  [197]=>
  float(-13555568.83)
  [198]=>
  float(-6315233.83)
  [199]=>
  float(-3290783.6)
  [200]=>
  float(-1644157.74)
  [201]=>
  float(-7091918.47)
  [202]=>
  float(-8035323.26)
  [203]=>
  float(-2493753.35)
  [204]=>
  float(552669.36)
  [205]=>
  float(3053652.95)
  [206]=>
  float(-1032898.61)
  [207]=>
  float(-600054.8)
  [208]=>
  float(2265187.78)
  [209]=>
  float(-616338.95)
  [210]=>
  float(-3065001.49)
  [211]=>
  float(-5087257.61)
  [212]=>
  float(-7867493.44)
  [213]=>
  float(-14980541.78)
  [214]=>
  float(-11157898.69)
  [215]=>
  float(-9634503.56)
  [216]=>
  float(-3897374.58)
  [217]=>
  float(-5330715.32)
  [218]=>
  float(-1318372.69)
  [219]=>
  float(-2875377.79)
  [220]=>
  float(-245167.73)
  [221]=>
  float(556274.98)
  [222]=>
  float(9658345.06)
  [223]=>
  float(18256675.1)
  [224]=>
  float(24335414.88)
  [225]=>
  float(18415117.3)
  [226]=>
  float(18623389.67)
  [227]=>
  float(16922166.95)
  [228]=>
  float(15061623.37)
  [229]=>
  float(12539540.52)
  [230]=>
  float(10891381.48)
  [231]=>
  float(10417625.07)
  [232]=>
  float(14008042.68)
  [233]=>
  float(17773315.08)
  [234]=>
  float(15041493.94)
  [235]=>
  float(12962670.32)
  [236]=>
  float(4347388.22)
  [237]=>
  float(-828143.01)
  [238]=>
  float(-2194331.77)
  [239]=>
  float(-672364.53)
  [240]=>
  float(2110799.71)
  [241]=>
  float(5562174.13)
  [242]=>
  float(6602044.66)
  [243]=>
  float(6517111.7)
  [244]=>
  float(8460210.02)
  [245]=>
  float(6131504.2)
  [246]=>
  float(3420007.13)
  [247]=>
  float(3797285.97)
  [248]=>
  float(3323814.24)
  [249]=>
  float(1868650.03)
  [250]=>
  float(-192274.21)
  [251]=>
  float(-972559.43)
}