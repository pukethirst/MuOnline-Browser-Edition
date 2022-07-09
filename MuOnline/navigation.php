<table cellspacing="1" id="navigation">
<tr><td><div id="navigation1">GAME MENU</div></td></tr>
<tr><td>
<div id="navigation2">
<ul><b>
<li><a class="nav_link" href="character.php">Characters</a></li>
<li><a href="map.php">Battle Locations</a></li>
<li><a href="inventory.php">Stats & Inventory</a></li>
<li><a href="chaos_machine.php">Special NPC's</a></li>
<li><a href="guild.php">Guild</a></li>
<li><a href="vault.php">Vault</a></li>
<li><a href="shop.php?id=lorencia1">NPC Shops</a></li>
<li><a href="pstore.php">Private Store</a></li>
<li><a href="market.php">Market</a></li>
<li><a href="view_items.php?id=1">Items Database</a></li>
<li style="border-bottom:none;"><a href="view_skills.php">Skills</a></li>
</ul>
</div></td></tr>
<?php
if(isset($navigation))
{
if($navigation=='shop')
{
echo <<<EOT
<tr><td></td></tr>
<tr><td><br/><div id="navigation1">NPC Shops</div></td></tr>
<tr><td>
<div id="navigation2">
<ul>
<li><a href="shop.php?id=lorencia1">Lumen the Barmaid</a></li>
<li><a href="shop.php?id=lorencia2">Hanzo the Blacksmith</a></li>
<li><a href="shop.php?id=lorencia3">Pasi the Mage</a></li>
<li><a href="shop.php?id=noria1">Elf Lala</a></li>
<li><a href="shop.php?id=noria2">Eo the Craftsman</a></li>
<li><a href="shop.php?id=elbeland1">Leah</a></li>
<li><a href="shop.php?id=elbeland2">Marseille</a></li>
<li><a href="shop.php?id=devias1">Isabel the Wizard</a></li>
<li><a href="shop.php?id=devias2">Zienna the Merchant</a></li>
<li style="border-bottom:none;"><a href="shop.php?id=devias3">Caren the Barmaid</a></li>
</ul>
</div></td></tr>
EOT;
}
if($navigation=='npc32')
{
echo <<<EOT
<tr><td></td></tr>
<tr><td><br/><div id="navigation1">Special NPCs</div></td></tr>
<tr><td>
<div id="navigation2">
<ul>
<li><a href="chaos_machine.php">Chaos Machine</a></li>
<li><a href="npc32.php?id=lahap">Lahap</a></li>
<li><a href="npc32.php?id=cblossom">Cherry Blossom Spirit</a></li>
<li><a href="npc32.php?id=osbourne">Goblin Osbourne</a></li>
<li style="border-bottom:none;"><a href="npc32.php?id=jerridon">Goblin Jerridon</a></li>
</ul>
</div></td></tr>
EOT;
}
}
echo '</table>';
//begin chat//
$logout = 0;
if(isset($_GET['action']))
{
if($_GET['action'] == 'logout')
$logout = 1;
}
if(isset($_SESSION['user_id']) && $logout != 1)
{
echo <<<EOT
<script type="text/javascript">
var to_stop_chat = 0;
var new_timer;
var new_timer1;
$(document).ready(function(){
function chat_process () {
    var clientmsg = $("#chat_input").val();
 if(clientmsg.length>0)
 {
    $.post("function.chat.php", {text: clientmsg},function(data) {
   $('#chat_overlay').html(data);
});
    $("#chat_input").attr("value", "");
to_stop_chat = 0;
clearTimeout(new_timer1);
clearTimeout(new_timer);
new_timer1 = setTimeout(function(){stop_chat()},300000);
new_timer = setTimeout(function(){load_chat_log()},9000);
 }
}
function load_chat_log () {
 if($("#call_chat").hasClass('show') && to_stop_chat < 1)
 {
  $.post("function.chat.php",function(data) {
     $('#chat_overlay').html(data);
  });
  setTimeout(function(){load_chat_log()},9000);
 }
}
function stop_chat () {
to_stop_chat = 1;
$('#chat_overlay').html('...inactive...');
}
$("#call_chat").click(function(){
 $("#chat").toggle(300, function(){
 $("#chat").css({ 'opacity' : 0.8 });
 });
 $(this).toggleClass("show");
if($(this).hasClass('show'))
{
 to_stop_chat = 0;
 clearTimeout(new_timer1);
 clearTimeout(new_timer);
 new_timer = setTimeout(function(){load_chat_log()},1000);
 new_timer1 = setTimeout(function(){stop_chat()},300000);
}
 return false;
});
$("#chat_submit").keypress(function(e) {
if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
chat_process();
return false;
}
});
$("#chat_submit").submit(function(e) {
chat_process();
return false;
});
});
</script>
EOT;
}
?>