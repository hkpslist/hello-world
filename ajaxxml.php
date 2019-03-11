<?php
header("ContentType:text/xml;charset=utf-8");
$str="<root><province name='湖南'><city>长沙</city><city>株洲</city><city>湘潭</city><city>邵阳</city><city>益阳</city><city>岳阳</city><city>怀化</city><city>娄底</city><city>常德</city><city>张家界</city></province><province name='湖北'><city>武汉</city><city>汉口</city><city>襄樊</city></province><province name='广西'><city>南宁</city><city>北海</city><city>柳州</city></province></root>";
echo htmlspecialchars($str);