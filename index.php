<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery
/jquery-1.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/social-icons.css">
    <link rel="stylesheet" href="assets/css/ebook-style.css">
    <link rel="stylesheet" href="css/wenjuan.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery
/jquery-1.4.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript">
        window.onload=ie;
        function ie()
        {
            //alert("ok");
            if(!document.getElementsByClassName)//判断浏览器是否支持这个方法
            {
                document.getElementsByClassName=function(cname){
                    var selected=new Array();
                    var alltag=document.getElementsByTagName("*");//获取所有标签
                    for(var i=0;i<alltag.length;i++)
                    {
                        var t=alltag[i];
                        alert(t.className);
                        if(t.className==cname)    //比较标签的class与所要查找的class是否相同
                        {
                            selected.push(t);          //将相同的存入数组
                        }
                    }
                    return selected;
                }
            }
        }
    </script>

    <script type="text/javascript">
        function ok()
        {
            var list=document.getElementsByClassName('question');
            //var value=$('input:radio[name="sex"]:checked').val();
            //var value=$('input:radio:checked').val();
            var value="";
            for( var i= 0,len=list.length; i<len; i++){
                var title=list[i].childNodes[1].innerText;
                //var choice=list[i].childNodes[1].
                var name1=list[i].childNodes[3].childNodes[1].name;
                var ss=  "input:radio[name="+list[i].childNodes[3].childNodes[1].name+"]:checked";
                var able=$(ss);

                if(able.length==0){
                    alert("input more");
                    break;
                }else{
                    var temp=$(ss).val();
                    value+=temp;
                }
            }

            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: {"name":value}

            });
        }

    </script>

    <script type="text/javascript">


        function getcity()
        {
            var province=document.getElementsByClassName("province")[0].value;
            var provincenode=document.getElementsByClassName("province");
            var city=document.getElementsByClassName("city") ;
            var provincecity=document.getElementsByClassName("province")[0].selectedIndex -1;
            var citylist=[
                ["北京"],
                ["上海"],
                ["天津"],
                ["重庆"],
                ["石家庄","唐山","秦皇岛","邯郸","邢台","保定","张家口","承德","沧州","廊坊","衡水"],
                ["太原","大同","阳泉","长治","晋城","朔州","晋中","运城","忻州","临汾","吕梁"],
                ["呼和浩特","包头","乌海","赤峰","通辽","鄂尔多斯","呼伦贝尔","巴彦淖尔","乌兰察布","兴安","锡林郭勒","阿拉善"],
                ["沈阳","大连","鞍山","抚顺","本溪","丹东","锦州","营口","阜新","辽阳","盘锦","铁岭","朝阳","葫芦岛"],
                ["长春","吉林","四平","辽源","通化","白山","松原","白城","延边"],
                ["哈尔滨","齐齐哈尔","鸡西","鹤岗","双鸭山","大庆","伊春","佳木斯","七台河","牡丹江","黑河","绥化","大兴安岭"],
                ["南京","无锡","徐州","常州","苏州","南通","连云港","淮安","盐城","扬州","镇江","泰州","宿迁"],
                ["杭州","宁波","温州","嘉兴","湖州","绍兴","金华","衢州","舟山","台州","丽水"],
                ["合肥","芜湖","蚌埠","淮南","马鞍山","淮北","铜陵","安庆","黄山","滁州","阜阳","宿州","巢湖","六安","亳州","池州","宣城"],
                ["福州","厦门","莆田","三明","泉州","漳州","南平","龙岩","宁德"],
                ["南昌","景德镇","萍乡","九江","新余","鹰潭","赣州","吉安","宜春","抚州","上饶"],
                ["济南","青岛","淄博","枣庄","东营","烟台","潍坊","威海","济宁","泰安","日照","莱芜","临沂","德州","聊城","滨州","菏泽"],
                ["郑州","开封","洛阳","平顶山","焦作","鹤壁","新乡","安阳","濮阳","许昌","漯河","三门峡","南阳","商丘","信阳","周口","驻马店"],
                ["武汉","黄石","襄樊","十堰","荆州","宜昌","荆门","鄂州","孝感","黄冈","咸宁","随州","恩施"],
                ["长沙","株洲","湘潭","衡阳","邵阳","岳阳","常德","张家界","益阳","郴州","永州","怀化","娄底","湘西"],
                ["广州","深圳","珠海","汕头","韶关","佛山","江门","湛江","茂名","肇庆","惠州","梅州","汕尾","河源","阳江","清远","东莞","中山","潮州","揭阳","云浮"],
                ["南宁","柳州","桂林","梧州","北海","防城港","钦州","贵港","玉林","百色","贺州","河池","来宾","崇左"],
                ["海口","三亚"],
                ["成都","自贡","攀枝花","泸州","德阳","绵阳","广元","遂宁","内江","乐山","南充","宜宾","广安","达州","眉山","雅安","巴中","资阳","阿坝","甘孜","凉山"],
                ["贵阳","六盘水","遵义","安顺","铜仁","毕节","黔西南","黔东南","黔南"],
                ["昆明","曲靖","玉溪","保山","昭通","丽江","普洱","临沧","文山","红河","西双版纳","楚雄","大理","德宏","怒江","迪庆"],
                ["拉萨","昌都","山南","日喀则","那曲","阿里","林芝"],
                ["西安","铜川","宝鸡","咸阳","渭南","延安","汉中","榆林","安康","商洛"],
                ["兰州","嘉峪关","金昌","白银","天水","武威","张掖","平凉","酒泉","庆阳","定西","陇南","临夏","甘南"],
                ["西宁","海东","海北","黄南","海南","果洛","玉树","海西"],
                ["银川","石嘴山","吴忠","固原","中卫"],
                ["乌鲁木齐","克拉玛依","吐鲁番","哈密","和田","阿克苏","喀什","克孜勒苏柯尔克孜","巴音郭楞蒙古","昌吉","博尔塔拉蒙古","伊犁哈萨克","塔城","","","阿勒泰"]

            ];
            var provincecitylist=citylist[provincecity];
            city.length=1;
            for(var i=0;i<provincecitylist.length;i++){
                city[0][i+1]=new Option(provincecitylist[i],provincecitylist[i]);
            }

        }

        function getschool(city)
        {
            var cityname=city.value;
            var schoollist;
            switch(cityname)
            {
                case "银川":
                    schoollist=["银川一中","银川三中","银川十四中","银川十八中"];
                    break;
                default:
                    schoollist=["尚未开始"];
                    break;
            }

            var school=document.getElementsByClassName("school");
            school.length=1;
            for(var i=0;i<schoollist.length;i++){
                school[0][i+1]=new Option(schoollist[i],schoollist[i]);
            }

        }

        function goto()
        {
            var school=document.getElementsByClassName("school")[0].value;
            var schoolurl="";
            switch(school){
                case "银川一中":
                    schoolurl="provience/ningxia/yinchuan/index.html";
                    break;
                case "notavailable":
                    schoolurl="";
                    break;
            }
            if(schoolurl!="")
            {
                window.location.href=schoolurl;
            }else{
                alert("该省份学校尚未开始考评，敬请期待");
            }
        }
    </script>
</head>


<body>

<div class="side">
    <div class="info">
        <div class="controls">
            <select name="province" class="province" onchange="getcity()">
                <option value="">选择省份/直辖市</option>
                <option value="beijing">北京</option>
                <option value="shanghai">上海</option>
                <option value="tianjing">天津</option>
                <option value="chongqin">重庆</option>
                <option value="hebei">河北</option>
                <option value="shanxi">山西</option>
                <option value="neimenggu">内蒙古</option>
                <option value="liaoning">辽宁</option>
                <option value="jilin">吉林</option>
                <option value="heilongjiang">黑龙江</option>
                <option value="jiangsu">江苏</option>
                <option value="zhejiang">浙江</option>
                <option value="anhui">安徽</option>
                <option value="fujian">福建</option>
                <option value="jiangxi">江西</option>
                <option value="shandong">山东</option>
                <option value="henan">河南</option>
                <option value="hebei">湖北</option>
                <option value="hunan">湖南</option>
                <option value="guangdong">广东</option>
                <option value="shanxi">广西</option>
                <option value="henan">海南</option>
                <option value="sichuan">四川</option>
                <option value="guizhou">贵州</option>
                <option value="yunnan">云南</option>
                <option value="xizang">西藏</option>
                <option value="shanxi">陕西</option>
                <option value="gansu">甘肃</option>
                <option value="qinghai">青海</option>
                <option value="ningxia">宁夏</option>
                <option value="xinjiang">新疆</option>

            </select>
            <select name="city" class="city" onchange="getschool(this)">
                <option value="">选择省份/直辖市</option>


            </select>
            <select name="school" class="school">
                <option value="">选择学校</option>
            </select>
        </div>
        <div class="block">
            <div class="controls">
                <button class="btn btn-success" onclick="goto()">Button</button>
            </div>
        </div>

    </div>
</div>


</body>
