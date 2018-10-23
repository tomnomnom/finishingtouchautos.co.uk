<h2>Contact</h2>

<dl>
    <dt>Tel:</dt>
    <dd>01274 634045</dd>

    <dt>Leigh:</dt>
    <dd>07713 254199</dd>

    <dt>Address:</dt>
    <dd>
        <div>Unit 10</div>
        <div>Victoria Road Industrial Estate</div>
        <div>Eccleshill</div>
        <div>Bradford</div>
        <div>BD2 2DD</div>
    </dd>
</dl>

<h2>Map</h2>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:500px;width:100%;">
    <div id="gmap_canvas" style="height:500px;width:100%;"></div>
    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    <a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">theme circle</a>
</div>
<script type="text/javascript">
    function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(53.8192013,-1.7217805999999882),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(53.8192013, -1.7217805999999882)});infowindow = new google.maps.InfoWindow({content:"<b>Finishing Touch Autos</b><br/>Unit 10, Victoria Road Industrial Estate<br/>BD2 2DD Bradford" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>
