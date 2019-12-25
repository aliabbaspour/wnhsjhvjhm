@if($page_name == 'verify')
    @php($step = 2)
@elseif($page_name == 'startup')
    @php($step = 3)
@elseif($page_name == 'team')
    @php($step = 4)
@elseif($page_name == 'uploads')
    @php($step = 5)
@elseif($page_name == 'presentation')
    @php($step = 6)
@elseif($page_name == 'finish')
    @php($step = 7)
@else
    @php($step = 1)
@endif
<div id="steps">
    <ul>
        <li><div class="step @if($step == 1) {{"active"}} @endif" data-desc="آغاز ثبت نام" align="">1</div></li>
        <li><div class="step @if($step == 2) {{"active"}} @endif" data-desc="اعتبارسنجی" align="">2</div></li>
        <li><div class="step @if($step == 3) {{"active"}} @endif" data-desc="معرفی استارتاپ" align="">3</div></li>
        <li><div class="step @if($step == 4) {{"active"}} @endif" data-desc="اطلاعات تیم" align="">4</div></li>
        <li><div class="step @if($step == 5) {{"active"}} @endif" data-desc="معرفی ویدئویی" align="">5</div></li>
        <li><div class="step @if($step == 6) {{"active"}} @endif" data-desc="پیچ دک" align="">6</div></li>
        <li><div class="step @if($step == 7) {{"active"}} @endif" data-desc="تایید نهایی" align="">7</div></li>
    </ul>
</div>

<script>
document.addEventListener("DOMContentLoaded", function(e) {

    let pageUrl =  window.location.pathname;
    let path = pageUrl.replace(/\\|\//g, '');
    let urlStartup = pageUrl.substr(pageUrl.indexOf('startup'));
    let urlTeam = pageUrl.substr(pageUrl.indexOf('team'));
    let urlUploads = pageUrl.substr(pageUrl.indexOf('uploads'));
    let urlPresentation = pageUrl.substr(pageUrl.indexOf('presentation'));
    if(urlStartup || urlTeam || urlUploads || urlPresentation){
        let section = document.getElementById("section-step");
        let form = section.getElementsByTagName("form").item(0);
        let es = form.elements;
        let btn = form.getElementsByTagName('button').item(0);
        // console.log(es);
        let result = [];
        let n = 0;
        for (let i=es.length >>> 0; i--;){
            if(es[i].tagName == "TEXTAREA" || es[i].tagName == "INPUT" || es[i].tagName == "SELECT"){
                result[i] = es[i];
                let prev = result[i].value;
                result[i].onchange = function(v){
                    if(prev != result[i].value){
                        es[i].tagName == "INPUT" ? es[i].tagName.value = v : '';
                        n++;
                    }

                };


            }
        }

        btn.onclick = function () {
        }

    }
});


function findParameter(parameter) {

    var result = null;
    tmp = [];
    location.search.substr(1)
        .split("&").forEach(function (item) {
            tmp = item.split("=");
            if(tmp[0] === parameter) result = decodeURIComponent(tmp[1]);
    });
    return result;
}


</script>
