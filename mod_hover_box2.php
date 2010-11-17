<?php
/**
* @version $Id: mod_hoverbox.php 2.0
* Anthony Olsen
* http://www.joomlabamboo.com
* @ based on Stu Nichols simple gallery.
* -------------------------------------------------------------------------------------------
*/

/** ensure this file is being included by a parent file */

defined('_JEXEC') or die('Restricted access');


?>

<?php
$ref_mootools = $params->get('ref_mootools');
$ref_slimbox = $params->get('ref_slimbox');
$ref_css = $params->get('ref_css');
$ref_tips = $params->get('ref_tips');
$ref_zoom = $params->get('ref_zoom');

$directory = $params->get('directory');
$hb_width = $params->get('hb_width');
$hb_height = $params->get('hb_height');
$thumb_width = $params->get('thumb_width');
$thumbnoo_width = $params->get('thumbnoo_width');
$thumbnoo_height = $params->get('thumbnoo_height');
$tips = $params->get('tips');
$tips_x = $params->get('tips_x');
$tips_y = $params->get('tips_y');
$margin = $params->get('margin');
$pretext= $params->get('pretext');
$pre_pub= $params->get('pre_pub');
$posttext= $params->get('posttext');
$post_pub= $params->get('post_pub');
$height1 = $params->get('height1');
$width1 = $params->get('width1');
$link1 = $params->get('link1');
$linkme1 = $params->get('linkme1');
$height2 = $params->get('height2');
$width2 = $params->get('width2');
$link2 = $params->get('link2');
$linkme2 = $params->get('linkme2');
$height3 = $params->get('height3');
$width3 = $params->get('width3');
$link3 = $params->get('link3');
$linkme3 = $params->get('linkme3');
$height4 = $params->get('height4');
$width4 = $params->get('width4');
$link4 = $params->get('link4');
$linkme4 = $params->get('linkme4');
$height5 = $params->get('height5');
$width5 = $params->get('width5');
$link5 = $params->get('link5');
$linkme5 = $params->get('linkme5');
$height6 = $params->get('height6');
$width6 = $params->get('width6');
$link6 = $params->get('link6');
$linkme6 = $params->get('linkme6');
$height7 = $params->get('height7');
$width7 = $params->get('width7');
$link7 = $params->get('link7');
$linkme7 = $params->get('linkme7');
$height8 = $params->get('height8');
$width8 = $params->get('width8');
$link8 = $params->get('link8');
$linkme8 = $params->get('linkme8');
$height9 = $params->get('height9');
$width9 = $params->get('width9');
$link9 = $params->get('link9');
$linkme9 = $params->get('linkme9');
$height10 = $params->get('height10');
$width10 = $params->get('width10');
$link10 = $params->get('link10');
$linkme10 = $params->get('linkme10');
$height11 = $params->get('height11');
$width11 = $params->get('width11');
$link11 = $params->get('link11');
$linkme11 = $params->get('linkme11');
$height12 = $params->get('height12');
$width12 = $params->get('width12');
$link12 = $params->get('link12');
$linkme12 = $params->get('linkme12');
$height13 = $params->get('height13');
$width13 = $params->get('width13');
$link13 = $params->get('link13');
$linkme13 = $params->get('linkme13');
$height14 = $params->get('height14');
$width14 = $params->get('width14');
$link14 = $params->get('link14');
$linkme14 = $params->get('linkme14');
$height15 = $params->get('height15');
$width15 = $params->get('width15');
$link15 = $params->get('link15');
$linkme15 = $params->get('linkme15');
$height16 = $params->get('height16');
$width16 = $params->get('width16');
$link16 = $params->get('link16');
$linkme16 = $params->get('linkme16');
$height17 = $params->get('height17');
$width17 = $params->get('width17');
$link17 = $params->get('link17');
$linkme17 = $params->get('linkme17');
$height18 = $params->get('height18');
$width18 = $params->get('width18');
$link18 = $params->get('link18');
$linkme18 = $params->get('linkme18');

$image1 = $params->get('image1');
$image2 = $params->get('image2');
$image3 = $params->get('image3');
$image4 = $params->get('image4');
$image5 = $params->get('image5');
$image6 = $params->get('image6');
$image7 = $params->get('image7');
$image8 = $params->get('image8');
$image9 = $params->get('image9');
$image10 = $params->get('image10');
$image11 = $params->get('image11');
$image12 = $params->get('image12');
$image13 = $params->get('image13');
$image14 = $params->get('image14');
$image15 = $params->get('image15');
$image16 = $params->get('image16');
$image17 = $params->get('image17');
$image18 = $params->get('image18');
$thumb1 = $params->get('thumb1');
$thumb2 = $params->get('thumb2');
$thumb3 = $params->get('thumb3');
$thumb4 = $params->get('thumb4');
$thumb5 = $params->get('thumb5');
$thumb6 = $params->get('thumb6');
$thumb7 = $params->get('thumb7');
$thumb8 = $params->get('thumb8');
$thumb9 = $params->get('thumb9');
$thumb10 = $params->get('thumb10');
$thumb11 = $params->get('thumb11');
$thumb12 = $params->get('thumb12');
$thumb13 = $params->get('thumb13');
$thumb14 = $params->get('thumb14');
$thumb15 = $params->get('thumb15');
$thumb16 = $params->get('thumb16');
$thumb17 = $params->get('thumb17');
$thumb18 = $params->get('thumb18');
$id = $params->get('id');
$a1 = $params->get('a1');
$t1 = $params->get('t1');
$a2 = $params->get('a2');
$t2 = $params->get('t2');
$a3 = $params->get('a3');
$t3 = $params->get('t3');
$a4 = $params->get('a4');
$t4 = $params->get('t4');
$a5 = $params->get('a5');
$t5 = $params->get('t5');
$a6 = $params->get('a6');
$t6 = $params->get('t6');
$a7 = $params->get('a7');
$t7 = $params->get('t7');
$a8 = $params->get('a8');
$t8 = $params->get('t8');
$a9 = $params->get('a9');
$t9 = $params->get('t9');
$a10 = $params->get('a10');
$t10 = $params->get('t10');
$a11 = $params->get('a11');
$t11 = $params->get('t11');
$a12 = $params->get('a12');
$t12 = $params->get('t12');
$a13 = $params->get('a13');
$t13 = $params->get('t13');
$a14 = $params->get('a14');
$t14 = $params->get('t14');
$a15 = $params->get('a15');
$t15 = $params->get('t15');
$a16 = $params->get('a16');
$t16 = $params->get('t16');
$a17 = $params->get('a17');
$t17 = $params->get('t17');
$a18 = $params->get('a18');
$t18 = $params->get('t18');
$gallery1 = $params->get('gallery1');
$gallery2 = $params->get('gallery2');
$gallery3 = $params->get('gallery3');
$gallery4 = $params->get('gallery4');
$gallery5 = $params->get('gallery5');
$gallery6 = $params->get('gallery6');
$gallery7 = $params->get('gallery7');
$gallery8 = $params->get('gallery8');
$gallery9 = $params->get('gallery9');
$gallery10 = $params->get('gallery10');
$gallery11 = $params->get('gallery11');
$gallery12 = $params->get('gallery12');
$gallery13 = $params->get('gallery13');
$gallery14 = $params->get('gallery14');
$gallery15 = $params->get('gallery15');
$gallery16 = $params->get('gallery16');
$gallery17 = $params->get('gallery17');
$gallery18 = $params->get('gallery18');

?>

<?php if ($ref_mootools == "yes") : ?>
<script src="<?php echo JURI::base();;?>modules/mod_hover_box2/hover_box2/mootools.v1.11.js" type="text/javascript" charset="utf-8" ></script>
<?php endif; ?>

<?php if ($ref_slimbox == "yes") : ?>
<style type="text/css" media="screen">@import "<?php echo JURI::base();;?>modules/mod_hover_box2/hover_box2/slimbox/slimbox_ex.css";></style>
<script src="<?php echo JURI::base();;?>modules/mod_hover_box2/hover_box2/slimbox/slimbox_ex_compressed.js" type="text/javascript" charset="utf-8" ></script>
<?php endif; ?>

<?php if ($ref_css == "yes") : ?>
<style type="text/css" media="screen">@import "<?php echo JURI::base();;?>modules/mod_hover_box2/hover_box2/hover_box2.css";></style>
<?php endif; ?>

<?php if ($ref_tips == "yes") : ?>
<script src="<?php echo JURI::base();;?>modules/mod_hover_box2/hover_box2/mootips.v1.11.js" type="text/javascript" charset="utf-8" ></script>
<?php endif; ?>

<?php if ($tips == "yes") : ?>
<script type="text/javascript">
window.addEvent('domready', function() {

			var myTips1 = new MooTips($$('.toolTipImg'), {
				maxTitleChars: 100, // long caption
				className: 'hb',
				offsets: {'x':<?php echo $tips_x?>,'y':<?php echo $tips_y?>}
			});

		
});
</script>
<?php endif; ?>

<?php if ($ref_zoom == "yes") : ?>
<script src="<?php echo $mosConfig_live_site;?>/modules/mod_hover_box2/hover_box2/thumbnoo.js" type="text/javascript" charset="utf-8" ></script>
<?php endif; ?>


<?php if ($pre_pub == "yes") : ?>
<div class="hb_pre" style="display:<?php echo $pre_display?>"><?php echo $pretext ?></div>
<?php endif; ?>
<div class="hb_<?php echo $id?>" style="width:<?php echo $hb_width?>;height:<?php echo $hb_height?>;">
<div class="thumbs_<?php echo $id?>" style="width:<?php echo $thumb_width?>;margin:<?php echo $margin?>;">
<?php
switch ($linkme1)
{
case 1:
  echo '<a href="'.$directory.'/'.$image1.'" rel="lightbox['.$gallery1.']" title="'.$t1.'" class="toolTipImg"><img src="'.$directory.'/'.$thumb1.'" alt="'.$a1.'" title="'.$t1.'"/></a>';
  break;
case 2:
  echo '<a href="'.$link1.'" rel="lightbox['.$gallery1.']" rev="width='.$width1.', height='.$height1.'" title="'.$t1.'" class="toolTipImg"><img src="'.$directory.'/'.$thumb1.'" alt="'.$a1.'" title="'.$t1.'"/></a>';
  break;
case 3:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" title="'.$t1.'" class="toolTipImg"><img src="'.$directory.'/'.$thumb1.'" alt="'.$a1.'"  /></a>';
   break;
    case 4:
     echo '<a href="'.$link1.'" target="_blank" class="toolTipImg" title="'.$t1.'"><img src="'.$directory.'/'.$thumb1.'" alt="'.$a1.'" title="'.$t1.'"/></a>';
case 5:
  echo '';
  break;
  case 6:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t1.'"><img src="'.$directory.'/'.$thumb1.'"  alt="'.$a1.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
  }

switch ($linkme2)
{
case 21:
  echo '<a href="'.$directory.'/'.$image2.'" class="toolTipImg" rel="lightbox['.$gallery2.']" title="'.$t2.'"><img src="'.$directory.'/'.$thumb2.'" alt="'.$a2.'" title="'.$t2.'"/></a>';
  break;
case 22:
  echo '<a href="'.$link2.'" class="toolTipImg" rel="lightbox['.$gallery2.']" title="'.$t2.'" rev="width='.$width2.', height='.$height2.'"><img src="'.$directory.'/'.$thumb2.'" alt="'.$a2.'" title="'.$t2.'"/></a>';
  break;
case 23:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t2.'"><img src="'.$directory.'/'.$thumb2.'" alt="'.$a2.'" title="'.$t2.'"/></a>';
   break;
    case 24:
     echo '<a href="'.$link2.'" class="toolTipImg" title="'.$t2.'" target="_blank"><img src="'.$directory.'/'.$thumb2.'" alt="'.$a2.'" title="'.$t2.'"/></a>';
case 25:
  echo '';
  break;
  case 26:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t2.'"><img src="'.$directory.'/'.$thumb2.'"  alt="'.$a2.'"  class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'"/></a>';
}

switch ($linkme3)
{
case 31:
  echo '<a href="'.$directory.'/'.$image3.'" class="toolTipImg" title="'.$t3.'" rel="lightbox['.$gallery3.']"><img src="'.$directory.'/'.$thumb3.'" alt="'.$a3.'" title="'.$t3.'"/></a>';
  break;
case 32:
  echo '<a href="'.$link3.'" title="'.$t3.'" class="toolTipImg" rel="lightbox['.$gallery3.']" rev="width='.$width3.', height='.$height3.'"><img src="'.$directory.'/'.$thumb3.'" alt="'.$a3.'" title="'.$t3.'"/></a>';
  break;
case 33:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t3.'"><img src="'.$directory.'/'.$thumb3.'" alt="'.$a3.'" title="'.$t3.'"/></a>';
   break;
    case 34:
     echo '<a href="'.$link3.'" class="toolTipImg" title="'.$t3.'" target="_blank"><img src="'.$directory.'/'.$thumb3.'" alt="'.$a3.'" title="'.$t3.'"/></a>';
case 35:
  echo '';
    break;
  case 36:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t3.'"><img src="'.$directory.'/'.$thumb3.'"  alt="'.$a3.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme4)
{
case 41:
  echo '<a href="'.$directory.'/'.$image4.'" class="toolTipImg" title="'.$t4.'" rel="lightbox['.$gallery4.']"><img src="'.$directory.'/'.$thumb4.'" alt="'.$a4.'" title="'.$t4.'"/></a>';
  break;
case 42:
  echo '<a href="'.$link4.'" title="'.$t4.'" class="toolTipImg" rel="lightbox['.$gallery4.']" rev="width='.$width4.', height='.$height4.'"><img src="'.$directory.'/'.$thumb4.'" alt="'.$a4.'" title="'.$t4.'"/></a>';
  break;
case 43:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t4.'"><img src="'.$directory.'/'.$thumb4.'" alt="'.$a4.'" title="'.$t4.'"/></a>';
   break;
    case 44:
     echo '<a class="toolTipImg" href="'.$link4.'" title="'.$t4.'" target="_blank"><img src="'.$directory.'/'.$thumb4.'" alt="'.$a4.'" title="'.$t4.'"/></a>';
case 45:
  echo '';
    break;
  case 46:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t4.'"><img src="'.$directory.'/'.$thumb4.'"  alt="'.$a4.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme5)
{
case 51:
  echo '<a href="'.$directory.'/'.$image5.'" class="toolTipImg" title="'.$t5.'" rel="lightbox['.$gallery5.']"><img src="'.$directory.'/'.$thumb5.'" alt="'.$a5.'" title="'.$t5.'"/></a>';
  break;
case 52:
  echo '<a href="'.$link5.'" title="'.$t5.'" class="toolTipImg" rel="lightbox['.$gallery5.']" rev="width='.$width5.', height='.$height5.'"><img src="'.$directory.'/'.$thumb5.'" alt="'.$a5.'" title="'.$t5.'"/></a>';
  break;
case 53:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t5.'"><img src="'.$directory.'/'.$thumb5.'" alt="'.$a5.'" title="'.$t5.'"/></a>';
   break;
    case 54:
     echo '<a href="'.$link5.'" class="toolTipImg" title="'.$t5.'" target="_blank"><img src="'.$directory.'/'.$thumb5.'" alt="'.$a5.'" title="'.$t5.'"/></a>';
case 55:
  echo '';
    break;
  case 56:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t5.'"><img src="'.$directory.'/'.$thumb5.'"  alt="'.$a5.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}


switch ($linkme6)
{
case 61:
  echo '<a href="'.$directory.'/'.$image6.'" class="toolTipImg" title="'.$t6.'" rel="lightbox['.$gallery6.']"><img src="'.$directory.'/'.$thumb6.'" alt="'.$a6.'" title="'.$t6.'"/></a>';
  break;
case 62:
  echo '<a href="'.$link6.'" title="'.$t6.'" class="toolTipImg" rel="lightbox['.$gallery6.']" rev="width='.$width6.', height='.$height6.'"><img src="'.$directory.'/'.$thumb6.'" alt="'.$a6.'" title="'.$t6.'"/></a>';
  break;
case 63:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t6.'"><img src="'.$directory.'/'.$thumb6.'" alt="'.$a6.'" title="'.$t6.'"/></a>';
   break;
   case 64:
     echo '<a href="'.$link6.'" class="toolTipImg" title="'.$t6.'" target="_blank"><img src="'.$directory.'/'.$thumb6.'" alt="'.$a6.'" title="'.$t6.'"/></a>';
  break;
case 65:
  echo '';
    break;
  case 66:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t6.'"><img src="'.$directory.'/'.$thumb6.'"  alt="'.$a6.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme7)
{
case 71:
  echo '<a href="'.$directory.'/'.$image7.'" class="toolTipImg" title="'.$t7.'" rel="lightbox['.$gallery7.']"><img src="'.$directory.'/'.$thumb7.'" alt="'.$a7.'" title="'.$t7.'"/></a>';
  break;
case 72:
  echo '<a href="'.$link7.'" title="'.$t7.'" class="toolTipImg" rel="lightbox['.$gallery7.']" rev="width='.$width7.', height='.$height7.'"><img src="'.$directory.'/'.$thumb7.'" alt="'.$a7.'" title="'.$t7.'"/></a>';
  break;
case 73:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t7.'"><img src="'.$directory.'/'.$thumb7.'" alt="'.$a7.'" title="'.$t7.'"/></a>';
   break;
   case 74:
     echo '<a href="'.$link7.'" target="_blank" title="'.$t7.'" class="toolTipImg"><img src="'.$directory.'/'.$thumb7.'" alt="'.$a7.'" title="'.$t7.'"/></a>';
  break;
case 75:
  echo '';
    break;
  case 76:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t7.'"><img src="'.$directory.'/'.$thumb7.'"  alt="'.$a7.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme8)
{
case 81:
  echo '<a href="'.$directory.'/'.$image8.'" class="toolTipImg" title="'.$t8.'"rel="lightbox['.$gallery8.']"><img src="'.$directory.'/'.$thumb8.'" alt="'.$a8.'" title="'.$t8.'"/></a>';
  break;
case 82:
  echo '<a href="'.$link8.'" class="toolTipImg" title="'.$t8.'" rel="lightbox['.$gallery8.']" rev="width='.$width8.', height='.$height8.'"><img src="'.$directory.'/'.$thumb8.'" alt="'.$a8.'" title="'.$t8.'"/></a>';
  break;
case 83:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t8.'"><img src="'.$directory.'/'.$thumb8.'" alt="'.$a8.'" title="'.$t8.'"/></a>';
   break;
   case 84:
     echo '<a href="'.$link8.'" class="toolTipImg" title="'.$t8.'" target="_blank"><img src="'.$directory.'/'.$thumb8.'" alt="'.$a8.'" title="'.$t8.'"/></a>';
  break;
case 85:
  echo '';
    break;
  case 86:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t8.'"><img src="'.$directory.'/'.$thumb8.'"  alt="'.$a8.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme9)
{
case 91:
  echo '<a href="'.$directory.'/'.$image9.'" class="toolTipImg" title="'.$t9.'" rel="lightbox['.$gallery9.']"><img src="'.$directory.'/'.$thumb9.'" alt="'.$a9.'" title="'.$t9.'"/></a>';
  break;
case 92:
  echo '<a href="'.$link9.'" class="toolTipImg" title="'.$t9.'" rel="lightbox['.$gallery9.']" rev="width='.$width9.', height='.$height9.'"><img src="'.$directory.'/'.$thumb9.'" alt="'.$a9.'" title="'.$t9.'"/></a>';
  break;
case 93:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t9.'"><img src="'.$directory.'/'.$thumb9.'" alt="'.$a9.'" title="'.$t9.'"/></a>';
   break;
   case 94:
     echo '<a href="'.$link9.'" class="toolTipImg" title="'.$t9.'" target="_blank"><img src="'.$directory.'/'.$thumb9.'" alt="'.$a9.'" title="'.$t9.'"/></a>';
  break;
case 95:
  echo '';
    break;
  case 96:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t9.'"><img src="'.$directory.'/'.$thumb9.'"  alt="'.$a9.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme10)
{
case 101:
  echo '<a href="'.$directory.'/'.$image10.'" class="toolTipImg" title="'.$t10.'" rel="lightbox['.$gallery10.']"><img src="'.$directory.'/'.$thumb10.'" alt="'.$a10.'" title="'.$t10.'"/></a>';
  break;
case 102:
  echo '<a href="'.$link10.'" class="toolTipImg" title="'.$t10.'" rel="lightbox['.$gallery10.']" rev="width='.$width10.', height='.$height10.'"><img src="'.$directory.'/'.$thumb10.'" alt="'.$a10.'" title="'.$t10.'"/></a>';
  break;
case 103:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t10.'"><img src="'.$directory.'/'.$thumb10.'" alt="'.$a10.'" title="'.$t10.'"/></a>';
   break;
   case 104:
     echo '<a href="'.$link10.'" class="toolTipImg" title="'.$t10.'" target="_blank"><img src="'.$directory.'/'.$thumb10.'" alt="'.$a10.'" title="'.$t10.'"/></a>';
  break;
case 105:
  echo '';
    break;
  case 106:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t10.'"><img src="'.$directory.'/'.$thumb10.'"  alt="'.$a10.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme11)
{
case 111:
  echo '<a href="'.$directory.'/'.$image11.'" class="toolTipImg" title="'.$t11.'" rel="lightbox['.$gallery11.']"><img src="'.$directory.'/'.$thumb11.'" alt="'.$a11.'" title="'.$t11.'"/></a>';
  break;
case 112:
  echo '<a href="'.$link11.'" class="toolTipImg" title="'.$t11.'" rel="lightbox['.$gallery11.']" rev="width='.$width11.', height='.$height11.'"><img src="'.$directory.'/'.$thumb11.'" alt="'.$a11.'" title="'.$t11.'"/></a>';
  break;
case 113:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t11.'"><img src="'.$directory.'/'.$thumb11.'" alt="'.$a11.'" title="'.$t11.'"/></a>';
   break;
   case 114:
     echo '<a href="'.$link11.'" title="'.$t11.'" class="toolTipImg"target="_blank"><img src="'.$directory.'/'.$thumb11.'" alt="'.$a11.'" title="'.$t11.'"/></a>';
  break;
case 115:
  echo '';
    break;
  case 116:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t11.'"><img src="'.$directory.'/'.$thumb11.'"  alt="'.$a11.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme12)
{
case 121:
  echo '<a href="'.$directory.'/'.$image12.'" class="toolTipImg" title="'.$t12.'" rel="lightbox['.$gallery12.']"><img src="'.$directory.'/'.$thumb12.'" alt="'.$a12.'" title="'.$t12.'"/></a>';
  break;
case 122:
  echo '<a href="'.$link12.'" title="'.$t12.'" class="toolTipImg" rel="lightbox['.$gallery12.']" rev="width='.$width12.', height='.$height12.'"><img src="'.$directory.'/'.$thumb12.'" alt="'.$a12.'" title="'.$t12.'"/></a>';
  break;
case 123:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t12.'"><img src="'.$directory.'/'.$thumb12.'" class="toolTipImg" alt="'.$a12.'" title="'.$t12.'"/></a>';
   break;
   case 124:
     echo '<a href="'.$link12.'" class="toolTipImg"  title="'.$t12.'"target="_blank"><img src="'.$directory.'/'.$thumb12.'" alt="'.$a12.'" title="'.$t12.'"/></a>';
  break;
case 125:
  echo '';
    break;
  case 126:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t12.'"><img src="'.$directory.'/'.$thumb12.'"  alt="'.$a12.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme13)
{
case 131:
  echo '<a href="'.$directory.'/'.$image13.'" title="'.$t13.'" class="toolTipImg" rel="lightbox['.$gallery13.']"><img src="'.$directory.'/'.$thumb13.'" alt="'.$a13.'" title="'.$t13.'"/></a>';
  break;
case 132:
  echo '<a href="'.$link13.'" title="'.$t13.'" class="toolTipImg" rel="lightbox['.$gallery13.']" rev="width='.$width13.', height='.$height13.'"><img src="'.$directory.'/'.$thumb13.'" alt="'.$a13.'" title="'.$t13.'"/></a>';
  break;
case 133:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg"  title="'.$t13.'"><img src="'.$directory.'/'.$thumb13.'" alt="'.$a13.'" title="'.$t13.'"/></a>';
   break;
   case 134:
     echo '<a href="'.$link13.'" class="toolTipImg"  title="'.$t13.'" target="_blank"><img src="'.$directory.'/'.$thumb13.'" alt="'.$a13.'" title="'.$t13.'"/></a>';
  break;
case 135:
  echo '';
    break;
  case 136:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'"  title="'.$t13.'"><img src="'.$directory.'/'.$thumb13.'"  alt="'.$a13.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme14)
{
case 141:
  echo '<a href="'.$directory.'/'.$image14.'" class="toolTipImg" title="'.$t14.'" rel="lightbox['.$gallery14.']"><img src="'.$directory.'/'.$thumb14.'" alt="'.$a14.'" title="'.$t14.'"/></a>';
  break;
case 142:
  echo '<a href="'.$link14.'" class="toolTipImg" title="'.$t14.'" rel="lightbox['.$gallery14.']" rev="width='.$width14.', height='.$height14.'"><img src="'.$directory.'/'.$thumb14.'" alt="'.$a14.'" title="'.$t14.'"/></a>';
  break;
case 143:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg"  title="'.$t14.'"><img src="'.$directory.'/'.$thumb14.'" alt="'.$a14.'" title="'.$t14.'"/></a>';
   break;
   case 144:
     echo '<a href="'.$link14.'"  title="'.$t14.'" class="toolTipImg" target="_blank"><img src="'.$directory.'/'.$thumb14.'" alt="'.$a14.'" title="'.$t14.'"/></a>';
  break;
case 145:
  echo '';
    break;
  case 146:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t14.'"><img src="'.$directory.'/'.$thumb14.'"  alt="'.$a14.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme15)
{
case 151:
  echo '<a href="'.$directory.'/'.$image15.'" title="'.$t15.'" class="toolTipImg" rel="lightbox['.$gallery15.']"><img src="'.$directory.'/'.$thumb15.'" alt="'.$a15.'" title="'.$t15.'"/></a>';
  break;
case 152:
  echo '<a href="'.$link15.'" title="'.$t15.'" class="toolTipImg" rel="lightbox['.$gallery15.']" rev="width='.$width15.', height='.$height15.'"><img src="'.$directory.'/'.$thumb15.'" alt="'.$a15.'" title="'.$t15.'"/></a>';
  break;
case 153:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg"  title="'.$t15.'"><img src="'.$directory.'/'.$thumb15.'" alt="'.$a15.'" title="'.$t15.'"/></a>';
   break;
   case 154:
     echo '<a href="'.$link15.'" class="toolTipImg"  title="'.$t15.'" target="_blank"><img src="'.$directory.'/'.$thumb15.'" alt="'.$a15.'" title="'.$t15.'"/></a>';
  break;
case 155:
  echo '';
    break;
  case 156:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t15.'"><img src="'.$directory.'/'.$thumb15.'"  alt="'.$a15.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme16)
{
case 161:
  echo '<a href="'.$directory.'/'.$image16.'" class="toolTipImg" title="'.$t16.'" rel="lightbox['.$gallery16.']"><img src="'.$directory.'/'.$thumb16.'" alt="'.$a16.'" title="'.$t16.'"/></a>';
  break;
case 162:
  echo '<a href="'.$link16.'" title="'.$t16.'" class="toolTipImg" rel="lightbox['.$gallery16.']" rev="width='.$width16.', height='.$height16.'"><img src="'.$directory.'/'.$thumb16.'" alt="'.$a16.'" title="'.$t16.'"/></a>';
  break;
case 163:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg"  title="'.$t16.'"><img src="'.$directory.'/'.$thumb16.'" alt="'.$a16.'"  title="'.$t16.'"/></a>';
   break;
   case 164:
     echo '<a href="'.$link16.'" class="toolTipImg"  title="'.$t16.'" target="_blank"><img src="'.$directory.'/'.$thumb16.'" alt="'.$a16.'" title="'.$t16.'"/></a>';
  break;
case 165:
  echo '';
    break;
  case 166:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t16.'"><img src="'.$directory.'/'.$thumb16.'"  alt="'.$a16.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme17)
{
case 171:
  echo '<a href="'.$directory.'/'.$image17.'" class="toolTipImg" title="'.$t17.'" rel="lightbox['.$gallery17.']"><img src="'.$directory.'/'.$thumb17.'" alt="'.$a17.'" title="'.$t17.'"/></a>';
  break;
case 172:
  echo '<a href="'.$link17.'" class="toolTipImg" title="'.$t17.'" rel="lightbox['.$gallery17.']" rev="width='.$width17.', height='.$height17.'"><img src="'.$directory.'/'.$thumb17.'" alt="'.$a17.'" title="'.$t17.'"/></a>';
  break;
case 173:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg"  title="'.$t17.'"><img src="'.$directory.'/'.$thumb17.'" alt="'.$a17.'" title="'.$t17.'"/></a>';
   break;
   case 174:
     echo '<a href="'.$link17.'" class="toolTipImg"  title="'.$t17.'" target="_blank"><img src="'.$directory.'/'.$thumb17.'" alt="'.$a17.'" title="'.$t17.'"/></a>';
  break;
case 175:
  echo '';
    break;
  case 176:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg" title="'.$t17.'"><img src="'.$directory.'/'.$thumb17.'"  alt="'.$a17.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}

switch ($linkme18)
{
case 181:
  echo '<a href="'.$directory.'/'.$image18.'" class="toolTipImg" title="'.$t18.'" rel="lightbox['.$gallery18.']"><img src="'.$directory.'/'.$thumb18.'" alt="'.$a18.'" title="'.$t18.'"/></a>';
  break;
case 182:
  echo '<a href="'.$link18.'" class="toolTipImg" title="'.$t18.'" rel="lightbox['.$gallery18.']" rev="width='.$width18.', height='.$height18.'"><img src="'.$directory.'/'.$thumb18.'" alt="'.$a18.'" title="'.$t18.'"/></a>';
  break;
case 183:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg"  title="'.$t18.'"><img src="'.$directory.'/'.$thumb18.'" alt="'.$a18.'" title="'.$t18.'"/></a>';
   break;
   case 184:
     echo '<a href="'.$link18.'" class="toolTipImg"  title="'.$t18.'" target="_blank"><img src="'.$directory.'/'.$thumb18.'" alt="'.$a18.'" title="'.$t18.'"/></a>';
  break;
case 185:
  echo '';
    break;
  case 186:
  echo '<a href="'. sefRelToAbs(substr($_SERVER["REQUEST_URI"],0))."#nogo" .'" class="toolTipImg"  title="'.$t18.'"><img src="'.$directory.'/'.$thumb18.'"  alt="'.$a18.'" class="thumbnoo h:'.$thumbnoo_height.' w:'.$thumbnoo_width.'" /></a>';
}



?>

</div>
</div>
<div class="clear"></div>
<?php if ($post_pub == "yes") : ?>
<div class="hb_post" style="display:<?php echo $post_display?>"><?php echo $posttext ?></div>
<?php endif; ?>

