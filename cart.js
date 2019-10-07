$(document).ready(function() {
    $("#panier").click(function(e){
        e.preventDefault();
        $.get($(this).attr("href"),{},function(data){
            var result = JSON.parse(data);
            if(result.err){
                alert(result.msg);
            }else{
                if(confirm(result.msg+'. Cliquez sur le bouton OK pour voir le panier.')){
                    location.href='cart.php';
                }
                $("#count").empty().append(result.count);
            }
            
        },'text');
    });

    
});
