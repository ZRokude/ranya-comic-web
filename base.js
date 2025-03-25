const show = $("#klik");
const dashboard = $("#dashboard");

dashboard.show();

show.click(function() {
    dashboard.animate({left:"-260px"}, 500, function(){
        dashboard.hide();
    });
    dashboard.animate({left:"260px"},500, function(){
        dashboard.show()
    })
});