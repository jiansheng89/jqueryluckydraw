<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="en">
<meta name="author" content="Leon Zhuang">
<title>2010年会抽奖 leon.nerr@gmail.com</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquery.tools.min.js"></script>
<script type="text/javascript" src="jquery.timers.js"></script>
<script type="text/javascript" src="getJsonData_2.php"></script>
<script type="text/javascript"><!--
		var drawdata = ["\u674e\u5b87\u6625","\u5468\u7b14\u7545","\u5b59\u71d5\u59ff","\u5c1a\u96ef\u5a55","\u5468\u6770\u4f26","\u5389\u5a1c","\u4f55\u6d01","\u5f20\u9753\u9896","\u8bb8\u98de","\u8521\u4f9d\u6797","\u5434\u5c0a","\u9a6c\u5929\u5b87","\u5218\u529b\u626c","\u6797\u4fca\u6770","\u80e1\u7075","\u8c22\u9706\u950b","s.h.e","\u5218\u6d9b","\u5218\u4ea6\u83f2","\u5b8b\u6653\u6ce2","\u5f20\u542b\u97f5","\u660e\u9053","\u9ec4\u96c5\u8389","\u6f58\u73ae\u67cf","twins","\u4e94\u6708\u5929","\u8427\u4e9a\u8f69","\u5f20\u97f6\u6db5","\u8d75\u96c5\u829d","\u738b\u5fc3\u51cc","\u5e08\u6d0b","\u738b\u5578\u5764","\u9ad8\u5a05\u5a9b","\u8d75\u8587","\u708e\u4e9a\u7eb6","reborn","\u7f57\u5fd7\u7965","\u4fde\u601d\u8fdc","\u859b\u4e4b\u8c26","\u5f20\u6653\u6668","\u6797\u4f9d\u6668","\u5434\u5efa\u98de","\u6797\u5cf0","\u90d1\u5143\u7545","\u6768\u4e1e\u7433","\u8c2d\u7ef4\u7ef4","\u9b4f\u658c","\u9b4f\u4f73\u5e86","\u738b\u529b\u5b8f","\u9648\u4e54\u6069","ella","\u738b\u7ecd\u4f1f","\u6797\u5fd7\u9896","\u738b\u83f2","\u5f20\u56fd\u8363","\u5deb\u8fea\u6587","\u9648\u6167\u7433","\u5b59\u827a\u5fc3","\u5468\u6e1d\u6c11","\u8521\u5353\u598d","\u541b\u541b","\u6881\u548f\u742a","\u80e1\u6b4c","beyond","\u4efb\u8d24\u9f50","\u6c64\u52a0\u4e3d","\u53f6\u7487","\u6881\u9759\u8339","183club","\u5f20\u5b66\u53cb","\u5468\u534e\u5065","5566","\u91d1\u838e","hebe","\u5f20\u67cf\u829d","\u5f20\u4e9a\u98de","\u97e9\u96ea","\u9648\u6021\u5ddd","\u5b59\u4fea","\u82cf\u6709\u670b","\u4f58\u8bd7\u66fc","\u9ece\u59ff","\u5411\u9f0e","\u7eaa\u654f\u4f73","\u5de9\u8d3a","\u8303\u51b0\u51b0","\u949f\u6c49\u826f","\u8d3e\u9759\u96ef","\u5bb9\u7956\u513f","\u5510\u5b81","\u5f20\u680b\u6881","\u664f\u83f2","\u6bdb\u65b9\u5706","\u7ae0\u5b50\u6021","\u9093\u5b81","\u5434\u5b97\u5baa","\u6d77\u9e23\u5a01","\u949f\u51ef","\u4e54\u7ef4\u6021","\u5b89\u4ee5\u8f69","\u5b89\u53c8\u742a","\u53e4\u5929\u4e50","\u9ec4\u5b97\u6cfd","\u8212\u7545","\u9648\u5955\u8fc5","\u540e\u5f26","\u5200\u90ce","\u5b59\u6960","\u8bb8\u73ae\u4f26","\u95eb\u59ae","\u53f6\u4e00\u831c","\u5218\u82e5\u82f1","\u5468\u661f\u9a70","\u90ed\u5bcc\u57ce","\u90d1\u79c0\u6587","\u5434\u5353\u7fb2","\u8d3a\u519b\u7fd4","\u9676\u5586","\u738b\u6b23\u5982","\u5ba3\u8431","\u9093\u4e3d\u541b","\u6c99\u6ea2","\u515a\u5b81","\u5f90\u7199\u5a9b","\u674e\u7389\u521a","\u9648\u5764","\u5f20\u667a\u9716","\u674e\u6e58","\u8fb0\u4ea6\u5112","\u674e\u66fc","\u5468\u4f20\u96c4","\u674e\u8fde\u6770","\u738b\u6770","\u8463\u6d01","\u6881\u671d\u4f1f","\u9ec4\u946b","\u80e1\u5f66\u658c","\u9ec4\u5723\u4f9d","\u6768\u5e42","\u8c22\u5a1c","\u674e\u667a\u6960","\u5f20\u4fe1\u54f2","\u7fbd\u6cc9","tank","\u9ece\u660e","\u9ec4\u4e49\u8fbe","\u5f20\u7131","\u6885\u8273\u82b3","\u5f20\u60e0\u59b9","\u738b\u8273","\u4f55\u6da6\u4e1c","\u5f6d\u4e8e\u664f","\u6768\u6021","\u674e\u739f","selina","\u9648\u597d","\u5510\u7b11","\u5149\u826f","\u90ed\u54c1\u8d85","\u5434\u5f66\u7956","\u4ed8\u9759","\u6797\u723d","\u90d1\u6e90","\u6768\u5343\u6866","\u4f55\u7085","\u8042\u8fdc","\u5f26\u5b50","\u53e4\u5de8\u57fa","\u5434\u5947\u9686","\u59da\u6668","\u970d\u5efa\u534e","\u5434\u514b\u7fa4","\u4f0a\u80fd\u9759","\u9648\u5c0f\u6625","\u5c71\u91ce","\u90d1\u5609\u9896","\u9093\u8d85","\u5f20\u4e00\u5c71","\u97e9\u771f\u771f","\u90d1\u4f0a\u5065","\u9633\u857e","\u9a6c\u5251\u7434","\u90ed\u5e05","\u6797\u9752\u971e","\u5b8b\u7956\u82f1","\u90a3\u82f1","\u66fe\u4e4b\u4e54","\u6210\u9f99","\u9648\u6653\u65ed","\u6797\u6b63\u82f1","\u963f\u675c","\u4e03\u6735\u82b1","\u970d\u601d\u71d5","\u674e\u5029","\u8bb8\u5dcd","\u8521\u5c11\u82ac","\u5362\u6d01\u4e91","\u5f90\u9759\u857e","\u4e8e\u6ce2","\u674e\u5c0f\u7490","\u674e\u5c0f\u9f99","\u5b59\u83f2\u83f2","energy","\u82cf\u6253\u7eff","\u963f\u6c81","\u674e\u514b\u52e4","sweety","\u9648\u952e\u950b","\u6734\u6811","\u8881\u6cc9","f4","\u848b\u52e4\u52e4","\u9648\u6d69\u6c11","\u9646\u6bc5","\u6731\u8335","\u90d1\u9756\u6587","\u5de9\u4fd0","\u502a\u8679\u6d01","\u9648\u7eee\u8d1e","\u5218\u5609\u73b2","\u5f6d\u4e3d\u5a9b","\u8d75\u8679\u4e54","\u8bb8\u6167\u6b23","\u7acb\u5a01\u5ec9","\u9648\u6653\u4e1c","\u7f57\u5609\u826f","\u5218\u70e8","\u738b\u51b0\u6d0b","\u4f5f\u5927\u4e3a","\u8212\u6dc7","\u6c6a\u6db5","\u5f20\u6770","\u7126\u6069\u4fca","\u55bb\u6069\u6cf0","\u674e\u7eaf","\u9093\u4e3d\u6b23","\u6c88\u4eba\u6770","\u5c0f\u864e\u961f","\u738b\u4ec1\u752b","\u5353\u4f9d\u5a77","\u963f\u4fe1","\u674e\u5609\u6b23","\u8bb8\u7ecd\u6d0b","\u91d1\u57ce\u6b66","\u66f9\u683c","\u4f0d\u4f70","\u5b59\u60a6","\u7a0b\u663e\u519b","\u5f20\u73ca\u73ca","\u9648\u6167\u5a34","\u7504\u5b50\u4e39","\u5468\u8fc5","\u5c0fs","\u7aa6\u667a\u5b54","\u8d39\u7389\u6e05","\u5468\u6167\u654f","\u5434\u658c","\u859b\u51ef\u742a","\u5218\u7ef4","\u516d\u6708","\u6797\u97e6\u541b","\u5b59\u8000\u5a01","\u6768\u4e39","\u6c88\u6653\u6d77","\u5f20\u66fc\u7389","\u90ed\u53ef\u76c8","\u8427\u8427","\u674e\u5a1c","\u5434\u6587\u749f","\u8d75\u672c\u5c71","\u738b\u5a9e","\u674e\u82e5\u5f64","\u738b\u831c","\u8881\u6210\u6770","\u6234\u4f69\u59ae","\u590f\u9896","\u66fe\u9ece","\u5b59\u7ea2\u96f7","hero","\u9ec4\u5955","\u5218\u54c1\u8a00","\u675c\u957f\u854a","\u91ca\u5c0f\u9f99","\u6768\u4e50\u4e50","\u82d7\u97f5\u6850","\u8303\u73ae\u742a","\u5f20\u9759\u521d","\u963f\u725b","\u536b\u5170","\u82d7\u4fa8\u4f1f","\u963f\u6851","\u83ab\u6587\u851a","\u6c88\u661f","\u4faf\u4f69\u5c91","\u8c22\u96c5\u96ef","\u738b\u5c0f\u4e2b","\u4fdd\u5251\u950b","\u5f20\u667a\u5c27","\u738b\u7ecd\u73cf","\u80e1\u9759","\u674e\u665f","\u9ec4\u65e5\u534e","\u738b\u84c9","\u5f20\u536b\u5065","\u9648\u65ed","\u66f9\u9a8f","\u8d3e\u9752","\u4efb\u66e6","\u7530\u9707","\u79e6\u5c9a","\u674e\u51b0\u51b0","\u90d1\u667a\u5316","\u8521\u5b9c\u81fb","\u5434\u542f\u534e","\u962e\u7ecf\u5929","\u5f20\u53ef\u9890","\u5eb9\u5b97\u5eb7","\u90b5\u4ef2\u8861","\u4fa7\u7530","\u90d1\u5e0c\u6021","\u9999\u9999","\u5f20\u6f9c\u6f9c","\u7f57\u5f00\u5143","\u5f20\u96e8\u751f","\u9648\u9053\u660e","\u675c\u6df3","\u4f59\u6587\u4e50","\u9ec4\u7acb\u884c","\u6e29\u78a7\u971e","\u6f58\u8fce\u7d2b","\u5927\u5f20\u4f1f","\u5434\u5efa\u8c6a","\u9648\u677e\u4f36","vae","\u66f9\u9896","\u6768\u96ea","\u738b\u7956\u8d24","\u8427\u8537","\u9648\u767e\u5f3a","\u674e\u8587\u8587","\u90ed\u7f8e\u7f8e","\u97e9\u7ea2","\u5f20\u5ead","\u6797\u7199\u857e","\u5929\u5fc3","\u6797\u5fd7\u70ab","\u9648\u67cf\u9716","\u7f57\u4e39","\u65b9\u6587\u5c71","\u5434\u9547\u5b87","\u963f\u6735","\u4f55\u7422\u8a00","\u76db\u8d85","\u5f90\u6000\u94b0","\u674e\u4e9a\u9e4f","\u9648\u7389\u83b2","\u54c8\u72d7\u5e2e","toro","gino","\u9648\u8fb0","\u6797\u5609\u6b23","\u6e29\u5146\u4f26","\u67cf\u96ea","\u9648\u7d2b\u51fd","\u674e\u541b\u519b","\u949f\u4e3d\u7f07","\u8d75\u9759\u6021","\u5434\u4eac","\u66fe\u5b9d\u4eea","\u8499\u5609\u6167","\u5f20\u5b87","\u8c2d\u6676","\u8463\u537f","\u9648\u5fb7\u5bb9","\u5f20\u5b50\u8431","\u54c1\u51a0","\u7c73\u96ea","\u5434\u79c0\u6ce2","\u5434\u4f69\u6148","\u738b\u82e5\u9e9f","\u8bb8\u8339\u82b8","\u7aa6\u552f","\u738b\u559c","\u90d1\u56fd\u9716","\u80e1\u6768\u6797","\u7fc1\u8679","\u6613\u6167","\u674e\u5c0f\u840c","\u53f6\u7389\u537f","\u5929\u4ed9mm","\u6881\u5c0f\u51b0","\u8521\u7434","dodolook","\u9648\u6570","\u4e54\u632f\u5b87","\u82cf\u6167\u4f26","\u9a6c\u82cf","\u6f58\u7f8e\u8fb0","tae","\u5468\u6d9b","\u6c5f\u534e","\u675c\u5fb7\u4f1f","\u674e\u745e","\u80e1\u5b9a\u6b23","\u6881\u51ef\u8482","\u9f50\u79e6","\u79e6\u6c49","\u767d\u51b0","\u7f57\u5927\u4f51","\u6c5f\u4e00\u71d5","\u9648\u7ea2","\u6731\u7433","\u5173\u4e4b\u7433","\u9ec4\u5f81","\u8521\u65fb\u4f51","\u9648\u9526\u9e3f","\u5468\u4e3d\u6dc7","\u5229\u667a","\u5353\u6587\u8431","\u6749\u7c7d\u4f3d","\u6768\u6dee","\u5f20\u827a\u8c0b","\u5f20\u7f8e\u5a1c","b.i.z","\u7530\u539f","\u8d75\u5a9b\u5a9b","\u8c22\u541b\u8c6a"];
    Array.prototype.remove=function(dx){
　　    if(isNaN(dx)||dx>this.length){return false;}
　　    for(var i=0,n=0;i<this.length;i++){
　　　      if(this[i]!=this[dx]){
　　　　　　    this[n++]=this[i];
　　　　    }
　　    }
　　    this.length-=1;
　  }
		function GetRnd(min,max){
        randnum = parseInt(Math.random()*(max-min+1));
        return randnum;
    }
		var arrData = new Array(); 
    function fillScroll(obj){
			  var countArr = $(obj).size();
				var arr = new Array();
				var d = '';
				//new data
				var i = 0;
				var idx;
				while(arr.length < countArr){
					  d = drawdata[GetRnd(0,drawdata.length-1)];
						idx = jQuery.inArray(d,arr);
						if(idx == -1){
							  arr[i] = d;
								arrData[i] = d;
								i++;
						}
				}
				//fill data
				i = 0;
				$(obj).each(function(){
						$(this).text(arr[i]);
						i++;
				});
    }
    $(document).ready(function(){
			  var s = 0; //滚动状态,同时只允许一个奖项滚动
				var f1 = 0;//完成状态,一个奖项结束后不允许再次滚动
				var f2 = 0;//完成状态
				var f3 = 0;//完成状态
				var rsArr = new Array();
        $(document).keyup(function(event){
						if(event.keyCode==13){
							  clearInterval(intervalID);
								var testind = '';
								var inde = 0;
								for(ind in arrData){
										inde = jQuery.inArray(arrData[ind],drawdata);
										if(inde > -1){
												drawdata.remove(inde);
										}	
								}
								arrData = [];
								s = 0;
						}else if(event.keyCode==49){
								if(s==0 && f1==0){
								    intervalID = setInterval("fillScroll('#1 tr > td')",1);
								    s = 1;f1 = 1;
								}
						}else if(event.keyCode==50){
								if(s==0 && f2<2){
									  var side = $('#2 tr > td:even').text();
										if(side.length>0){
												intervalID = setInterval("fillScroll('#2 tr > td:odd')",1);
										}else{
												intervalID = setInterval("fillScroll('#2 tr > td:even')",1);
										}
								    s = 1;f2++;
								}
						}else if(event.keyCode==51){
							  if(s==0 && f3==0){
								    intervalID = setInterval("fillScroll('#3 tr > td')",1);
								    s = 1;f3 = 1;
								}
						}else{
								
						}
        });
				//scroll div
        $("#result").scrollable({size: 1}).circular().navigator({ 
            naviItem: 'a', 
            activeClass: 'current' 
        });
    });       
//--></script>
</head>
<body>
<div class="main">
  <div id="title"><IMG SRC="title.png" title="Powered by IT Deptment"></div>
  <div id="result" class="transparent"> 
     <div class="items"> 
         <div class="rs"><h2>三等奖</h2>
            <div><center>
						    <table id="3" border="0" class="tab" style="width:98%">
								    <tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr><td></td><td></td><td></td></tr>
										<tr class="spec" align="center"><td colspan="3"></td></tr>
						    </table></center>
						</div>
         </div> 
         <div class="rs"><h2>二等奖</h2>
            <div><center>
						    <table id="2" border="0" class="tab" style="width:70%">
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr><td></td><td></td></tr>
										<tr class="spec"><td></td><td></td></tr>
						    </table>
						</div>
         </div> 
         <div class="rs"><h2>一等奖</h2>
            <div><center>
						    <table id="1" border="0" class="tab" style="width:33%">
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr><td></td></tr>
										<tr class="spec"><td></td></tr>
						    </table></center>
						</div>
         </div>
     </div> 
  </div>
</div>
</body>
</html>