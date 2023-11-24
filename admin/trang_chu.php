<?php
    $sql = "select count(maHH) from hanghoa";
    $productQty = getOne($sql);
    $undefineQty = getOne("select count(maHH) from hanghoa where maLoai = 0");
    $result =hanghoa();
    $result1 = loadalldanhmuc();
    $dataPoints = [];
    $dataPoints1 = [];
    function countProInBrand($id){
        $sql = "select count(maLoai) from hanghoa where maLoai = $id ";
        $result2 = connect($sql);
        return $result2;
    }

   foreach($result as $row){
       array_push($dataPoints,array(
           "label"=>$row['tenHH'],
           "y"=>$row['gia']
        ));
    }
    foreach($result1 as $row){
        array_push($dataPoints1,array(
            "label" => $row['tenLoai'],
            "y" => 25
         ));
     }

?>
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Trang Chủ</p>
        
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box ">
                    <h3 class="box-title">Thống kê danh mục</h3>
                    <div class="d-flex">
                        <div id="chartContainer1" style="height:450px; width: 100%;"></div>
                        <div id="chartContainer" style="height:450px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>

<script>

window.onload = function () {
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     theme: "light2", // "light1", "light2", "dark1", "dark2"
     title: {
         text: "Giá Bán Sản Phẩm"
     },
     
     data: [{
         type: "column",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
 var chart1 = new CanvasJS.Chart("chartContainer1", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Danh mục sản phẩm",
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
}
</script>