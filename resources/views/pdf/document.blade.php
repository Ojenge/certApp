<html>
<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
    <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
        <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
        <br><br>
        <span style="font-size:25px"><i>This is to certify that</i></span>
        <br><br>
        <span style="font-size:30px"><b>{{$data['name']}}</b></span><br/><br/>
        <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
        <span style="font-size:30px">{{$data['course']}}</span> <br/><br/>
         <br/><br/><br/><br/>
        <span style="font-size:25px"><i>dated</i></span><br>
        <span style="font-size:30px"><?php $today = date("F j, Y"); echo $today;?></span>
    </div>
</div>
</html>