<html>
<head>
<title></title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="/gishome/templates/atlanta1/css/template_css.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
td.notes {text-align:left; font-family:verdana,arial,helvetica; font-size:11; font-weight:400;}
-->
</style>
<script language="javascript">
function openMap(sel)
{
	docid = sel.options[sel.selectedIndex].value;

	window.open("http://gis.atlantaga.gov/apps/doc_archive/get.php?doc_id="+docid,"","");
}
</script>

</head>
<body style="background-color:#ffffff;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td colspan="2" class="banner">
		<img style="float:right;" src="/gishome/images/gishome_right.png"><img src="/gishome/images/gishome.gif" border="0">
	</td>
	</td>
</tr>
<tr>
	<td class="lower-band" colspan="2" height="18px">
		<table width="100%" style="background:url(/gishome/images/topnav_bg.gif) repeat-x 0 0 #FFF;">
			<tr>
				
				<td align="right">
					<table cellpadding="0" cellspacing="0" class="moduletable-nav">
						<tr>
							<td>
								<table width="100%" border="0" cellpadding="0" cellspacing="1">
									<tr>
										<td nowrap="nowrap">
											<a href="/gishome/index.php" target="_top" class="mainlevel-nav" >Home</a>
											<a href="/gishome/index.php?option=com_contact&amp;Itemid=3" target="_top"  class="mainlevel-nav" >Contact Us</a>
											<a href="/gishome/index.php?option=com_search&amp;Itemid=5" target="_top"  class="mainlevel-nav" >Search</a>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
<span style="position:relative; top:12px; left:30px; text-align:left; color:#000000;" class="title">Lot Boundary Maps</span>
<!--<div style="font-family:arial,helvetica; font-size:8pt; position:absolute; top:118px; left:40px; text-align:left; color:#aa6666;"><a href="index.html">Use Index Map</a></div>
<div class="page_subheader" style="position:absolute; top:152px; left:40px; text-align:left; color:#aa6666;">Search by Property</div>
<div align="left" style="position:absolute; top:168px; left:40px; padding:10px; width:350px; height:300px; border:1px solid #aaaaaa;">
<form name="property_search" method="post" action="results.php">
<br><span style="font-family:arial,helvetica; font-size:8pt">Enter <span style="text-decoration:underline";>one</span> of the following to find the zoning map for a property:</span><br><br>
<div style="margin-left:20px;">
<span class="page_subsubheader">Address</span><br>
<input type="text" name="address" size="26"><br>
<span class="example">Example: 68 Mitchell</span><br>
<br>
<span class="page_subsubheader">Parcel ID</span><br>
<input type="text" name="pin" size="16"><br>
<span class="example">Example: 14 00770010044</span><br>
<br>
<span class="page_subsubheader">Owner</span><br>
<input type="text" name="owner" size="26"><br>
<span class="example">Example: Joe Brown</span><br>
<br>
<input type="submit" name="action" value="go" style="border-style:groove">
</div>
</form>
</div>-->
<div class="page_subheader" style="position:absolute; top:152px; left:100px; text-align:left; color:#aa6666;">Select a land lot to view the corresponding lot boundary map:</div>
<div align="left" style="position:absolute; top:168px; left:100px; padding:10px; width:300px; height:300px; border:0px solid #aaaaaa;">
<form name="landlot_search" method="post" action="results.php">
<!--<br><span style="font-family:arial,helvetica; font-size:8pt">Select a land lot to view the corresponding lot boundary map:</span><br><br>-->
<div style="margin-left:20px;">
				<span class="page_subsubheader">District 14</span>&nbsp;&nbsp;
				<select name="dist14" onChange="openMap(this)";>
				<option selected></option>
							<option value="1118">1</option>
						<option value="1116">2</option>
						<option value="1114">3</option>
						<option value="1112">4</option>
						<option value="1111">5</option>
						<option value="1110">6</option>
						<option value="1108">7</option>
						<option value="1106">8</option>
						<option value="1105">9</option>
						<option value="1104">10</option>
						<option value="777">11</option>
						<option value="1103">12</option>
						<option value="1102">13</option>
						<option value="1101">14</option>
						<option value="4115">15</option>
						<option value="1098">16</option>
						<option value="1097">17</option>
						<option value="1096">18</option>
						<option value="4225">19</option>
						<option value="4114">20</option>
						<option value="1093">21</option>
						<option value="1092">22</option>
						<option value="1091">23</option>
						<option value="1090">24</option>
						<option value="1088">25</option>
						<option value="1087">26</option>
						<option value="1086">27</option>
						<option value="1084">28</option>
						<option value="1085">29</option>
						<option value="1083">30</option>
						<option value="1082">31</option>
						<option value="1081">32</option>
						<option value="1080">33</option>
						<option value="1079">34</option>
						<option value="1078">35</option>
						<option value="1077">36</option>
						<option value="1076">37</option>
						<option value="1074">38</option>
						<option value="1072">39</option>
						<option value="1071">40</option>
						<option value="1070">41</option>
						<option value="4128">42</option>
						<option value="1068">43</option>
						<option value="1067">44</option>
						<option value="1066">45</option>
						<option value="4036">46</option>
						<option value="4702">47</option>
						<option value="1063">48</option>
						<option value="1062">49</option>
						<option value="1061">50</option>
						<option value="1058">51</option>
						<option value="1056">52</option>
						<option value="4703">53</option>
						<option value="1055">54</option>
						<option value="1054">55</option>
						<option value="1053">56</option>
						<option value="1051">57</option>
						<option value="1050">58</option>
						<option value="1049">59</option>
						<option value="1048">60</option>
						<option value="1047">61</option>
						<option value="1046">62</option>
						<option value="1045">63</option>
						<option value="1044">64</option>
						<option value="1043">65</option>
						<option value="850">66</option>
						<option value="849">67</option>
						<option value="848">68</option>
						<option value="847">69</option>
						<option value="3849">70</option>
						<option value="845">71</option>
						<option value="843">72</option>
						<option value="841">73</option>
						<option value="839">74</option>
						<option value="837">75</option>
						<option value="835">76</option>
						<option value="833">77</option>
						<option value="831">78</option>
						<option value="827">79</option>
						<option value="825">80</option>
						<option value="823">81</option>
						<option value="819">82</option>
						<option value="817">83</option>
						<option value="815">84</option>
						<option value="813">85</option>
						<option value="811">86</option>
						<option value="809">87</option>
						<option value="807">88</option>
						<option value="805">89</option>
						<option value="803">90</option>
						<option value="801">91</option>
						<option value="799">92</option>
						<option value="797">93</option>
						<option value="795">94</option>
						<option value="793">100</option>
						<option value="791">101</option>
						<option value="789">102</option>
						<option value="787">103</option>
						<option value="781">104</option>
						<option value="779">105</option>
						<option value="785">106</option>
						<option value="769">108</option>
						<option value="775">109</option>
						<option value="773">110</option>
						<option value="771">111</option>
						<option value="767">112</option>
						<option value="765">113</option>
						<option value="763">114</option>
						<option value="761">115</option>
						<option value="759">116</option>
						<option value="757">117</option>
						<option value="755">118</option>
						<option value="753">119</option>
						<option value="751">120</option>
						<option value="749">121</option>
						<option value="747">122</option>
						<option value="745">127</option>
						<option value="745">128</option>
						<option value="729">129</option>
						<option value="728">135</option>
						<option value="727">136</option>
						<option value="726">137</option>
						<option value="725">138</option>
						<option value="724">139</option>
						<option value="723">140</option>
						<option value="721">141</option>
						<option value="720">142</option>
						<option value="719">143</option>
						<option value="718">144</option>
						<option value="717">145</option>
						<option value="716">146</option>
						<option value="715">147</option>
						<option value="714">148</option>
						<option value="713">149</option>
						<option value="712">150</option>
						<option value="711">151</option>
						<option value="710">152</option>
						<option value="4113">153</option>
						<option value="708">154</option>
						<option value="707">167</option>
						<option value="706">168</option>
						<option value="705">169</option>
						<option value="704">170</option>
						<option value="703">171</option>
						<option value="702">172</option>
						<option value="701">173</option>
						<option value="699">174</option>
						<option value="698">175</option>
						<option value="697">176</option>
						<option value="696">177</option>
						<option value="695">178</option>
						<option value="694">179</option>
						<option value="700">180</option>
						<option value="693">181</option>
						<option value="4227">181</option>
						<option value="692">182</option>
						<option value="691">183</option>
						<option value="690">184</option>
						<option value="689">185</option>
						<option value="688">186</option>
						<option value="687">199</option>
						<option value="686">200</option>
						<option value="685">201</option>
						<option value="684">202</option>
						<option value="683">203</option>
						<option value="682">204</option>
						<option value="681">205</option>
						<option value="680">206</option>
						<option value="679">207</option>
						<option value="678">208</option>
						<option value="677">209</option>
						<option value="676">210</option>
						<option value="675">211</option>
						<option value="674">212</option>
						<option value="673">213</option>
						<option value="672">214</option>
						<option value="671">215</option>
						<option value="670">216</option>
						<option value="669">217</option>
						<option value="668">218</option>
						<option value="667">219</option>
						<option value="666">227</option>
						<option value="665">228</option>
						<option value="664">229</option>
						<option value="663">230</option>
						<option value="662">231</option>
						<option value="656">232</option>
						<option value="655">233</option>
						<option value="654">234</option>
						<option value="653">235</option>
						<option value="661">236</option>
						<option value="660">237</option>
						<option value="659">238</option>
						<option value="657">239</option>
						<option value="1147">240</option>
						<option value="743">241</option>
						<option value="742">242</option>
						<option value="741">243</option>
						<option value="740">244</option>
						<option value="739">245</option>
						<option value="738">246</option>
						<option value="737">247</option>
						<option value="736">248</option>
						<option value="735">249</option>
						<option value="734">250</option>
						<option value="4116">251</option>
						<option value="732">252</option>
						<option value="731">253</option>
						<option value="730">254</option>
								</select><br><br>
									<span class="page_subsubheader">District 14F</span>&nbsp;&nbsp;
				<select name="dist14F" onChange="openMap(this)";>
				<option selected></option>
							<option value="844">3</option>
						<option value="840">4</option>
						<option value="4248">5</option>
						<option value="836">6</option>
						<option value="834">7</option>
						<option value="828">8</option>
						<option value="826">9</option>
						<option value="824">10</option>
						<option value="822">11</option>
						<option value="820">12</option>
						<option value="818">13</option>
						<option value="3767">14</option>
						<option value="816">15</option>
						<option value="814">16</option>
						<option value="810">17</option>
						<option value="808">18</option>
						<option value="806">24</option>
						<option value="804">26</option>
						<option value="800">27</option>
						<option value="4112">28</option>
						<option value="796">29</option>
						<option value="794">30</option>
						<option value="802">31</option>
						<option value="792">32</option>
						<option value="788">33</option>
						<option value="780">34</option>
						<option value="784">35</option>
						<option value="782">36</option>
						<option value="17186">37</option>
						<option value="17188">37</option>
						<option value="17189">37</option>
						<option value="17187">39</option>
						<option value="17190">39</option>
						<option value="778">40</option>
						<option value="776">41</option>
						<option value="790">42</option>
						<option value="772">43</option>
						<option value="768">44</option>
						<option value="774">45</option>
						<option value="762">46</option>
						<option value="4111">47</option>
						<option value="4110">48</option>
						<option value="760">49</option>
						<option value="758">50</option>
						<option value="754">51</option>
						<option value="756">58</option>
						<option value="760">59</option>
						<option value="4109">60</option>
						<option value="4108">61</option>
						<option value="4107">62</option>
						<option value="750">63</option>
						<option value="748">64</option>
						<option value="746">65</option>
						<option value="744">66</option>
						<option value="4236">79</option>
						<option value="4237">80</option>
								</select><br><br>
									<span class="page_subsubheader">District 15</span>&nbsp;&nbsp;
				<select name="dist15" onChange="openMap(this)";>
				<option selected></option>
							<option value="947">142</option>
						<option value="950">143</option>
						<option value="944">144</option>
						<option value="941">145</option>
						<option value="1148">146</option>
						<option value="935">147</option>
						<option value="911">171</option>
						<option value="932">174</option>
						<option value="932">175</option>
						<option value="929">176</option>
						<option value="926">177</option>
						<option value="923">178</option>
						<option value="920">179</option>
						<option value="917">180</option>
						<option value="914">181</option>
						<option value="911">182</option>
						<option value="908">203</option>
						<option value="905">204</option>
						<option value="902">205</option>
						<option value="899">206</option>
						<option value="896">207</option>
						<option value="893">208</option>
						<option value="890">209</option>
						<option value="887">210</option>
						<option value="884">211</option>
						<option value="881">212</option>
						<option value="878">237</option>
						<option value="875">238</option>
						<option value="872">239</option>
						<option value="869">240</option>
						<option value="863">241</option>
						<option value="860">242</option>
								</select><br><br>
									<span class="page_subsubheader">District 17</span>&nbsp;&nbsp;
				<select name="dist17" onChange="openMap(this)";>
				<option selected></option>
							<option value="3815">1</option>
						<option value="1011">2</option>
						<option value="1009">3</option>
						<option value="1007">4</option>
						<option value="1005">5</option>
						<option value="1003">6</option>
						<option value="1001">7</option>
						<option value="997">8</option>
						<option value="995">9</option>
						<option value="993">10</option>
						<option value="991">11</option>
						<option value="989">12</option>
						<option value="3977">13</option>
						<option value="985">42</option>
						<option value="983">43</option>
						<option value="981">44</option>
						<option value="979">45</option>
						<option value="977">46</option>
						<option value="975">47</option>
						<option value="973">48</option>
						<option value="971">49</option>
						<option value="969">50</option>
						<option value="967">51</option>
						<option value="965">52</option>
						<option value="963">53</option>
						<option value="961">54</option>
						<option value="959">55</option>
						<option value="957">56</option>
						<option value="954">57</option>
						<option value="952">58</option>
						<option value="949">59</option>
						<option value="946">60</option>
						<option value="943">61</option>
						<option value="940">62</option>
						<option value="937">63</option>
						<option value="934">64</option>
						<option value="931">65</option>
						<option value="928">95</option>
						<option value="925">96</option>
						<option value="922">97</option>
						<option value="919">98</option>
						<option value="916">99</option>
						<option value="913">100</option>
						<option value="910">101</option>
						<option value="907">102</option>
						<option value="904">103</option>
						<option value="901">104</option>
						<option value="4037">105</option>
						<option value="895">106</option>
						<option value="892">107</option>
						<option value="3986">108</option>
						<option value="886">109</option>
						<option value="883">110</option>
						<option value="880">111</option>
						<option value="877">112</option>
						<option value="3987">113</option>
						<option value="871">114</option>
						<option value="868">115</option>
						<option value="4039">116</option>
						<option value="862">117</option>
						<option value="3988">119</option>
						<option value="4041">120</option>
						<option value="4042">136</option>
						<option value="3989">137</option>
						<option value="1150">138</option>
						<option value="854">139</option>
						<option value="851">140</option>
						<option value="1042">141</option>
						<option value="1041">142</option>
						<option value="1040">143</option>
						<option value="1039">144</option>
						<option value="1038">146</option>
						<option value="1037">147</option>
						<option value="1036">148</option>
						<option value="1035">149</option>
						<option value="1034">150</option>
						<option value="1033">151</option>
						<option value="1032">152</option>
						<option value="1031">153</option>
						<option value="1030">154</option>
						<option value="1029">155</option>
						<option value="1028">156</option>
						<option value="1027">157</option>
						<option value="1026">158</option>
						<option value="1025">159</option>
						<option value="1024">160</option>
						<option value="1023">161</option>
						<option value="4040">177</option>
						<option value="1022">178</option>
						<option value="1021">179</option>
						<option value="1020">180</option>
						<option value="1019">181</option>
						<option value="1018">182</option>
						<option value="1017">183</option>
						<option value="1016">184</option>
						<option value="1015">185</option>
						<option value="1014">186</option>
						<option value="1012">187</option>
						<option value="1010">188</option>
						<option value="1008">189</option>
						<option value="1006">190</option>
						<option value="1004">191</option>
						<option value="1002">192</option>
						<option value="1000">193</option>
						<option value="998">194</option>
						<option value="996">195</option>
						<option value="994">196</option>
						<option value="992">197</option>
						<option value="4038">198</option>
						<option value="4028">199</option>
						<option value="986">200</option>
						<option value="984">201</option>
						<option value="3990">202</option>
						<option value="980">213</option>
						<option value="978">214</option>
						<option value="976">215</option>
						<option value="974">216</option>
						<option value="972">217</option>
						<option value="4030">218</option>
						<option value="968">219</option>
						<option value="966">220</option>
						<option value="964">221</option>
						<option value="962">222</option>
						<option value="960">223</option>
						<option value="958">224</option>
						<option value="956">225</option>
						<option value="953">226</option>
						<option value="951">227</option>
						<option value="948">228</option>
						<option value="945">229</option>
						<option value="942">230</option>
						<option value="939">231</option>
						<option value="4126">233</option>
						<option value="930">234</option>
						<option value="927">235</option>
						<option value="924">236</option>
						<option value="930">240</option>
						<option value="921">243</option>
						<option value="918">244</option>
						<option value="915">245</option>
						<option value="912">246</option>
						<option value="909">247</option>
						<option value="906">248</option>
						<option value="903">249</option>
						<option value="900">250</option>
						<option value="897">251</option>
						<option value="894">252</option>
						<option value="891">253</option>
						<option value="888">254</option>
						<option value="885">255</option>
						<option value="882">256</option>
						<option value="879">257</option>
						<option value="876">258</option>
						<option value="873">259</option>
						<option value="870">260</option>
						<option value="3971">261</option>
						<option value="864">262</option>
						<option value="861">263</option>
						<option value="885">264</option>
						<option value="857">266</option>
						<option value="855">267</option>
						<option value="852">268</option>
								</select><br><br>
									<span class="page_subsubheader">District 18</span>&nbsp;&nbsp;
				<select name="dist18" onChange="openMap(this)";>
				<option selected></option>
							<option value="859">1</option>
						<option value="856">55</option>
						<option value="4127">56</option>
					</select><br><br>
		<!--<input type="submit" name="action" value="go" style="border-style:groove">-->
</div>
</form>
</div>
</body>
</html>

