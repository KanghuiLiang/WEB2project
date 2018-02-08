 function toggle(source) {
  checkboxes = document.getElementsByName('All');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

$('.add').click(function () {
    
      $(this).prev().val(+$(this).prev().val() + 1);
    
});
$('.sub').click(function () {
    if ($(this).next().val() > 0) {
      if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
    }
});

$(document).ready(function(){
    $("u").click(function(){
        $("tr").remove(".delete1");
    });
});

$(document).ready(function(){
    $("#empty").click(function(){
        $(".table").empty();
    });
});