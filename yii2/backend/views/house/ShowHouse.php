<?php
     use yii\widgets\LinkPager;
     use yii\helpers\Url;
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>分类列表</title>
</head>
<body>	
	<div class="well">
		<span class="center"><h2>房屋信息展示</h2></span>
		<table class="table">
			<tr>
				<th>查看房间</th>
				<th>房屋编号</th>
				<th>房屋名称</th>
				<th>房屋状态</th>
				<th>房屋概况</th>
				<th>付款方式</th>
				<th>地址展示</th>
				<th>操作</th>
			</tr>
			<?php foreach($data as $v):?>
			<tr>
				<td ><a href="<?= Url::to(['show-room','id'=>$v['h_id']])?>">进入列表</a></td>
				<td><?=$v['h_id']?></td>

				<td value="<?= $v['h_id']?>"><span class="name"><?=$v['h_name']?></span></td>

				<?php if($v['status']==0){?>
					<td value="<?php echo $v['h_id']?>"><span class='status'>待出租</span></td>
						<?php }else{ ?>
					<td value="<?php echo $v['h_id']?>"><span  class='status'>已出租</span></td>
				<?php } ?>
				<td><?=$v['area']?>㎡|<?=$v['direct']?></td>
				<td value="<?= $v['h_id']?>"><span class="ways"><?=$v['ways']?></span></td>
				<td><?=$v['detail']?></td>
				<td>
					<a href="<?= Url::to(['show-house','id'=>$v['h_id']])?>">删除 </a>
					<!-- <a href="<?= Url::to(['house-update','id'=>$v['h_id']])?>">修改 </a> -->
				</td>
				
			</tr>
			<?php  endforeach ?>
			
		</table>
	</div>
			<?=
		LinkPager::widget([
		      'pagination' => $pages,
		    ]);
		?> 
</body>

<script src="assets/js/jquery-1.8.2.min.js"></script>
<script>
$(function(){
	// 修改状态
	$(document).on('click','.status',function(){
		var val =$(this).html();
		var _this=$(this);
		var id=$(this).parent().attr('value');
		if(val=='待出租'){
			val =1;
		}else{
			val=0;
		}
		var url="?r=house/update";
		$.get(url,{id:id,val:val},function(msg){
  		if(msg==1){
  			if(_this.html()=="待出租"){
  				_this.parent().html("<span  class='status'>已出租</span>");
  			}else{
  				_this.parent().html("<span  class='status'>待出租</span>");
  			}
  		}
  	})
	})
})
</script>
<script>    
//修改房间名
    $(document).on('click','.name',function(){      
         old_val=$(this).html();  
        $(this).parent().html("<input type=\'text\'  name='c_name' value="+old_val+">");  
        // return false;    
        $(document).on('blur','input[name="c_name"]',function(){      
        var obj=$(this);      
        var id=$(this).parent().attr('value'); //获取要修改内容的id     
        // alert(id);return false; 
        var val=$(this).val(); //获取修改后的值
        // alert(val);return false;    
          $.ajax({      
            type:'get',      
            url:'?r=house/updates',      
            data:{      
                id:id,      
                val:val    
            },      
            success:function(msg){      
                if(msg == 1){      
                    obj.parent().html("<span class='name'>"+val+"</span>")      
                }else{      
                    obj.parent().html("<span class='name'>"+old_val+"</span>")      
                }      
      
            }      
       })      
    })      
})      
</script>  
<script>
	//修改付款方式
	$('.ways').click(function(){
		_this =$(this);
		var val= $(this).html();
		var id=$(this).parent().attr('value');
		var url="?r=house/info";
		var str="";
		$.get(url,function(msg){
			if(msg.length>0){
				str +="<select name='sel'>";
				$(msg).each(function(k,v){
					str+="<option class='opt' value="+v.wid+">"+v.ways+"</option>";
				})
				str+="</select>";
				_this.parent().html(str);
			}
			
		},'json');
		$(document).on('blur','select[name="sel"]',function(result){
			var str = $(this).val();
			var res =$(".opt").html();
			// alert(res);return false;
			var url="?r=house/ways";
			$.get(url,{id:id,str:str},function(result){
				if(result==1){
				location.reload();
				 // history.go(0);location.reload();
			}else{
				history.go(0);
				// _this.parent().html('<span class="ways">'+val+'</span>');不好用
			}
			})
			
		})

	})
</script>

</html>
