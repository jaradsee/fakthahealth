<?php
use yii\helpers\Html;
?>
<h1>หมวดรายงานเพื่อบริหารจัดการความเสี่ยง</h1>

<p>
  <?=Html::a('รายงานความเสี่ยงแยกตามประเภทความเสี่ยง',['reportrisk/report1'])?>
</p>
<p>
  <?=Html::a('รายงานความเสี่ยงแยกตามโปรแกรมความเสี่ยง',['reportrisk/report15'])?>
</p>
<p>
  <?=Html::a('รายงานความเสี่ยงแยกตามแผนกที่รายงาน',['reportrisk/report4'])?>
</p>
<p>
  <?=Html::a('รายงานแยกตามระดับความรุนแรงของความเสี่ยง',['reportrisk/report5'])?>
</p>
<?=Html::a('รายงานความเสี่ยงแยกรายเดือน',['reportrisk/report10'])?>
</p>
<?=Html::a('รายงานความเสี่ยงแยกแผนกวันนี้',['reportrisk/report8'])?>
</p>
<?=Html::a('รายงานความเสี่ยงแยกแผนกตามช่วงเวลากำหนด',['reportrisk/report9'])?>
</p>
