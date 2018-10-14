! function() {
    var title = document.querySelector('#title');
    var question = document.querySelector('#question');
    var solve = document.querySelector('#solve');
    var btn = document.querySelector('#btn');

    var title1 = document.querySelector('#title1');
    var question1 = document.querySelector('#question1');
    var solve1 = document.querySelector('#solve1');
    var btn1 = document.querySelector('#btn1');

    var tbody = document.querySelector('tbody');
    var dataindex=null;
    //1点击按钮进行创建数据
    btn.onclick = function() {
        ajax({
            url: "http://localhost/mywook/day%2025/php/insert.php",
            data: {
                title: title.value,
                question: question.value,
                solve: solve.value
            },
            cgfn: function() {
                location.reload();
            }
        })
    };
    //2.渲染取到的数据
    ajax({
        url: "http://localhost/mywook/day%2025/php/data.php",
        cgfn: function(d) {
            var arr = JSON.parse(d);
            var str = '';
            for (var i = 0; i < arr.length; i++) {
                str += '<tr index=' + arr[i].sid + '>';
                for (var j in arr[i]) {
                    str += '<td>' + arr[i][j] + '</td>';
                }
                str += '<td><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span>删除</button><a style="margin-left:20px" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-pencil"></span>修改</a></td>';
                str += '</tr>';
            }
            tbody.innerHTML = str;
        }
    });
    //3.删除事件
    tbody.onclick = function(ev) {
        var ev = ev || window.event;
        var ele = ev.target || ev.srcElement;
        if (ele.nodeName == 'BUTTON') {
            if (confirm('你确定删除吗？')) {
                ajax({
                    url: "http://localhost/mywook/day%2025/php/delete.php",
                    data: {
                        id: ele.parentNode.parentNode.getAttribute('index'),
                    }
                });
                ele.parentNode.parentNode.parentNode.removeChild(ele.parentNode.parentNode);
            }
        }//4.修改事件
    	else if(ele.nodeName=='A'){
    			ajax({
    			url:"http://localhost/mywook/day%2025/php/revisedata.php",
    			data:{
    				updataid:ele.parentNode.parentNode.getAttribute('index')
    			},
    			cgfn:function(d){
    				var obj=JSON.parse(d);
    				title1.value=obj.title;
    				question1.value=obj.question;
    				solve1.value=obj.solve;
    				dataindex=obj.sid;
    			}
    		});
    	}
    };
    //5.点击修改数据
    btn1.onclick = function() {
        ajax({
            url: "http://localhost/mywook/day%2025/php/update.php",
            data: {
                title2:title1.value,
                question2:question1.value,
                solve2:solve1.value,
                dataindex:dataindex
            },
            cgfn: function() {
                location.reload();
            }
        })
    };
}();