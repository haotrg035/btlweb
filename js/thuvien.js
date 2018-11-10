
/*send dữ liệu + set gia trị cho numberbox */
function sendandsetval(url,bien,arr){
  $.post(
    url,
    {
      thamso:bien
    },
    function(data){
      if(data){
         Object.keys(arr).forEach(function (key) {
            $("#"+arr[key]).numberbox("setValue",data);
        });      
      }
    }
  )
}
/*Sen dữ liệu kèm load */
/*url: đường dẫn, bien: danh sách bien, datagrid: ten id*/
function sendajax(url,bien,datagrid){
  $.post(
    url,
    {
      thamso:bien
    },
    function(data){
      if(data){
        $.messager.show({
          title: 'Thông Báo',
          msg: data 
          });
        $("#"+datagrid).datagrid("reload");
      }
    }
  )
}
/*Hiển thị thông báo từ dưới lên*/
function thongbao(bien){
  $.messager.show({
    title: 'Thông Báo',
    msg: bien
    });
}
/*Định dạng ngày tháng*/
function myformatter(date){
    var y = date.getFullYear();
    var m = date.getMonth()+1;
    var d = date.getDate();
    return ((d<10?('0'+d):d) + '-' + (m<10?('0'+m):m) + '-' + y );
  }
  
function myparser(s){
    if (!s) return new Date();
    var ss = (s.split('-'));
    var d = parseInt(ss[0],10);
    var m = parseInt(ss[1],10);
    var y = parseInt(ss[2],10);
    if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
      return new Date(y,m-1,d);
    } else {
      return new Date();
    }
  }
function parseDate(str) {
    var mdy = str.split('-');
    return new Date(mdy[2], mdy[1], mdy[0]);
}
/*Xóa dữ liệu bằng ajax*/
function xoadulieuajax(url,bien,datagrid,msg){
  $.messager.confirm('Confirm',msg, function(r){
    if(r){
      $.post(
        url,
        {
          thamso:bien
        },
        function(data){
          if(data){
            $.messager.show({
              title: 'Thông Báo',
              msg: data 
              });
            $("#"+datagrid).datagrid("reload");
          }
        }
      )
    }
  })
}
//Hàm reload cho datagrid
function reload(datagrid){
  $('#'+datagrid).datagrid('reload');
}
//Hàm search theo từ khóa
function timkiem(datagrid,val) {
  $('#'+datagrid).datagrid('load',{timkiem:val});
}
//Tạo câu hỏi trắc nghiệm
function hienthicauhoitheodokho(param) {
  let sortedparam = param.sort((a,b) => { return a[1]-b[1] });
  rs = $('<div></div>/');
  let counter = 0;
  for (let i = 0; i < sortedparam.length; i++) {
      const element = sortedparam[i];
      counter++;
      cauhoi = $('<div></div>/').appendTo($(rs));
      $(cauhoi).text('Câu '+counter+':'+sortedparam[i][0]+'?');
  }
 $(rs).appendTo('body');
};
